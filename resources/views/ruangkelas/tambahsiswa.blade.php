<div class="container">
    <div class="header d-flex">
        <button class="btn btn-default px-3 py-2 mb-3" id="close-tambahsiswa"><i class="fas fa-times"></i></button>
        <h5 class="pt-3 ml-2"><b>Tambah Siswa</b></h5>
    </div>
    <form action="" method="post">
        <label for="absen"><b>No. Absen: </b><span style="color:red;">*</span></label>
        <input type="number" id="absen" name="absen" class="form-control">
        <br>
        <label for="nama"><b>Nama Lengkap: </b><span style="color:red;">*</span></label>
        <input type="text" id="nama" name="nama" class="form-control">
        <br>
        <label for="gender"><b>Gender: </b><span style="color:red;">*</span></label>
        <input type="text" id="gender" name="gender" class="form-control">
        <br>
        <label for="telp"><b>No. Telp: </b></label>
        <input type="text" id="telp" name="telp" class="form-control">
        <br>
        <label for="email"><b>Email: </b></label>
        <input type="email" id="email" name="email" class="form-control">
        <br>
        <input type="submit" class="form-control btn btn-success" value="Tambah Siswa">
    </form>
</div>
<script src="js/ruangkelas/tambahsiswa.js"></script>
