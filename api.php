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
Route::get('/pelanggan3', 'Pelanggan3Controller@show');
Route::post('/pelanggan3', 'Pelanggan3Controller@store');

Route::get('/produk3', 'Produk3Controller@show');
Route::post('/produk3', 'Produk3Controller@store');

Route::get('/petugas3', 'Petugas3Controller@show');
Route::post('/petugas3', 'Petugas3Controller@store');

Route::get('/transaksi3', 'Transaksi3Controller@show');
Route::get('/transaksi3/{id_transaksi3}', 'Transaksi3Controller@detail');
Route::post('/transaksi3', 'Transaksi3Controller@store');

Route::get('/detail_transaksi3', 'Detail_Transaksi3Controller@show');
Route::get('/detail_transaksi3/{id_detail_transaksi3}', 'Detail_Transaksi3Controller@detail');
Route::post('/detail_transaksi3', 'Detail_Transaksi3Controller@store');

