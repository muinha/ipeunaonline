<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
   
	public function news()
	{

		return view('admin.news');

	}

	public function newsCreate()
	{

		return view('admin.news-create');

	}

}
