<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/register',[
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
        $validatedData = $request->validate([
            'id_kelas' => '',
            'username' => 'required|max:20|unique:user',
            'nama_lengkap' => 'required|max:70',
            'telp' => 'required|max:18|unique:user',
            'email' => 'required|email:dns|unique:user',
            'password' => 'required_with:confirm_password|same:confirm_password|min:8'
        ]);

        $validatedData['admin'] = 0;

        $validatedData['password'] = bcrypt($validatedData['password']);

        user::create($validatedData);

        return redirect('/');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // return redirect()->intended('/welcome');
        if($request->remember_me){
            $remember = true;
        }
        else{
            $remember = false;
        }

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            if(Auth::user()->admin == 0){
                return redirect()->intended('/welcome');
            }
            else{
                return redirect()->intended('/admin');
            }
        }
        return back()->with('loginError','Login gagal! pastikan email dan password sesuai');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session_start();
        session_destroy();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('editprofil',[
            'css' => 'css/editprofil.css'
        ]);
    }

    public function editpassword(){
        return view('editpassword',[
            'css' => 'css/editprofil.css',
        ]);
    }

    public function formupdatepassword(Request $request){

        if(hash::check($request->password, Auth::user()->password)){
            session()->flash('ubah_password',true);
            return view('updatepassword',[
                'css' => 'css/editprofil.css',
            ]);
        }
        else{
            return redirect('/profil/edit/password')->with('masuk_editpassword','Password salah');
        }
    }

    public function updatepassword(Request $request){
        $validatedData = $request->validate([
            'password' => 'required_with:password2|same:password2|min:8'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        user::where('id', Auth::user()->id)->update($validatedData);

        return redirect('/profil');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:20|unique:user,username,'.Auth::user()->id,//validasi untuk unique update
            'nama_lengkap' => 'required|max:70',
            'telp' => 'required|max:18|unique:user,telp,'.Auth::user()->id,
            'tempat_lahir' => '',
            'tanggal_lahir' => '',
            'jenis_kelamin' => '',
            'alamat' => ''
        ]);

        user::where('id', Auth::user()->id)->update($validatedData);

        return redirect('/profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {

    }
}
