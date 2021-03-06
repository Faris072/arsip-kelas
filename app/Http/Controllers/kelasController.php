<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//untuk menghapus gambar saat update dan delete di storage
use Illuminate\Support\Facades\Auth;

class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kelas::all()->where('id', Auth::user()->id)->sortByDesc('created_at');
        $angkatans = kelas::distinct()->where('id', Auth::user()->id)->get('angkatan')->sortByDesc('angkatan');// untuk desc gunakan sortByDesc() untuk asc gunakan sortBy(). menggunakan get karena jika menggunakan all data tidak bisa dibaca
        return view('angkatan', [
            'css' => 'css/angkatan.css',
            'datas' => $data,
            'angkatan' => $angkatans
        ]);
    }

    public function index2($id_kelas){
        $datas = kelas::all()->where('id_kelas', $id_kelas);
        $mapel = mapel::with('kelas')->where('id_kelas', $id_kelas)->get();
        $dataes = kelas::find($id_kelas);//kalau untuk mengambil data dari 1 baris tabel lebih baik menggunakan find()
        session()->put('id_kelas', $id_kelas);
        return view('ruangkelas', [
            'css' => 'css/ruangkelas.css',
            'datas' => $datas,
            'dataes' => $dataes,
            'mapel' => $mapel
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
        $request['id'] = Auth::user()->id;

        $validatedData = $request->validate([
            'foto_kelas' => 'image|file|max:1024',
            'angkatan' => 'required',
            'nama_kelas' => 'required|max:20',
            'deskripsi_kelas' => '',
            // 'id_kelas' => 'required',
            'id' => 'required'
        ]);

        if(isset($request['foto_kelas'])){
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
    public function edit($id_kelas)
    {
        // $data = kelas::all();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id_kelas)
    {
        $fotodefault = kelas::find($id_kelas);

        $validatedData = $request->validate([
            'foto_kelas' => 'image|file|max:1024',
            'angkatan' => 'required',
            'nama_kelas' => 'required|max:20',
            'deskripsi_kelas' => ''
        ]);

        if(empty($request['foto_kelas'])){
            $validatedData['foto_kelas'] = $fotodefault->foto_kelas;
        }
        else{
            if($request->old_image){
                Storage::delete('/fotokelas/'.$request->old_image);
            }
            $namafoto = $request->file('foto_kelas')->getClientOriginalName();
            $ekstensi = $request->file('foto_kelas')->getClientOriginalExtension();
            $fotokelas = mt_rand(1000000000,9999999999) .'.'. $ekstensi;
            $request->file('foto_kelas')->storeAs('/fotokelas', $fotokelas);
            $validatedData['foto_kelas'] = $fotokelas;
        }

        kelas::where('id_kelas', $id_kelas)->update($validatedData);

        return redirect('/ruangkelas/'.$id_kelas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelas)
    {
        $image = kelas::find($id_kelas);

        Storage::delete('fotokelas/'.$image->foto_kelas);

        kelas::destroy($id_kelas);

        return redirect('/angkatan');
    }
}
