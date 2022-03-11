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
})->name('root')->middleware('guest');

Route::resource('/auth','App\Http\Controllers\userController')->middleware('guest');
Route::post('/auth/login','App\Http\Controllers\userController@login')->middleware('guest');
Route::post('/auth/logout','App\Http\Controllers\userController@logout')->middleware('auth');
//ketika user yang belum login masuk ke halaman yang harus login dulu maka akan diredirect di route yang telah disediakan
//di App/Http/Middleware/Authenticate.php. name()

//middleware untuk mengechek user sudah login atau belum. jika sudah maka akan diarahkan di route yg kita inginkan
//untuk mengatur route bisa di app/providers/RouteServiceProvider.php


Route::get('/welcome', function () {
    return view('welcome',[
        'css' => 'css/home.css'
    ]);
})->middleware('auth');


Route::get('/beranda', 'App\Http\Controllers\berandaController@index')->middleware('auth');


// kelas
Route::resource('/angkatan','App\http\Controllers\kelasController')->middleware('auth');
Route::get('/ruangkelas/{id_kelas}','App\http\Controllers\kelasController@index2')->middleware('auth');
Route::post('/ruangkelas/{id_kelas}/update','App\http\Controllers\kelasController@update2')->middleware('auth');
Route::post('/ruangkelas/{id_kelas}/delete','App\http\Controllers\kelasController@destroy')->middleware('auth');
//end kelas

//profil
Route::get('/profil/edit','App\Http\Controllers\userController@edit')->middleware('auth');
Route::post('/profil/update','App\Http\Controllers\userController@update')->middleware('auth');
Route::get('/profil/edit/password','App\Http\Controllers\userController@editpassword')->middleware('auth');
Route::post('/profil/formupdate/password','App\Http\Controllers\userController@formupdatepassword')->middleware('auth');
Route::post('/profil/update/password','App\Http\Controllers\userController@updatepassword')->middleware('auth');
Route::resource('/profil', 'App\Http\Controllers\profilController')->middleware('auth');
//endprofil

//presensi
Route::resource('/presensi','App\http\Controllers\presensiController')->middleware('auth');
Route::get('/presensi/{id_presensi}/body','App\http\Controllers\presensiController@index2')->middleware('auth');
Route::post('/presensi/{id_presensi}/update','App\http\Controllers\presensiController@update')->middleware('auth');
Route::post('/presensi/{id_presensi}/delete','App\http\Controllers\presensiController@destroy')->middleware('auth');
//endpresensi

//kehadiran
Route::post('/presensi/{id_siswa}/thadir','App\http\Controllers\kehadiranController@thadir')->middleware('auth');
Route::post('/presensi/{id_siswa}/tizin','App\http\Controllers\kehadiranController@tizin')->middleware('auth');
Route::post('/presensi/{id_siswa}/talpha','App\http\Controllers\kehadiranController@talpha')->middleware('auth');
Route::post('/presensi/{id_siswa}/{id_kehadiran}/uhadir','App\http\Controllers\kehadiranController@uhadir')->middleware('auth');
Route::post('/presensi/{id_siswa}/{id_kehadiran}/uizin','App\http\Controllers\kehadiranController@uizin')->middleware('auth');
Route::post('/presensi/{id_siswa}/{id_kehadiran}/ualpha','App\http\Controllers\kehadiranController@ualpha')->middleware('auth');
//endkehadiran

//siswa
Route::resource('/setsiswa', 'App\Http\Controllers\siswaController')->middleware('auth');
Route::post('/setsiswa/{id_siswa}/update','App\Http\Controllers\siswaController@update')->middleware('auth');
Route::post('/setsiswa/{id_siswa}/delete','App\Http\Controllers\siswaController@destroy')->middleware('auth');
//endsiswa

//Mapel
Route::resource('/mapel', 'App\Http\Controllers\mapelController')->middleware('auth');
Route::get('/mapel/{id_mapel}/mapel', 'App\Http\Controllers\mapelController@index')->middleware('auth');
Route::get('/mapel/{id_mapel}/detail', 'App\Http\Controllers\mapelController@detailmapel')->middleware('auth');
Route::post('/mapel/{id_mapel}/update', 'App\Http\Controllers\mapelController@update')->middleware('auth');
Route::post('/mapel/{id_mapel}/delete', 'App\Http\Controllers\mapelController@destroy')->middleware('auth');
//endmapel

//nilai
Route::resource('/nilai', 'App\Http\Controllers\nilaiController')->middleware('auth');
Route::post('/nilai/{id_siswa}/tambah', 'App\Http\Controllers\nilaiController@store')->middleware('auth');
Route::post('/nilai/{id_nilai}/update', 'App\Http\Controllers\nilaiController@update')->middleware('auth');
//endnilai

Route::get('/detailmapel', function(){
    return view('/mapel/detailmapel',[
        'css' => ''
    ]);
})->middleware('auth');

Route::get('/cetaknilai','App\Http\Controllers\cetakController@cetaknilai')->middleware('auth');

//jadwal
Route::resource('/jadwal','App\Http\Controllers\jadwalController')->middleware('auth');
Route::post('/jadwal/{id_jadwal}/delete','App\Http\Controllers\jadwalController@destroy')->middleware('auth');
Route::post('/jadwal/{id_jadwal}/update','App\Http\Controllers\jadwalController@update')->middleware('auth');
//endjadwal


Route::get('/donasi', function(){
    return view('donasi',[
        'css' => ''
    ]);
});



Route::get('/cobacetak', function(){
    return view('cobacetak');
})->middleware('auth');

// Route::get('/cobacrud', function(){
//     return view('ruangkelas/cobacrud',[
//         'css' => '',
//     ]);
// })->middleware('auth');
