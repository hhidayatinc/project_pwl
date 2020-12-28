<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $fillable = ['ktp',
    'nama',
    'notelp',
    'alamat',
    'email',
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
}
