<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentCategories extends Model
{
    protected $table = 'document_categories';

    protected $fillable = [
        'title'
    ];
    public function notices()
    {
    return $this->hasMany('App\Notice');
    }
}
