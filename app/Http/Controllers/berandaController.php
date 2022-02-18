<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use App\Models\kelas;
use App\Models\nilai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function index(){
        // $nilai = nilai::with('mapel')->orderBy('updated_at', 'desc')->get();
        $nilai = DB::select('SELECT * FROM kelas k, mapel m, nilai n WHERE k.id_kelas = m.id_kelas AND m.id_mapel = n.id_mapel AND k.id = '.Auth::user()->id.' ORDER BY n.updated_at DESC');
        // $mapel = kelas::with('mapel')->where('id', Auth::user()->id)->orderBy('updated_at', 'desc')->limit(6)->get();//kalau one to many tidak usah menggunakan with
        $mapel = DB::select('select * from kelas k,mapel m where m.id_kelas = k.id_kelas and k.id = '.Auth::user()->id.' order by m.updated_at desc limit 6');//menulis sql manual
        // @dd($mapel);
        $kelas = kelas::orderBy('updated_at', 'desc')->where('id', Auth::user()->id)->limit(6)->get();
        return view('beranda',[
            'css' => 'css/home.css',
            'nilai' => $nilai,
            'mapel' => $mapel,
            'datas' => $kelas
        ]);

    }
}
