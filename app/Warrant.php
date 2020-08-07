<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warrant extends Model
{
    protected $fillable = [
        'title', 'pdf'
    ];

}
