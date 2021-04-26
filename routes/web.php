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


Route::get('/admin', 'HalamanController@home');
// Route::get('/input', 'HalamanController@input');
Route::get('/admin/kuli', 'KuliController@index');
Route::get('/admin/mandor', 'MandorController@index');
Route::get('/admin/proyek', 'ProyekController@index');
Route::get('/admin/artikel', 'ArtikelController@index');

Route::get('/', 'HalamanController@front');





