<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//note : slash (/) itu opsional

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('bootstrap2', function () {
	return view('bootstrap2');
});

//route ets
Route::get('ets', function () {
	return view('ets');
});

//route js1
Route::get('js1', function () {
	return view('js1');
});

//route js2
Route::get('js2', function () {
	return view('js2');
});

//route linktree
Route::get('linktree', function () {
	return view('linktree');
});

//route pertemuan 1
Route::get('Pertemuan1', function () {
	return view('Pertemuan1');
});

//route pertemuan4layouting
Route::get('Pertemuan4layoting', function () {
	return view('Pertemuan4layoting');
});

//route kumpulan url
Route::get('frontend', function () {
	return view('frontend');
});

Route::get('hello',[Coba::class,'helloworld']);
//Route::get('hello','App\Http\Controllers\Coba@helloworld')

Route::get('dosen',[Coba::class,'index']);

//route pegawai
// Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

//route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian form
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action formnya  /formulit/proses ini best practice karana tidak kebanyakan fucntion

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route Pegawai DB
Route::get('/pegawai', [PegawaiDBController::class,'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class,'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class,'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class,'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class,'cari']);

//route template
// Route::get('/template', function () {
// 	return view('template');
// });
