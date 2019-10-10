<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\promo_mdl;
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
    public function postData(){
        $data=promo::create([
            'nama_promo'=>$request->nama_promo,
            'jenis_promo'=>$request->jenis_promo,
            'nominal_promo'=>$request->nominal_promo,
        ]);
        $res['message']="succes post promo!";
        $res['value']=$data;
        return response($res);
    }
}
