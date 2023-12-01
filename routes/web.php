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

Route::get('jumlah', function () {
    $hasil = 2 + 5;
    return "Hasil penjumlahan = " . (string)$hasil;
});

Route::get('halo', function () {
    return "Selamat Datang di Website Kami";

});

Route::get('blog', function () {
	return view('blog');
});
Route::get('hello', function () {
	return view('hello');
});
Route::get('heading', function () {
	return view('heading');
});
Route::get('week2', function () {
	return view('week2');
});
Route::get('link', function () {
	return view('link');
});
Route::get('replikalinktree', function () {
	return view('replikalinktree');
});
Route::get('responsive', function () {
	return view('responsive');
});
Route::get('tugasbootstrap', function () {
	return view('tugasbootstrap');
});
Route::get('js1', function () {
	return view('js1');
});
Route::get('validasi', function () {
	return view('validasi');
});
Route::get('figma', function () {
	return view('figma');
});
Route::get('resume', function () {
	return view('resume');
});
Route::get('projects', function () {
	return view('projects');
});
Route::get('contact', function () {
	return view('contact');
});
Route::get('Suggestion', function () {
	return view('Suggestion');
});
Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('tampilanjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

//Week 14
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
