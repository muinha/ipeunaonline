<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;

class ImageNews extends Model
{
    
    protected $fillable = [
        'id_news','image_principal', 'image'
    ];


    public function news()
    {
        return $this->belongsTo('App\News', 'id_news');
    }

}
