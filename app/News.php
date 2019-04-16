<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\ImageNews;

class News extends Model
{
    
    protected $fillable = [
        'title', 'subtitle','category', 'news', 'image_principal', 'image'
    ];

    public function imageNews()
    {

        return $this->hasMany('App\ImageNews', 'id_news');

    }

}
