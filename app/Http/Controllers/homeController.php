<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use App\Models\kelas;
use App\Models\nilai;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        // $nilai = mapel::with('nilai');//relasi tabel
        $nilai = nilai::with('mapel')->orderBy('updated_at', 'desc')->get();
        $mapel = kelas::with('mapel')->where('id', Auth::user()->id)->orderBy('updated_at', 'desc')->limit(6)->get();//kalau one to many tidak usah menggunakan with
        // @dd($mapel);
        $kelas = kelas::orderBy('updated_at', 'desc')->where('id', Auth::user()->id)->limit(6)->get();
        return view('home',[
            'css' => 'css/home.css',
            'nilai' => $nilai,
            'mapel' => $mapel,
            'datas' => $kelas
        ]);

    }
}
