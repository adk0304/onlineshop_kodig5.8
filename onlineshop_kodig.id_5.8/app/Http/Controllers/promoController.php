<?php

namespace App\Http\Controllers;
use App\promo;
use Illuminate\Http\Request;

class promoController extends Controller
{
    public function index()
    {
        $data_promo=\App\promo::all();
        return view('promo.index',['data_promo'=>$data_promo]);
   //     return view('promo.index',['data_promo'=>$data_promo]);
    }

    public function create(Request $request)
    {
        \App\promo::create($request->all());
        #return $request->all();
        return redirect('/promo')->with('sukses','Data berhasil di input');
    }
    public function edit($id_promo)
    {
        $promo=\App\promo::where("id_promo", "=", $id_promo)->first();
        // $promo = promo::WhereId($id_promo)->firstOrFail();
        dd($promo);
        // dd($id_promo);
    }
}

