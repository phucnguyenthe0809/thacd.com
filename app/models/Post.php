<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="post";
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
