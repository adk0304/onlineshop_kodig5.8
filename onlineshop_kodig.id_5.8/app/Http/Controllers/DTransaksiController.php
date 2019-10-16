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
            'satuan_barang'=>$request->satuan_barang,
            'sub_harga'=>$request->sub_harga,
            'alamat_kirim'=>$request->alamat_kirim,
            'tanggal_transaksi'=>$request->tanggal_transaksi,
            'poin_transaksi'=>$request->poin_transaksi,
            'invoice'=>$request->invoice,
            'id_transaksi'=>$request->id_transaksi,
            'id_produk_att'=>$request->id_produk_att
        ]);
        return redirect('/dtransaksi');
    }
    public function edit($id){
        $detail_transaksi=DB::table('detail_transaksi')->where('id_detail',$id)->get();
        return view('CRUD/detail_transaksi/edit',['detail_transaksi'=>$detail_transaksi]);
    }
    public function update(Request $request){
        DB::table('detail_transaksi')->where('id_detail',$request->id)->update([
            'nama_barang'=>$request->nama_barang,
            'satuan_barang'=>$request->satuan_barang,
            'sub_harga'=>$request->sub_harga,
            'alamat_kirim'=>$request->alamat_kirim,
            'tanggal_transaksi'=>$request->tanggal_transaksi,
            'poin_transaksi'=>$request->poin_transaksi,
            'invoice'=>$request->invoice,
            'id_transaksi'=>$request->id_transaksi,
            'id_produk_att'=>$request->id_produk_att
        ]);
        return redirect('/dtransaksi');
    }
    public function hapus($id)
    {
        DB::table('detail_transaksi')->where('id_detail',$id)->delete();
        return redirect('/dtransaksi');
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
