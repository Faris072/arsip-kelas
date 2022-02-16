<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
<div class="head d-flex">
    <button class="btn btn-default px-3 py-2" data-url='/profil' id="close-editprofil"><i class="fas fa-times"></i></button>
    <h5 class="mt-3 ml-3"><b>Ubah Profil</b></h5>
</div>
<br>
<br>
<div class="container">
    <form action="" id="form-update-profil" data-url="/profil/update">
        @csrf
        <label for="username"><b>Username:</b><span style="color:red;">*</span></label>
        <input type="text" name="username" class="form-control" id="username" value="{{ Auth::user()->username }}" required placeholder="Username">
        <small class="text-muted">Username tidak boleh sama dengan user lain dan maksimal 20 karakter</small>
        <br>
        <br>
        <label for="namalengkap"><b>Nama Lengkap:</b><span style="color:red;">*</span></label>
        <input type="text" name="nama_lengkap" class="form-control" id="namalengkap" value="{{ Auth::user()->nama_lengkap }}" required placeholder="Nama_Lengkap">
        <small class="text-muted">Nama lengkap maksimal 70 karakter</small>
        <br>
        <br>
        <label for="telp"><b>No. Telp:</b><span style="color:red;">*</span></label>
        <input type="text" name="telp" class="form-control" id="telp" value="{{ Auth::user()->telp }}" required placeholder="Nomor Telp">
        <small class="text-muted">Nomor telp maksimal 18 digit</small>
        <br>
        <br>
        <label for="tempatlahir"><b>Tempat Lahir:</b><small class="text-muted">(Optional)</small></label>
        <input type="text" name="tempat_lahir" class="form-control" id="tempatlahir" value="{{ Auth::user()->tempat_lahir }}" placeholder="Tempat Lahir">
        <small class="text-muted">Isikan tempat lahir anda</small>
        <br>
        <br>
        <label for="tanggallahir"><b>Tanggal Lahir:</b><small class="text-muted">(Optional)</small></label>
        <input type="date" name="tanggal_lahir" class="form-control" id="tanggallahir"  @if(Auth::user()->tanggal_lahir) value="{{ date('Y-m-d', strtotime(Auth::user()->tanggal_lahir)) }}" @else value="not set" @endif">
        <small class="text-muted">Masukkan Tanggal lahir anda</small>
        <br>
        <br>
        <label for="jeniskelamin"><b>Jenis Kelamin:</b><small class="text-muted">(Optional)</small></label>
        <select name="jenis_kelamin" class="form-control" id="jeniskelamin">
            <option value="Laki-Laki" @if(Auth::user()->jenis_kelamin == 'Laki-Laki') selected="selected" @endif>Laki-Laki</option>
            <option value="Perempuan" @if(Auth::user()->jenis_kelamin == 'Perempuan') selected="selected" @endif>Perempuan</option>
        </select>
        <small class="text-muted">Pilih Jenis Kelamin</small>
        <br>
        <br>
        <label for="Alamat"><b>Alamat:</b><small class="text-muted">(Optional)</small></label>
        <textarea name="alamat" id="Alamat" class="form-control">{{ Auth::user()->alamat }}</textarea>
        <small class="text-muted">Isikan alamat anda</small>
        <br>
        <br>
        <input type="submit" class="form-control btn btn-primary" value="Ubah Profil">
    </form>
    <br>
    <br>
    <button class="btn btn-warning" id="ubahpassword">Ubah Password</button>
</div>
<br>
<br>
<br>
<br>
<br>
<script src="js/editprofil.js"></script>
<br>
