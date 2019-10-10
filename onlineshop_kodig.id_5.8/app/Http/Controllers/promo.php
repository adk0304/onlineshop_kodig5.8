<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class promo extends Controller
{


    public function getData(){
        $data = DB::table('promo')->get();
        if(count($data)>0){
            $res['message']="sukses!";
            $res['value']=$data;
            return response($res);
        }else {
            $res['message']="kosong bos";
            return response($res);
        }
    }
}
