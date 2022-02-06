<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use App\Models\kelas;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $datas = mapel::with('kelas');//relasi tabel
        return view('home',[
            'css' => 'css/home.css',
            'datas' => $datas
        ]);

    }
}
