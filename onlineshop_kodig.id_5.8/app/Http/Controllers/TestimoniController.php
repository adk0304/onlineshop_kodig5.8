<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index(){
        $testimoni=DB::table('testimoni')->paginate(10);
        return view('CRUD/testimoni/index',['testimoni'=>$testimoni]);
    }
    public function tambah(){
        return view('CRUD/testimoni/tambah');
    }
    public function simpan(Request $request){
        DB::table('testimoni')->insert([
            'nama_testi'=>$request->nama_testi,
            'testimoni'=>$request->testimoni,
            'rating'=>$request->rating
        ]);
        return redirect('/testimoni');
    }
    public function edit($id){
        $testimoni=DB::table('testimoni')->where('id_testi',$id)->get();
        return view('CRUD/testimoni/edit',['testimoni'=>$testimoni]);
    }
    public function update(Request $request){
        DB::table('testimoni')->where('id_testi',$request->id)->update([
            'nama_testi'=>$request->nama_testi,
            'testimoni'=>$request->testimoni,
            'rating'=>$request->rating
        ]);
        return redirect('/testimoni');
    }
    public function hapus($id)
    {
        DB::table('testimoni')->where('id_testi',$id)->delete();
        return redirect('/testimoni');
    }
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$testimoni = DB::table('testimoni')
		->where('nama_testi','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('CRUD/testimoni/index',['testimoni' => $testimoni]);
	}
}
