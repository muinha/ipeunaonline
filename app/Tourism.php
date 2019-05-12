<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description', 'image_principal'
    ];
}
