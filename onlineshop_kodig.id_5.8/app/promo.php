<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    protected $table='promo';
    protected $primary_key='id_promo';
    // protected $fillable=['id_promo','nama_promo','jenis_promo','nominal_promo','expired_date'];
}
