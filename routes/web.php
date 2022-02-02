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
    return view('/root',[
        'css' => ''
    ]);
});

Route::get('/welcome', function () {
    return view('welcome',[
        'css' => 'css/home.css'
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'css' => 'css/home.css'
    ]);
});

Route::resource('/angkatan','App\http\Controllers\kelasController');

Route::get('/profil', function(){
    return view('profil', [
        'css' => '',
    ]);
});

Route::get('/ruangkelas', function(){
    return view('ruangkelas', [
        'css' => 'css/ruangkelas.css',
    ]);
});

Route::get('/favorit', function(){
    return view('angkatan', [
        'css' => 'css/favorit.css',
    ]);
});

Route::get('/editsiswa', function(){
    return view('ruangkelas/editsiswa', [
        'css' => '',
    ]);
});

Route::get('/ruangkelaspresensi', function(){
    return view('ruangkelas/ruangkelaspresensi', [
        'css' => ''
    ]);
});

Route::get('/bodypresensi', function(){
    return view('ruangkelas/bodypresensi', [
        'css' => ''
    ]);
});

Route::get('/ubahpresensi', function() {
    return view('ruangkelas/ubahpresensi',[
        'css' => ''
    ]);
});

Route::get('/tambahpresensi', function() {
    return view('ruangkelas/tambahpresensi',[
        'css' => ''
    ]);
});

Route::get('/setsiswa', function(){
    return view('ruangkelas/setsiswa',[
        'css' => ''
    ]);
});

Route::get('/tambahsiswa', function(){
    return view('ruangkelas/tambahsiswa',[
        'css' => ''
    ]);
});

Route::get('/mapel', function(){
    return view('/mapel',[
        'css' => 'css/mapel.css'
    ]);
});

Route::get('/detailmapel', function(){
    return view('/mapel/detailmapel',[
        'css' => ''
    ]);
});






Route::get('/cobacetak', function(){
    return view('cobacetak');
});

Route::get('/cobacrud', function(){
    return view('ruangkelas/cobacrud',[
        'css' => '',
    ]);
});
