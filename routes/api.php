<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Petugas
Route::post('/register', 'Petugas@register');
Route::post('/login', 'Petugas@login');
Route::post('/edit/{id}', 'Petugas@edit');
Route::delete('/hapus/{id}', 'Petugas@hapus');
route::get('/tampil', 'Petugas@show');

//Penyewa
Route::post('/register_penyewa', 'Penyewa@register');
Route::post('/edit_penyewa/{id}', 'Penyewa@edit');
Route::delete('/hapus_penyewa/{id}', 'Penyewa@hapus');
route::get('/tampil_penyewa', 'Penyewa@show');

//Nama Mobil
Route::post('/register_namamobil', 'NamaMobil@create');
Route::post('/edit_namamobil/{id}', 'NamaMobil@edit');
Route::delete('/hapus_namamobil/{id}', 'NamaMobil@hapus');
route::get('/tampil_namamobil', 'NamaMobil@show');

//Jenis Mobil
Route::post('/register_jenismobil', 'JenisMobil@create');
Route::post('/edit_jenismobil/{id}', 'JenisMobil@edit');
Route::delete('/hapus_jenismobil/{id}', 'JenisMobil@hapus');
route::get('/tampil_jenismobil', 'JenisMobil@show');

//Data Transaksi
Route::post('/register_datatransaksi', 'DataTransaksi@create');
Route::post('/edit_datatransaksi/{id}', 'DataTransaksi@edit');
Route::delete('/hapus_datatransaksi/{id}', 'DataTransaksi@hapus');
route::get('/tampil_datatransaksi', 'DataTransaksi@show');