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

//Route::get('/galery','galerycontroller@index');

Route::get('/getpromo','promo@getData');
Route::post('/postpromo','promo@postData');
