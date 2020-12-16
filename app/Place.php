<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['title','description','price','image'];

    public function place(){
        return $this->hasMany('App\order');
    }
}
