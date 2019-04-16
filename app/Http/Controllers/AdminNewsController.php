<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

	public function store(Request $request)
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
			'news'		=>	$request['news'],
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


}
