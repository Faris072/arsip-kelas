<?php

namespace App\Http\Controllers;

use App\Models\kehadiran;
use App\Models\presensi;
use App\Models\siswa;
use Illuminate\Http\Request;

class kehadiranController extends Controller
{

    public function thadir(Request $request, $id_siswa){
        $id_presensi = session('id_presensi');
        kehadiran::create([
            'id_presensi' => $id_presensi,
            'id_siswa' => $id_siswa,
            'kehadiran' => $request->kehadiran
        ]);

        return redirect('/presensi/'.$id_presensi.'/body');
    }

    public function tizin(Request $request, $id_siswa){
        $id_presensi = session('id_presensi');
        kehadiran::create([
            'id_presensi' => $id_presensi,
            'id_siswa' => $id_siswa,
            'kehadiran' => $request->kehadiran
        ]);

        return redirect('/presensi/'.$id_presensi.'/body');
    }

    public function talpha(Request $request, $id_siswa){
        $id_presensi = session('id_presensi');
        kehadiran::create([
            'id_presensi' => $id_presensi,
            'id_siswa' => $id_siswa,
            'kehadiran' => $request->kehadiran
        ]);

        return redirect('/presensi/'.$id_presensi.'/body');
    }

    public function uhadir(Request $request, $id_siswa, $id_kehadiran){
        $id_presensi = session('id_presensi');
        kehadiran::where('id_kehadiran', $id_kehadiran)->update([
            'id_presensi' => $id_presensi,
            'id_siswa' => $id_siswa,
            'kehadiran' => $request->kehadiran
        ]);

        return redirect('/presensi/'.$id_presensi.'/body');
    }

    public function uizin(Request $request, $id_siswa, $id_kehadiran){
        $id_presensi = session('id_presensi');
        kehadiran::where('id_kehadiran', $id_kehadiran)->update([
            'id_presensi' => $id_presensi,
            'id_siswa' => $id_siswa,
            'kehadiran' => $request->kehadiran
        ]);

        return redirect('/presensi/'.$id_presensi.'/body');
    }

    public function ualpha(Request $request, $id_siswa, $id_kehadiran){
        $id_presensi = session('id_presensi');
        kehadiran::where('id_kehadiran', $id_kehadiran)->update([
            'id_presensi' => $id_presensi,
            'id_siswa' => $id_siswa,
            'kehadiran' => $request->kehadiran
        ]);

        return redirect('/presensi/'.$id_presensi.'/body');
    }



















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function show(kehadiran $kehadiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function edit(kehadiran $kehadiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kehadiran $kehadiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kehadiran  $kehadiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(kehadiran $kehadiran)
    {
        //
    }
}
