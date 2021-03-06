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

	public function news()
	{

		$post = DB::select("SELECT * FROM news a INNER JOIN image_news b USING(id)");

		return view('site.news', compact('post'));

	}

	public function tourism()
	{

		return view('site.tourism');

	}

	public function tourismid($id)
	{

		return view('site.tourismid');

	}

	public function register()
	{

		return view('site.register');

	}

	public function login()
	{

		return view('site.login');

	}

	public function post($id)
	{

		$post = DB::select("SELECT * FROM news a INNER JOIN image_news b USING(id) WHERE b.id_news = $id");

		return view('site.post', compact('post'));

	}

}
