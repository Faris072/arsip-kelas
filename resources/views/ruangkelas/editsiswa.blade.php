<div class="container">
    <div class="header d-flex">
        <button class="btn btn-default px-3 py-2 mb-3" id="close-editsiswa"><i class="fas fa-times"></i></button>
        <h5 class="pt-3 ml-2"><b>Edit Siswa</b></h5>
    </div>
    <form action="/setsiswa/{{ $editsiswa->id_siswa }}/update" method="post" id="form-edit-siswa" data-url="/setsiswa/{{ $editsiswa->id_siswa }}/update">
        @csrf
        {{-- @method('PUT') --}}
        <label for="absen"><b>No. Absen: </b><span style="color:red;">*</span></label>
        <input type="number" id="absen" name="no_absen" value="{{ $editsiswa->no_absen}}" class="form-control">
        <br>
        <label for="nama"><b>Nama Lengkap: </b><span style="color:red;">*</span></label>
        <input type="text" id="nama" name="nama_siswa" value="{{ $editsiswa->nama_siswa}}" class="form-control">
        <br>
        <label for="gender"><b>Gender: </b><span style="color:red;">*</span></label>
        <input type="text" id="gender" name="gender" value="{{ $editsiswa->gender}}" class="form-control">
        <br>
        <label for="telp"><b>No. Telp: </b></label>
        <input type="text" id="telp" name="telp_siswa" value="{{ $editsiswa->telp_siswa}}" class="form-control">
        <br>
        <label for="email"><b>Email: </b></label>
        <input type="email" id="email" name="email_siswa" value="{{ $editsiswa->email_siswa}}" class="form-control">
        <br>
        <input type="submit" class="form-control btn btn-primary" value="Edit Siswa">
    </form>
</div>
<script src="js/ruangkelas/editsiswa.js"></script>
