<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\ImageNews;

class News extends Model
{
    
    protected $fillable = [
        'title', 'subtitle','category', 'post_1', 'post_2', 'post_3', 'post_4', 'image_principal', 'image', 'timestamp'
    ];

    public function imageNews()
    {

        return $this->hasMany('App\ImageNews', 'id_news');

    }

}
