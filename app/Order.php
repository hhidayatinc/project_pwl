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
    'jenis',
    'tglbook',
    'jmlhorang',
    'statusbayar'];

    public function place(){
        return $this->belongsTo('App\Place');
    }
}
