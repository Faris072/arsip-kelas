<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use App\Models\siswa;
use App\Models\mapel;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_kelas = session('id_kelas');
        $siswa = siswa::all()->where('id_kelas', $id_kelas);
        $id_mapel = session('id_mapel');
        $mapel = mapel::find($id_mapel);
        return view('/nilai', [
            'css' => '',
            'siswa' => $siswa,
            'm' => $mapel
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
    public function store(Request $request, $id_siswa)
    {
        $id_mapel = session('id_mapel');
        $request['id_siswa'] = $id_siswa;
        $request['id_mapel'] = $id_mapel;
        $validatedData = $request->validate([
            'id_mapel' => '',
            'id_siswa' => '',
            'nilai' => 'required|max:20'
        ]);

        nilai::create($validatedData);

        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(nilai $nilai)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_nilai)
    {
        $validatedData = $request->validate([
            'nilai' => 'required|max:20'
        ]);

        nilai::where('id_nilai', $id_nilai)->update($validatedData);

        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(nilai $nilai)
    {
        //
    }
}
