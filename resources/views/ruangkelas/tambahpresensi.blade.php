<div class="head d-flex">
    <button class="btn btn-default px-3 py-2" id="close-tambahpresensi" data-url="/presensi"><i class="fas fa-times"></i></button>
    <h5 class="mt-3 ml-3"><b>Tambah Presensi</b></h5>
</div>
<br>
<br>
<div class="tambahpresensi">
    <form action="/presensi" method="POST" data-url="/presensi" id="form-tambah-presensi">
        @csrf
        <label for="date"><b>Tanggal Presensi:</b> <span style="color:red;">*</span></label>
        <input type="date" name="tanggal_presensi" id="date" class="form-control" value="<?php echo date('Y-m-d') ?>" required>
        <br>
        <label for="namapresensi"><b>Nama Presensi: </b> <span style="color:red;">*</span></label>
        <input type="text" id="namapresensi" name="nama_presensi" class="form-control" required>
        <small class="text-muted">Nama presensi maksimal 20 karakter</small>
        <br>
        <br>
        <input type="submit" class="form-control btn btn-success" value="Tambah Presensi">
    </form>
</div>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>CKEDITOR.replace( 'deskripsi_presensi' );</script>
<script src="js/ruangkelas/tambahpresensi.js"></script>
