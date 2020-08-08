<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table='gallery';
    protected $guarded=[];

    public function images(){

        return $this->hasMany('App\Image');
    }
}
