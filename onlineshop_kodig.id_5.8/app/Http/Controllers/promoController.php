<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index(){
        $promo=DB::table('promo')->paginate(10);
        return view('CRUD/promo/index',['promo'=>$promo]);
    }
    public function tambah(){
        return view('CRUD/promo/tambah');
    }
    public function simpan(Request $request){
        DB::table('promo')->insert([
            'nama_promo'=>$request->nama_promo,
            'jenis_promo'=>$request->jenis_promo,
            'nominal_promo'=>$request->nominal_promo,
            'expired_date'=>$request->expired_date
        ]);
        return redirect('/promo');
    }
    public function edit($id){
        $promo=DB::table('promo')->where('id_promo',$id)->get();
        return view('CRUD/promo/edit',['promo'=>$promo]);
    }
    public function update(Request $request){
        DB::table('promo')->where('id_promo',$request->id)->update([
            'nama_promo'=>$request->nama_promo,
            'jenis_promo'=>$request->jenis_promo,
            'nominal_promo'=>$request->nominal_promo,
            'expired_date'=>$request->expired_date
        ]);
        return redirect('/promo');
    }
    public function hapus($id)
    {
        DB::table('promo')->where('id_promo',$id)->delete();
        return redirect('/promo');
    }
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$promo = DB::table('promo')
		->where('nama_promo','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('CRUD/promo/index',['promo' => $promo]);

	}


}
