<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/barang', 'BarangController@index');
Route::post('/barang/create', 'BarangController@create');
Route::get('/barang/{id}/edit', 'BarangController@edit');
Route::post('/barang/{id}/update', 'BarangController@update');
Route::get('/barang/{id}/delete', 'BarangController@delete');

Route::get('/merk', 'MerkController@index');
Route::post('/merk/create', 'MerkController@create');
Route::get('/merk/{id}/edit', 'MerkController@edit');
Route::post('/merk/{id}/update', 'MerkController@update');
Route::get('/merk/{id}/delete', 'MerkController@delete');

Route::get('/distributor', 'DistributorController@index');
Route::post('/distributor/create', 'DistributorController@create');
Route::get('/distributor/{id}/edit', 'DistributorController@edit');
Route::post('/distributor/{id}/update', 'DistributorController@update');
Route::get('/distributor/{id}/delete', 'DistributorController@delete');

Route::get('/transaksi', 'TransaksiController@index');
Route::post('/transaksi/create', 'TransaksiController@create');
Route::get('/transaksi/{id}/edit', 'TransaksiController@edit');
Route::post('/transaksi/{id}/update', 'TransaksiController@update');
Route::get('/transaksi/{id}/delete', 'TransaksiController@delete');

Route::get('/keranjang', 'KeranjangController@index');
Route::post('/keranjang/create', 'KeranjangController@create');
Route::get('/keranjang/{id}/delete', 'KeranjangController@delete');
Route::put('/keranjang/bayar/{id}', 'KeranjangController@bayar');

Route::get('/manager', 'ManagerController@index');
Route::get('/laporanbarang', 'LaporanBarangController@index');

Route::get('importExportView', 'MyController@importExportView');
Route::get('export1', 'MyController@export')->name('export1');
Route::post('import', 'MyController@import')->name('import');

Route::get('importExportView', 'NyController@importExportView');
Route::get('export', 'NyController@export')->name('export2');
Route::post('import', 'NyController@import')->name('import');

Auth::routes();

Route::get('/home', 'HomeController@index');
