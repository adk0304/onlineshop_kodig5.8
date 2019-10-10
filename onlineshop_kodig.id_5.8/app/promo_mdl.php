<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promo_mdl extends Model
{
    public $timestams=false;
    protected $promo_tabel ='promo';
    protected $promo_fill=['nama_promo','jenis_promo','nominal_promo','expired_date'];
}
