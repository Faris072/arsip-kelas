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


// kelas
Route::resource('/angkatan','App\http\Controllers\kelasController');
Route::get('/ruangkelas/{id_kelas}','App\http\Controllers\kelasController@index2');
Route::post('/ruangkelas/{id_kelas}/update','App\http\Controllers\kelasController@update2');
Route::post('/ruangkelas/{id_kelas}/delete','App\http\Controllers\kelasController@destroy');
//end kelas

Route::get('/profil', function(){
    return view('profil', [
        'css' => '',
    ]);
});

Route::get('/favorit', function(){
    return view('angkatan', [
        'css' => 'css/favorit.css',
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

//siswa
Route::resource('/setsiswa', 'App\Http\Controllers\siswaController');
Route::post('/setsiswa/{id_siswa}/update','App\Http\Controllers\siswaController@update');
Route::post('/setsiswa/{id_siswa}/delete','App\Http\Controllers\siswaController@destroy');
//endsiswa

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
