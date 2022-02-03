<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kelas::all()->sortByDesc('created_at');
        $angkatans = kelas::distinct()->get('angkatan')->sortByDesc('angkatan');// untuk desc gunakan sortByDesc() untuk asc gunakan sortBy(). menggunakan get karena jika menggunakan all data tidak bisa dibaca
        return view('angkatan', [
            'css' => 'css/angkatan.css',
            'datas' => $data,
            'angkatan' => $angkatans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request['id_kelas'] = 1000000000;
        $request['id'] = 1000000000;

        $validatedData = $request->validate([
            'foto_kelas' => 'max:1024',
            'angkatan' => 'required',
            'nama_kelas' => 'required|max:20',
            'deskripsi' => '',
            // 'id_kelas' => 'required',
            'id' => 'required'
        ]);

        if(empty($request['foto_kelas'])){
            $validatedData['foto_kelas'] = 'default.jpg';
        }
        else{
            $namafoto = $request->file('foto_kelas')->getClientOriginalName();
            $ekstensi = $request->file('foto_kelas')->getClientOriginalExtension();
            $fotokelas = mt_rand(1000000000,9999999999) .'.'. $ekstensi;
            $request->file('foto_kelas')->storeAs('/fotokelas', $fotokelas);
            $validatedData['foto_kelas'] = $fotokelas;
        }

        kelas::create($validatedData);

        return redirect('/angkatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        //
    }
}
