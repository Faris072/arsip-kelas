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
        $id_kelas = session('id_kelas');
        // $data = siswa::with('nilai')->where('id_kelas', $id_kelas)->get();//relasi tabel
        // $data = siswa::with(['nilai' => function($query){
        //     $id_mapel = session('id_mapel');
        //     $query->where('nilai.id_mapel', $id_mapel);
        // }])->where('id_kelas', $id_kelas)->get();//relasi tabel dengan where di with. $q atau $query adalah variable dari laravel
        $data = siswa::all()->where('id_kelas', $id_kelas);

        return view('/cetaknilai',[
            'data' => $data
        ]);
    }
}
