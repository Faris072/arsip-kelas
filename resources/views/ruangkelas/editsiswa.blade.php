<div class="container">
    <div class="header d-flex">
        <button class="btn btn-default px-3 py-2 mb-3" id="close-editsiswa"><i class="fas fa-times"></i></button>
        <h5 class="pt-3 ml-2"><b>Edit Siswa</b></h5>
    </div>
    <form action="/setsiswa/{{ $editsiswa->id_siswa }}/update" method="post" id="form-edit-siswa" data-url="/setsiswa/{{ $editsiswa->id_siswa }}/update">
        @csrf
        {{-- @method('PUT') --}}
        <label for="absen"><b>No. Absen: </b><span style="color:red;">*</span></label>
        <input type="number" id="absen" name="no_absen" value="{{ $editsiswa->no_absen}}" class="form-control" required>
        <small class="text-muted">Masukkan nomor absen siswa</small>
        <br>
        <br>
        <label for="nama"><b>Nama Lengkap: </b><span style="color:red;">*</span></label>
        <input type="text" id="nama" name="nama_siswa" value="{{ $editsiswa->nama_siswa}}" class="form-control" required>
        <small class="text-muted">Nama siswa maksimal 50 karakter</small>
        <br>
        <br>
        <label for="gender"><b>Gender: </b><span style="color:red;">*</span></label>
        <select name="gender" id="gender" class="form-control">
            @if($editsiswa->gender == 'Laki-Laki')
            <option value="Laki-Laki" selected>Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            @else
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan" selected>Perempuan</option>
            @endif
        </select>
        <small class="text-muted">Pilih salah satu. Default adalah laki-laki.</small>
        <br>
        <br>
        <label for="telp"><b>No. Telp: </b><small class="text-muted">(Optional)</small></label>
        <input type="text" id="telp" name="telp_siswa" value="{{ $editsiswa->telp_siswa}}" class="form-control">
        <small class="text-muted">Telp siswa maksimal 20 digit.</small>
        <br>
        <br>
        <label for="email"><b>Email: </b><small class="text-muted">(Optional)</small></label>
        <input type="email" id="email" name="email_siswa" value="{{ $editsiswa->email_siswa}}" class="form-control">
        <small class="text-muted">Pastikan isi email siswa dengan benar</small>
        <br>
        <br>
        <input type="submit" class="form-control btn btn-primary" value="Edit Siswa">
    </form>
</div>
<script src="js/ruangkelas/editsiswa.js"></script>
