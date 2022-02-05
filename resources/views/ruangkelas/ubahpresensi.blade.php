<div class="head d-flex">
    <button class="btn btn-default px-3 py-2" data-url='/presensi/{{ $presensi->id_presensi }}/body' id="close-ubahpresensi"><i class="fas fa-times"></i></button>
    <h5 class="mt-3 ml-3"><b>Ubah Presensi</b></h5>
</div>
<br>
<br>
<div class="ubahpresensi">
    <form action="" method="POST" id="form-ubah-presensi" data-url="/presensi/{{ $presensi->id_presensi }}/update">
        @csrf
        <label for="date"><b>Tanggal Presensi:</b> <span style="color:red;">*</span></label>
        <input type="date" name="tanggal_presensi" id="date" class="form-control" value="{{ $presensi->tanggal_presensi }}">
        <br>
        <label for="namapresensi"><b>Nama Presensi: </b> <span style="color:red;">*</span></label>
        <input type="text" id="namapresensi" name="nama_presensi" class="form-control" value="{{ $presensi->nama_presensi }}">
        <br>
        <input type="submit" class="form-control btn btn-primary" value="Ubah Presensi">
    </form>
</div>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="js/ruangkelas/ubahpresensi.js"></script>
