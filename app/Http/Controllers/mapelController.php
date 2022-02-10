<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use App\Models\kelas;
use App\Models\nilai;
use App\Models\siswa;
use Illuminate\Http\Request;

class mapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_mapel)
    {
        $mpl = mapel::with('kelas')->where('id_mapel', $id_mapel)->get()->first();
        // @dd($mpl);
        $id_kelas = $mpl->kelas->id_kelas;
        session()->put('id_kelas', $id_kelas);//untuk di home supaya dapat session
        session()->put('id_mapel', $id_mapel);
        $mapel = mapel::find($id_mapel);
        return view('/mapel',[
            'css' => 'css/mapel.css',
            'm' => $mapel,
        ]);
    }

    public function detailmapel($id_mapel){
        $mp = mapel::find($id_mapel);
        return view('/mapel/detailmapel',[
            'css' => 'css/mapel.css',
            'mp' => $mp
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $kelas = kelas::find($id_kelas);
        $kelas_mapel = $kelas->nama_kelas;
        $request['id_kelas'] = $id_kelas;
        $request['kelas_mapel'] = $kelas_mapel;
        $validatedData = $request->validate([
            'id_kelas' => '',
            'mapel' => 'required|max:50',
            'kelas_mapel' => '',
            'nama_nilai' => 'required|max:50',
            'deskripsi_mapel' => '',
            'tanggal_mapel' => 'required'
        ]);

        mapel::create($validatedData);

        return redirect('/ruangkelas/'.$id_kelas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(mapel $mapel)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id_kelas = session('id_kelas');
        $id_mapel = session('id_mapel');
        $validatedData = $request->validate([
            'mapel' => 'required|max:50',
            'nama_nilai' => 'required|max:50',
            'tanggal_mapel' => 'required',
            'deskripsi_mapel' => ''
        ]);

        mapel::where('id_mapel', $id_mapel)->update($validatedData);

        return redirect('/mapel/'.$id_mapel.'/mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mapel)
    {
        $id_kelas = session('id_kelas');

        mapel::destroy($id_mapel);

        return redirect('/ruangkelas/'.$id_kelas);
    }
}
