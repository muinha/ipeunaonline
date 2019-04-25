<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\News;	
use app\ImageNews;

class SiteController extends Controller
{
    
	public function index()
	{

		$news = DB::select("SELECT * FROM news a INNER JOIN image_news b USING(id)");

		return view("site.index", compact('news'));

	}

}
