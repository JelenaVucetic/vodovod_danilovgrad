<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'title', 'pdf', 'document_categories_id	'
    ];
    public function category()
    {
    return $this->belongsTo('App\DocumentCategories');
    }
}
