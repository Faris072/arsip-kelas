<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
<div class="head d-flex">
    <button class="btn btn-default px-3 py-2" data-url='/jadwal' id="close-editjadwal"><i class="fas fa-times"></i></button>
    <h5 class="mt-3 ml-3"><b>Ubah Jadwal</b></h5>
</div>
<br>
<br>
<div class="container">
<form action="" method="post" id="form-edit-jadwal" data-url="/jadwal/{{ $data->id_jadwal }}/update">
    @csrf
    <label for="hari"><b>Hari: <span style="color:red">*</span></b></label>
    <select name="hari_jadwal" class="form-control" id="hari" required>
        <option value="Senin" @if ($data->hari_jadwal == 'Senin') selected="selected" @endif>Senin</option>
        <option value="Selasa" @if ($data->hari_jadwal == 'Selasa') selected="selected" @endif>Selasa</option>
        <option value="Rabu" @if ($data->hari_jadwal == 'Rabu') selected="selected" @endif>Rabu</option>
        <option value="Kamis" @if ($data->hari_jadwal == 'Kamis') selected="selected" @endif>Kamis</option>
        <option value="Jum'at" @if ($data->hari_jadwal == "Jum'at") selected="selected" @endif>Jum'at</option>
        <option value="Sabtu" @if ($data->hari_jadwal == 'Sabtu') selected="selected" @endif>Sabtu</option>
        <option value="Minggu" @if ($data->hari_jadwal == 'Minggu') selected="selected" @endif>Minggu</option>
    </select>
    <small class="text-muted">Pilih Hari</small>
    <br>
    <br>
    <label for="mapeljadwal"><b>Mapel: <span style="color:red">*</span></b></label>
    <input type="text" name="mapel_jadwal" id="mapeljadwal" class="form-control"
        max="50" placeholder="Contoh: Matematika" value="{{ $data->mapel_jadwal }}" required>
    <small class="text-muted">Nama mapel maksimal 50 karakter</small>
    <br>
    <br>
    <label for="kelas"><b>Kelas: <span style="color:red">*</span></b></label>
    <input type="text" name="kelas_jadwal" id="kelas" class="form-control"
        max="20" placeholder="Contoh: Kelas XII MIPA 5" value="{{ $data->kelas_jadwal }}" required>
    <small class="text-muted">Nama kelas maksimal 20 karakter</small>
    <br>
    <br>
    <label for="mulai"><b>Waktu Mulai: <small
                class="text-muted">(Optional)</small></b></label>
    <input type="time" name="mulai_jadwal" id="mulai" class="form-control" value="{{ date('H:i', strtotime($data->mulai_jadwal)) }}">
    <br>
    <label for="selesai"><b>Waktu Selesai: <small
                class="text-muted">(Optional)</small></b></label>
    <input type="time" name="selesai_jadwal" id="selesai" class="form-control" value="{{ date('H:i', strtotime($data->selesai_jadwal)) }}">
    <br>
    <input type="submit" class="btn btn-success form-control" id="btn-tambahjadwal"
        value="Tambah Jadwal">
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<script src="js/editjadwal.js"></script>
