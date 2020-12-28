<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table ='places';
    protected $fillable = ['title','description','price','image'];

    public function order(){
        return $this->hasOne('App\Order','id_place');
    }
    
}
