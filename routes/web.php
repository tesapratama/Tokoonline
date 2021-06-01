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

Route::get('/', function () {
    return view('tema.user');
});


Route::get('/qytia', function () {
    return view('tema.admin');
});

// Route Kategori
Route::get('/kategori', 'kategoriController@index');
Route::get('/kategori/tambah-kategori', 'kategoriController@create');
Route::post('/kategori/simpan-kategori', 'kategoriController@store');
Route::get('/kategori/{id}/edit', 'kategoriController@edit');
Route::post('/kategori/update', 'kategoriController@update');
Route::get('/kategori/{id}/hapus','kategoriController@destroy');

// route SubKategori
Route::get('/subkategori', 'subkategoriController@index');
Route::get('/subkategori/tambah-subkategori', 'subkategoriController@create');
Route::post('/subkategori/simpan-subkategori', 'subkategoriController@store');
Route::get('/subkategori/{id}/edit', 'subkategoriController@edit');
Route::post('/subkategori/update', 'subkategoriController@update');
Route::get('/subkategori/{id}/hapus','subkategoriController@destroy');

// route produk
Route::get('/produk', 'subkategoriController@index');
Route::get('/produk/tambah-subkategori', 'subkategoriController@create');
Route::post('/produk/simpan-subkategori', 'subkategoriController@store');
Route::get('/produk/{id}/edit', 'subkategoriController@edit');
Route::post('/produk/update', 'subkategoriController@update');
Route::get('/produk/{id}/hapus','subkategoriController@destroy');


Route::view('/pelanggan', 'pelanggan.v_list');
Route::view('/pengguna', 'pengguna.v_list_pengguna');
Route::view('/produk', 'produk.v_list_produk');
Route::view('/pelanggan', 'pelanggan.v_list_pelanggan');
Route::view('/alamat', 'alamat.v_list_alamat');
Route::view('/bank', 'bank.v_list_bank');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
