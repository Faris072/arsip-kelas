<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use App\Models\kelas;
use App\Models\nilai;
use App\Models\siswa;
use Illuminate\Http\Request;

class cetakController extends Controller
{
    public function cetaknilai(){
        $id_mapel = session('id_mapel');
        $data = nilai::with('siswa')->where('id_mapel', $id_mapel)->get();//relasi tabel
        return view('/cetaknilai',[
            'data' => $data
        ]);
    }
}
