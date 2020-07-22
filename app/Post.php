<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'category_id', 'cover_image'
    ];

    public function images()
    {
    return $this->hasMany('App\Image');
    }
}
