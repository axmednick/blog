<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected  $table='categories';
    protected  $guarded=[];

    public function sub_categories(){
        return $this->hasMany('App\Categories','parent','id');
    }
    public function posts(){
        return $this->hasMany('App\Post','category_id','id');
    }
}
