<div class="head d-flex">
    <button class="btn btn-default px-3 py-2" id="close-tambahpresensi"><i class="fas fa-times"></i></button>
    <h5 class="mt-3 ml-3"><b>Tambah Presensi</b></h5>
</div>
<br>
<br>
<div class="ubahpresensi">
    <form action="" method="POST">
        <label for="date"><b>Tanggal Presensi:</b> <span style="color:red;">*</span></label>
        <input type="date" nema="date" id="date" class="form-control">
        <br>
        <label for="namapresensi"><b>Nama Presensi: </b> <span style="color:red;">*</span></label>
        <input type="text" id="namapresensi" name="nama" class="form-control">
        <br>
        <label for="desc"><b>Deskripsi: </b></label>
        <textarea name="desc" id="desc"></textarea>
        <br>
        <input type="submit" class="form-control btn btn-success" value="Tambah Presensi">
    </form>
</div>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>CKEDITOR.replace( 'desc' );</script>
<script src="js/ruangkelas/tambahpresensi.js"></script>
