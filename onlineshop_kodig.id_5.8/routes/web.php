<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/a', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/mart', function(){
    return view('pages.mart');
});

Route::get('/detail', function(){
    return view('pages.detail');
});

Route::get('/event', function(){
    return view('pages.event');
});

Route::get('/news', function(){
    return view('pages.news');
});

Route::get('/aboutus', function(){
    return view('pages.aboutus');
});

Route::get('/cart', function(){
    return view('pages.cart');
});

Route::get('/chackout', function(){
    return view('pages.cek');
});

Route::get('/invoice', function(){
    return view('pages.invoice');
});
//PROMO
Route::get('promo', 'PromoController@index');
Route::get('promo/tambah','PromoController@tambah');
Route::post('promo/simpan', 'PromoController@simpan');
Route::get('promo/edit/{id}','PromoController@edit');
Route::post('promo/update','PromoController@update');
Route::get('promo/hapus/{id}','PromoController@hapus');
Route::get('promo/cari','PromoController@cari');
//GALERY
Route::get('galery', 'GaleryController@index');
Route::get('galery/tambah','GaleryController@tambah');
Route::post('galery/simpan', 'GaleryController@simpan');
Route::get('galery/edit/{id}','GaleryController@edit');
Route::post('galery/update','GaleryController@update');
Route::get('galery/hapus/{id}','GaleryController@hapus');
Route::get('galery/cari','GaleryController@cari');
//PRODUK_ATT
Route::get('produk_att', 'ProdukAttController@index');
Route::get('produk_att/tambah','ProdukAttController@tambah');
Route::post('produk_att/simpan', 'ProdukAttController@simpan');
Route::get('produk_att/edit/{id}','ProdukAttController@edit');
Route::post('produk_att/update','ProdukAttController@update');
Route::get('produk_att/hapus/{id}','ProdukAttController@hapus');
Route::get('produk_att/cari','ProdukAttController@cari');
//PRODUK
Route::get('produk', 'ProdukController@index');
Route::get('produk/tambah','ProdukController@tambah');
Route::post('produk/simpan', 'ProdukController@simpan');
Route::get('produk/edit/{id}','ProdukController@edit');
Route::post('produk/update','ProdukController@update');
Route::get('produk/hapus/{id}','ProdukController@hapus');
Route::get('produk/cari','ProdukController@cari');
//DETAIL TRANSAKSI
Route::get('dtransaksi', 'DTransaksiController@index');
Route::get('dtransaksi/tambah','DTransaksiController@tambah');
Route::post('dtransaksi/simpan', 'DTransaksiController@simpan');
Route::get('dtransaksi/edit/{id}','DTransaksiController@edit');
Route::post('dtransaksi/update','DTransaksiController@update');
Route::get('dtransaksi/hapus/{id}','DTransaksiController@hapus');
Route::get('dtransaksi/cari','DTransaksiController@cari');
//TRANSAKSI
Route::get('transaksi', 'TransasksiController@index');
Route::get('transaksi/tambah','TransasksiController@tambah');
Route::post('transaksi/simpan', 'TransasksiController@simpan');
Route::get('transaksi/edit/{id}','TransasksiController@edit');
Route::post('transaksi/update','TransasksiController@update');
Route::get('transaksi/hapus/{id}','TransasksiController@hapus');
Route::get('transaksi/cari','TransasksiController@cari');

