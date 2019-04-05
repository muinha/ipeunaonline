<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    
	protected $fillable = ['category'];

	protected $hidden = ['remember_token'];

}
