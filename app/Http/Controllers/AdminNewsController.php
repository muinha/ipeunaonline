<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostAdminRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\CategoryNews;
use App\News;
use App\ImageNews;

class AdminNewsController extends Controller
{
   
	public function news()
	{
		$news = News::all();

		return view('admin.news', compact('news'));

	}

	public function newsCreate()
	{

		$categories = CategoryNews::all();

		return view('admin.news-create', compact('categories'));

	}

	public function store(PostAdminRequest $request)
	{


		$nameFile = null;

		$request->all();

		if($request->hasFile('image_principal') && $request->file('image_principal')->isValid()){
			$name = uniqid(date('HisYmd'));
			$extension = $request->image_principal->extension();
			$nameFile = "{$name}.{$extension}";
			$upload = $request->image_principal->storeAs('news', $nameFile);

			if ( !$upload ){
			return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();
			}
 
		}
		
		$results = News::create([
			'title' 	=> 	$request['title'],
			'subtitle'	=>	$request['subtitle'],
			'category'  =>  $request['category'],
			'post_1'    =>	$request['post_1'],
			'post_2'    =>	$request['post_2'],
			'post_3'    =>	$request['post_3'],
			'post_4'    =>	$request['post_4'],
		]);

		$imageid = $results->id;

		$image = ImageNews::create([
			'id_news'			=>	$imageid,
			'image_principal'	=>	$nameFile,
		]);

		if(count($results) == 0){
			return redirect()->back()->with('error', 'Erro ao postar a noticia !!');
		} else {
			return redirect('admin/news')->with('success', 'Noticia Postada com suscesso!!');
		}

	}

	public function newsUpdate($id)
	{

		$news = News::find($id);

		$newsImage = News::find($id)->imageNews;
		
		$categories = CategoryNews::all();

		return view('admin.news-update', compact('news', 'newsImage', 'categories'));

	}

	public function update($id, PostAdminRequest $request)
	{
		$request->all();

		$nameFile = ' ';

		$image = ImageNews::find($id);

		if($request->hasFile('image_principal') && $request->file('image_principal')->isValid()){
			$name = uniqid(date('HisYmd'));
			$extension = $request->image_principal->extension();
			$nameFile = "{$name}.{$extension}";
			$upload = $request->image_principal->storeAs('news', $nameFile);
	
			if ( !$upload ){
			return redirect()->back()->with('error', 'Falha ao fazer upload')->withInput();
			}
		}

		if($nameFile != ' ')
		Storage::delete("news/{$image->image_principal}");

		if($nameFile == ' ')
			$nameFile = $image->image_principal;

		$image->update([
			'image_principal'	=>	$nameFile
		]);

		$news = News::find($id);

		$results = $news->update([
			'title' 	=> 	$request['title'],
			'subtitle'	=>	$request['subtitle'],
			'category'  =>  $request['category'],
			'news'		=>	$request['news']			
		]);

		if(count($results) == 0){
			return redirect()->back()->with('error', 'Falha ao atualizar dados da noticia!');
		} else {
			return redirect('admin/news')->with('success', 'Dados atualizados com sucesso!');
		}

	}

	public function delete($id, News $news, ImageNews $imageNews)
	{

		if(!$news = News::find($id))
			redirect()->back();

		if(!$imageNews = ImageNews::find($id))
			redirect()->back();

		if($news->delete() and $imageNews->delete()){
			Storage::delete("news/{$imageNews->image_principal}");
			return redirect('admin/news')->with('success', 'Sucesso ao deletar noticia!');
		}

		return redirect()->back()->with('error', 'Falha ao deletar a noticia!');

	}



}