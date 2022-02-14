<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senin = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Senin');
        $selasa = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Selasa');
        $rabu = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Rabu');
        $kamis = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Kamis');
        $jumat = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', "Jum'at");
        $sabtu = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Sabtu');
        $minggu = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Minggu');
        return view('jadwal', [
            'css' => 'css/jadwal.css',
            'senin' => $senin,
            'selasa' => $selasa,
            'rabu' => $rabu,
            'kamis' => $kamis,
            'jumat' => $jumat,
            'sabut' => $sabtu,
            'minggu' => $minggu
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
        $request['id'] = Auth::user()->id;
        $validatedData = $request->validate([
            'id' => '',
            'hari_jadwal' => 'required',
            'mapel_jadwal' => 'required|max:20',
            'kelas_jadwal' => 'required|max:50',
            'mulai_jadwal' => '',
            'selesai_jadwal' => ''
        ]);

        jadwal::create($validatedData);

        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jadwal)
    {
        jadwal::destroy($id_jadwal);

        return redirect('/jadwal');
    }
}
