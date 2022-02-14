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
        $senin = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Senin')->sortBy('mulai_jadwal');
        $selasa = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Selasa')->sortBy('mulai_jadwal');
        $rabu = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Rabu')->sortBy('mulai_jadwal');
        $kamis = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Kamis')->sortBy('mulai_jadwal');
        $jumat = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', "Jum'at")->sortBy('mulai_jadwal');
        $sabtu = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Sabtu')->sortBy('mulai_jadwal');
        $minggu = jadwal::all()->where('id', Auth::user()->id)->where('hari_jadwal', 'Minggu')->sortBy('mulai_jadwal');
        return view('jadwal', [
            'css' => 'css/jadwal.css',
            'senin' => $senin,
            'selasa' => $selasa,
            'rabu' => $rabu,
            'kamis' => $kamis,
            'jumat' => $jumat,
            'sabtu' => $sabtu,
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
    public function edit($id_jadwal)
    {
        $data= jadwal::find($id_jadwal);
        return view('editjadwal',[
            'css' => 'css/editjadwal.css',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jadwal)
    {
        $validatedData = $request->validate([
            'hari_jadwal' => 'required',
            'mapel_jadwal' => 'required|max:20',
            'kelas_jadwal' => 'required|max:50',
            'mulai_jadwal' => '',
            'selesai_jadwal' => ''
        ]);

        jadwal::where('id_jadwal', $id_jadwal)->update($validatedData);

        return redirect('/jadwal');
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
