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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     $nama = 'ilham harahap';
//     return view('about',['nama' => $nama]);
// });
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');


 Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');


