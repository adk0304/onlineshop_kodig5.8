<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index(){
        $produk=DB::table('produk')->paginate(10);
        return view('CRUD/produk/index',['produk'=>$produk]);
    }
    public function tambah(){
        return view('CRUD/produk/tambah');
    }
    public function simpan(Request $request){
        DB::table('produk')->insert([
            'nama_produk'=>$request->nama_produk,
            'jenis_produk'=>$request->jenis_produk,
            'id_produk_att'=>$request->id_produk_att,
            'id_testi'=>$request->id_testi
        ]);
        return redirect('/produk');
    }
    public function edit($id){
        $produk=DB::table('produk')->where('id_produk',$id)->get();
        return view('CRUD/produk/edit',['produk'=>$produk]);
    }
    public function update(Request $request){
        DB::table('produk')->where('id_produk',$request->id)->update([
            'nama_produk'=>$request->nama_produk,
            'jenis_produk'=>$request->jenis_produk,
            'id_produk_att'=>$request->id_produk_att,
            'id_testi'=>$request->id_testi
        ]);
        return redirect('/produk');
    }
    public function hapus($id)
    {
        DB::table('produk')->where('produk',$id)->delete();
        return redirect('/produk');
    }
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$produk = DB::table('produk')
		->where('nama_produk','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('CRUD/produk/index',['produk' => $produk]);
	}
}
