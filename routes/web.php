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

Route::get('halo', function () {
    return "Halo, selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Haloo Apa Kabar<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('layout', function () {
	return view('layout');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('javascript', function () {
	return view('javascript');
});

Route::get('hello', function () {
	return view('hello');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
