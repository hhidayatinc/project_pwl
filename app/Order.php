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
<<<<<<< HEAD
    'tglbook',
    'jmlhorang'];
=======
    'id_place',
    'tglbook',
    'jmlhorang',
    'statusbayar'
];
>>>>>>> 6607049b1ce43036fc4bb1b501b66705d1a876f9

    public function place(){
        return $this->hasMany('App\Order','id_place');
    }

    public function tempat(){
        return $this->belongsTo('App\Place','id_place');
    }
}
