<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DTransaksiController extends Controller
{
    public function index(){
        $detail_transaksi=DB::table('detail_transaksi')->paginate(10);
        return view('CRUD/detail_transaksi/index',['detail_transaksi'=>$detail_transaksi]);
    }
    public function tambah(){
        return view('CRUD/detail_transaksi/tambah');
    }
    public function simpan(Request $request){
        DB::table('detail_transaksi')->insert([
            'nama_barang'=>$request->nama_barang,
            'satuan_barang'=>$request->stock_produk,
            'sub_harga'=>$request->size_produk,
            'alamat_kirim'=>$request->alamat_kirim,
            'tanggal_transaksi'=>$request->tanggal_transaksi,
            'poin_transaksi'=>$request->poin_transaksi,
            'invoice'=>$request->harga_produk,
            'id_produk'=>$request->id_produk
        ]);
        return redirect('/detail_transaksi');
    }
    public function edit($id){
        $detail_transaksi=DB::table('detail_transaksi')->where('id_detail',$id)->get();
        return view('CRUD/detail_transaksi/edit',['detail_transaksi'=>$detail_transaksi]);
    }
    public function update(Request $request){
        DB::table('detail_transaksi')->where('id_detail',$request->id)->update([
            'alamat_kirim'=>$request->alamat_kirim,
            'tanggal_transaksi'=>$request->tanggal_transaksi,
            'poin_transaksi'=>$request->poin_transaksi,
            'nama_barang'=>$request->nama_barang,
            'satuan_barang'=>$request->stock_produk,
            'sub_harga'=>$request->size_produk,
            'invoice'=>$request->harga_produk,
            'id_produk'=>$request->id_produk
        ]);
        return redirect('/detail_transaksi');
    }
    public function hapus($id)
    {
        DB::table('detail_transaksi')->where('id_detail',$id)->delete();
        return redirect('/detail_transaksi');
    }
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$detail_transaksi = DB::table('detail_transaksi')
		->where('nama_barang','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('CRUD/detail_transaksi/index',['detail_transaksi' => $detail_transaksi]);

	}
}
