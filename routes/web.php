<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;

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

Route::get('index', function () {
	return view('index');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('Pertemuan1', function () {
	return view('Pertemuan1');
});

Route::get('Pertemuan4layoting', function () {
	return view('Pertemuan4layoting');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('hello',[Coba::class,'helloworld']);
//Route::get('hello','App\Http\Controllers\Coba@helloworld')
