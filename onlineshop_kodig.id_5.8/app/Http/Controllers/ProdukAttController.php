<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukAttController extends Controller
{
    public function index(){
        $produk_att=DB::table('produk_att')->paginate(10);
        return view('CRUD/produk_att/index',['produk_att'=>$produk_att]);
    }
    public function tambah(){
        return view('CRUD/produk_att/tambah');
    }
    public function simpan(Request $request){
        DB::table('produk_att')->insert([
            'SKU'=>$request->SKU,
            'warna_produk'=>$request->warna_produk,
            'jumlah_produk'=>$request->jumlah_produk,
            'stock_produk'=>$request->stock_produk,
            'size_produk'=>$request->size_produk,
            'harga_produk'=>$request->harga_produk,
            'id_galery'=>$request->id_galery,
            'id_promo'=>$request->id_promo,
            'id_produk'=>$request->id_produk

        ]);
        return redirect('/produk_att');
    }
    public function edit($id){
        $produk_att=DB::table('produk_att')->where('id_produk_att',$id)->get();
        return view('CRUD/produk_att/edit',['produk_att'=>$produk_att]);
    }
    public function update(Request $request){
        DB::table('produk_att')->where('id_produk_att',$request->id)->update([
            'SKU'=>$request->SKU,
            'warna_produk'=>$request->warna_produk,
            'jumlah_produk'=>$request->jumlah_produk,
            'stock_produk'=>$request->stock_produk,
            'size_produk'=>$request->size_produk,
            'harga_produk'=>$request->harga_produk,
            'id_galery'=>$request->id_galery,
            'id_promo'=>$request->id_promo,
            'id_produk'=>$request->id_produk
        ]);
        return redirect('/produk_att');
    }
    public function hapus($id)
    {
        DB::table('produk_att')->where('id_produk_att',$id)->delete();
        return redirect('/produk_att');
    }
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$produk_att = DB::table('produk_att')
		->where('SKU','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('CRUD/prproduk_att/index',['produk_att' => $produk_att]);

	}
}
