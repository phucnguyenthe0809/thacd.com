<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
    public $timestamps=false;
  
    public function children()
    {
        return $this->hasMany('App\Models\Category', 'id_parent', 'id');
    }
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'category_id', 'id')->orderBy('id','desc');
    }
   

}
