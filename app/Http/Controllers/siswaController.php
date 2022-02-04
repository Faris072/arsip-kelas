<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_kelas = session('id_kelas');
        $data_siswa = siswa::all()->where('id_kelas', $id_kelas);
        return view('ruangkelas/setsiswa',[
            'css' => '',
            'data_siswa' => $data_siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangkelas/tambahsiswa',[
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
        $request['id_kelas'] = session('id_kelas');
        $validatedData = $request->validate([
            'id_kelas' => 'required',
            'no_absen' => 'required',
            'nama_siswa' => 'required|max:50',
            'gender' => 'required',
            'telp_siswa' => 'max:20',
            'email_siswa' => 'max:244'
        ]);

        siswa::create($validatedData);

        return redirect('/setsiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id_siswa)
    {
        return view('ruangkelas/editsiswa', [
            'css' => '',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        //
    }
}
