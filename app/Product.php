<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded  = [];

    public function category(){
        return $this->belongsToMany('App\Category','category_products','product_id','category_id');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag','product_tags','product_id','tag_id');
    }

}

