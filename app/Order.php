<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $fillable = [
    //'id_user',
    // 'ktp',
    // 'nama',
    // 'notelp',
    // 'alamat',
    // 'email',
    'id_place',
    'tglbook',
    'jmlhorang',
    'statusbayar'
];


    public function place(){
        return $this->hasMany('App\Order','id_place');
    }

    public function tempat(){
        return $this->belongsTo('App\Place','id_place');
    }

    public function user(){
        return $this->hasMany('App\User', 'id_user');
    }

    public function pengunjung(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
