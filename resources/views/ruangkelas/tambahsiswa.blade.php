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

        <br>
        <label for="nama"><b>Nama Lengkap: </b><span style="color:red;">*</span></label>
        <input type="text" id="nama" name="nama_siswa" class="form-control">
        <br>
        <label for="gender"><b>Gender: </b><span style="color:red;">*</span></label>
        <select name="gender" id="gender" class="form-control">
            <option value="Laki-Laki" selected>Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <label for="telp"><b>No. Telp: </b></label>
        <input type="text" id="telp" name="telp_siswa" class="form-control">
        <br>
        <label for="email"><b>Email: </b></label>
        <input type="email" id="email" name="email_siswa" class="form-control">
        <br>
        <input type="submit" class="form-control btn btn-success" value="Tambah Siswa">
    </form>
</div>
<script src="js/ruangkelas/tambahsiswa.js"></script>
