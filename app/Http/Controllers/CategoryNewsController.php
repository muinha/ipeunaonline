<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CategoryNews;

class CategoryNewsController extends Controller
{
    
	public function newsCategory()
	{

		$category = CategoryNews::all();

		dd($category);


	}

	public function newsCategoryCreate()
	{

		return view('admin.news-category-create');

	}

	public function postNewsCategoryCreate(Request $request)
	{

		$request->all();

		$results = CategoryNews::create([
           'category'        =>        $request['category']
        ]);

		if (count($results) == 0) {
			throw new Exception("Erro ao cadastrar a categoria", 1);			
		} else {
			return redirect('admin/news/categories')->with('status', 'Categoria Cadastrada com suscesso');
		}

	}

	public function categoryNews()
	{

		return view('admin.category-news');

	}	

}
