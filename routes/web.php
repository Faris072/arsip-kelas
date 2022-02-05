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

//presensi
Route::resource('/presensi','App\http\Controllers\presensiController');
Route::get('/presensi/{id_presensi}/body','App\http\Controllers\presensiController@index2');
Route::post('/presensi/{id_presensi}/update','App\http\Controllers\presensiController@update');
Route::post('/presensi/{id_presensi}/delete','App\http\Controllers\presensiController@destroy');
//endpresensi

//kehadiran
Route::post('/presensi/{id_siswa}/thadir','App\http\Controllers\kehadiranController@thadir');
Route::post('/presensi/{id_siswa}/tizin','App\http\Controllers\kehadiranController@tizin');
Route::post('/presensi/{id_siswa}/talpha','App\http\Controllers\kehadiranController@talpha');
Route::post('/presensi/{id_siswa}/{id_kehadiran}/uhadir','App\http\Controllers\kehadiranController@uhadir');
Route::post('/presensi/{id_siswa}/{id_kehadiran}/uizin','App\http\Controllers\kehadiranController@uizin');
Route::post('/presensi/{id_siswa}/{id_kehadiran}/ualpha','App\http\Controllers\kehadiranController@ualpha');
//endkehadiran

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
