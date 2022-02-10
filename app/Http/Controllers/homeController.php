<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use App\Models\kelas;
use App\Models\nilai;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        // $nilai = mapel::with('nilai');//relasi tabel
        $nilai = nilai::with('mapel')->orderBy('updated_at', 'desc')->get();
        $mapel = mapel::orderBy('updated_at', 'desc')->limit(6)->get();
        $kelas = kelas::orderBy('updated_at', 'desc')->limit(6)->get();
        return view('home',[
            'css' => 'css/home.css',
            'nilai' => $nilai,
            'mapel' => $mapel,
            'datas' => $kelas
        ]);

    }
}
