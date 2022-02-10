<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use App\Models\kelas;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        // $nilai = mapel::with('nilai');//relasi tabel
        $mapel = mapel::orderBy('updated_at', 'desc')->limit(6)->get();
        return view('home',[
            'css' => 'css/home.css',
            'datas' => '',
            'mapel' => $mapel
        ]);

    }
}
