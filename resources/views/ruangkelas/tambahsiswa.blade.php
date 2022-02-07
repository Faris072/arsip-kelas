<div class="container">
    <div class="header d-flex">
        <button class="btn btn-default px-3 py-2 mb-3" id="close-tambahsiswa"><i class="fas fa-times"></i></button>
        <h5 class="pt-3 ml-2"><b>Tambah Siswa</b></h5>
    </div>
    <form action="/setsiswa" method="post" id="form-tambah-siswa">
        @csrf
        <label for="absen"><b>No. Absen: </b><span style="color:red;">*</span></label>
        {{-- @dd($absen->no_absen) --}}
        @if(empty($absen->no_absen))
            <input type="number" id="absen" name="no_absen" value="1" class="form-control">
        @else
            <input type="number" id="absen" name="no_absen" value="{{ $absen->no_absen+1 }}" class="form-control">
        @endif
        <small class="text-muted">Masukkan Nomor Absen Siswa</small>
        <br>
        <br>
        <label for="nama"><b>Nama Lengkap: </b><span style="color:red;">*</span></label>
        <input type="text" id="nama" name="nama_siswa" class="form-control" placeholder="Contoh: Faris Arsip Kelas">
        <small class="text-muted">Nama siswa maksimal 50 karakter</small>
        <br>
        <br>
        <label for="gender"><b>Gender: </b><span style="color:red;">*</span></label>
        <select name="gender" id="gender" class="form-control">
            <option value="Laki-Laki" selected>Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <small class="text-muted">Pilih salah satu. default bernilai laki-laki.</small>
        <br>
        <br>
        <label for="telp"><b>No. Telp: </b><small class="text-muted">(Optional)</small></label>
        <input type="text" id="telp" name="telp_siswa" class="form-control" placeholder="Contoh: 085555555555">
        <small class="text-muted">Masukkan nomor telp siswa. maksimal 20 digit.</small>
        <br>
        <br>
        <label for="email"><b>Email: </b><small class="text-muted">(Optional)</small></label>
        <input type="email" id="email" name="email_siswa" class="form-control" placeholder="Contoh: arsipkelas@email.com">
        <small class="text-muted">Pastikan memasukkan email siswa dengan benar</small>
        <br>
        <br>
        <input type="submit" class="form-control btn btn-success" value="Tambah Siswa">
    </form>
</div>
<script src="js/ruangkelas/tambahsiswa.js"></script>
