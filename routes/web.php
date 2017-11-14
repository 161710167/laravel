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

//basic routing
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Hallo<h1>'
    . 'Selamat Datang Di Webapp Saya<br>'
    . 'Laravel Emang Keren.';
});

Route::get('/kontak', function () {
    return view('welcome');
});

//routing parameter
Route::get('user/{nama}', function ($a) {
    return 'nama saya adalah <br>'.$a.'<br>';
});

Route::get('/jajanan/{makan}/{minum}/{ngemil}', function ($a,$b,$c){
    return 'makanan '.$a.'</br><br>'
    . 'minuman '.$b.'</br><br>'
    . 'ngemil '.$c.'</br><br>';
});

//route optimal parameter
Route::get('saya/{nama?}', function ($nama= 'yeni kartika ayu') {
    return $nama;
});
