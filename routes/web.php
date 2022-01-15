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
        'css' => 'css/home.css'
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'css' => 'css/home.css'
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
    ]);
});

Route::get('/ruangkelas', function(){
    return view('ruangkelas', [
        'css' => '',
    ]);
});

Route::get('/favorit', function(){
    return view('angkatan', [
        'css' => 'css/favorit.css',
    ]);
});
