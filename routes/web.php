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


Route::get('/home', 'PageController@home');
Route::get('/sejarah-pkm', 'PageController@sejarah');
Route::get('/tujuan-pkm', 'PageController@tujuan');
Route::get('/karakteristik-umum', 'PageController@karakteristik');
Route::get('/kriteria-bidang', 'PageController@kriteria');
Route::get('/tata-cara', 'PageController@tatacara');
Route::get('/aspek-penilaian', 'PageController@aspekpenilaian');