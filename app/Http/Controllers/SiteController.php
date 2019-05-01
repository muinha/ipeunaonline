<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;	
use App\ImageNews;

class SiteController extends Controller
{
    
	public function index()
	{

		$news = DB::select("SELECT * FROM news a INNER JOIN image_news b USING(id)");

		return view("site.index", compact('news'));

	}

	public function post($id)
	{

		$post = DB::select("SELECT * FROM news a INNER JOIN image_news b USING(id) WHERE b.id_news = $id");

		return view('site.post', compact('post'));

	}

}
