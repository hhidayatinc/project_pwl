<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['ktp',
    'nama',
    'notelp',
    'alamat',
    'email',
    'tglbook',
    'jmlhorang'];

    public function place(){
        return $this->hasMany('App\Place','jenis');
    }
}
