<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function index(){
        $transaksi=DB::table('transaksi')->paginate(10);
        return view('CRUD/transaksi/index',['transaksi'=>$transaksi]);
    }
    public function tambah(){
        return view('CRUD/transaksi/tambah');
    }
    public function simpan(Request $request){
        DB::table('transaksi')->insert([
            'nomor_transaksi'=>$request->nomor_transaksi,
            'total_harga'=>$request->total_harga,
            'id_detail'=>$request->id_detail
        ]);
        return redirect('/transaksi');
    }
    public function edit($id){
        $transaksi=DB::table('transaksi')->where('id_transaksi',$id)->get();
        return view('CRUD/transaksi/edit',['transaksi'=>$transaksi]);
    }
    public function update(Request $request){
        DB::table('transaksi')->where('id_transaksi',$request->id)->update([
            'nomor_transaksi'=>$request->nomor_transaksi,
            'total_harga'=>$request->total_harga,
            'id_detail'=>$request->id_detail
        ]);
        return redirect('/transaksi');
    }
    public function hapus($id)
    {
        DB::table('transaksi')->where('id_transaksi',$id)->delete();
        return redirect('/transaksi');
    }
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$transaksi = DB::table('transaksi')
		->where('nomor_transaksi','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('CRUD/transaksi/index',['transaksi' => $transaksi]);

	}
}
