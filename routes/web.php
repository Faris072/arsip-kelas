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
    return view('welcome',[
        'css' => 'css/home.css',
        'js' => ''
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'css' => 'css/home.css',
        'js' => ''
    ]);
});

Route::get('/angkatan', function(){
    return view('angkatan', [
        'css' => 'css/angkatan.css',
        'js' => 'js/angkatan.js'
    ]);
});

Route::get('/profil', function(){
    return view('profil', [
        'css' => '',
        'js' => ''
    ]);
});
