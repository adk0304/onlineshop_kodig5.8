<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index(){
        $galery=DB::table('galery')->paginate(10);
        return view('CRUD/galery/index',['galery'=>$galery]);
    }
    public function tambah(){
        return view('CRUD/galery/tambah');
    }
    public function simpan(Request $request){
        DB::table('galery')->insert([
            'gambar_produk'=>$request->gambar_produk
        ]);
        return redirect('/galery');
    }
    public function edit($id){
        $galery=DB::table('galery')->where('id_galery',$id)->get();
        return view('CRUD/galery/edit',['galery'=>$galery]);
    }
    public function update(Request $request){
        DB::table('galery')->where('id_galery',$request->id)->update([
            'gambar_produk'=>$request->gambar_produk
        ]);
        return redirect('/galery');
    }
    public function hapus($id)
    {
        DB::table('galery')->where('id_galery',$id)->delete();
        return redirect('/galery');
    }
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$galery = DB::table('galery')
		->where('gambar_produk','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('CRUD/galery/index',['galery' => $galery]);
	}
}
