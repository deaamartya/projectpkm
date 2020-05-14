<?php
Route::get('/', 'PageController@home');
Route::get('/sejarah-pkm', 'PageController@sejarah');
Route::get('/tujuan-pkm', 'PageController@tujuan');
Route::get('/karakteristik-umum', 'PageController@karakteristik');
Route::get('/kriteria-bidang', 'PageController@kriteria');
Route::get('/tata-cara', 'PageController@tatacara');
Route::get('/aspek-penilaian', 'PageController@aspekpenilaian');
Route::get('/perbedaan-bidang', 'PageController@perbandingan');
Route::get('/bidang/getData/{id}','PageController@getData');
Route::post('/sendMail','PageController@sendMail');