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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Admin\HomeController@index')->name('home');
Route::resource('/agama','Admin\AgamaController');
Route::put('/agama','Admin\AgamaController@perbarui')->name('agama.perbarui');
Route::get('/pekerjaan/search', 'Admin\PekerjaanController@search')->name('pekerjaan.search');
Route::resource('/pekerjaan','Admin\PekerjaanController');
Route::put('/pekerjaan','Admin\PekerjaanController@perbarui')->name('pekerjaan.perbarui');
Route::resource('/provinsi','Admin\ProvinsiController');
Route::resource('/kabupaten','Admin\KabupatenController');
Route::resource('/kecamatan','Admin\KecamatanController');
Route::resource('/kelurahan','Admin\KelurahanController');
