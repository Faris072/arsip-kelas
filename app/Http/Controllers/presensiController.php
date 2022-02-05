<?php

namespace App\Http\Controllers;

use App\Models\presensi;
use Illuminate\Http\Request;

class presensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_kelas = session('id_kelas');
        $datas = presensi::all()->where('id_kelas', $id_kelas);
        return view('ruangkelas/ruangkelaspresensi', [
            'css' => '',
            'datas' => $datas
        ]);
    }

    public function index2($id_presensi)
    {
        $data = presensi::find($id_presensi);
        return view('ruangkelas/bodypresensi', [
            'css' => '',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangkelas/tambahpresensi',[
            'css' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_kelas = session('id_kelas');
        $request['id_kelas'] = $id_kelas;
        $validatedData = $request->validate([
            'id_kelas' => '',
            'tanggal_presensi' => 'required',
            'nama_presensi' => 'required|max:20',
        ]);
        presensi::create($validatedData);

        return redirect('/presensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function show(presensi $presensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function edit(presensi $presensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, presensi $presensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(presensi $presensi)
    {
        //
    }
}
