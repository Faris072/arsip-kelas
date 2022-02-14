<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome()">Home</a> / <a href="#" class="path"
        data-url="/jadwal">Jadwal Saya</a>
</div>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>

<br><br>
<button class="btn btn-success" data-toggle="modal" data-target="#tambahjadwal"><i class="fas fa-calendar-plus"></i>
    Tambah Jadwal</button>
{{-- modal --}}
<div class="modal fade bd-example-modal-xl" id="tambahjadwal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Jadwal</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height:70vh; overflow-y:auto;">
                <form action="" method="post" id="form-tambah-jadwal">
                    @csrf
                    <label for="hari"><b>Hari: <span style="color:red">*</span></b></label>
                    <select name="hari_jadwal" class="form-control" id="hari" required>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jum'at">Jum'at</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                    <small class="text-muted">Pilih Hari</small>
                    <br>
                    <br>
                    <label for="mapeljadwal"><b>Mapel: <span style="color:red">*</span></b></label>
                    <input type="text" name="mapel_jadwal" id="mapeljadwal" class="form-control" max="50"
                        placeholder="Contoh: Matematika" required>
                    <small class="text-muted">Nama mapel maksimal 50 karakter</small>
                    <br>
                    <br>
                    <label for="kelas"><b>Kelas: <span style="color:red">*</span></b></label>
                    <input type="text" name="kelas_jadwal" id="kelas" class="form-control" max="20"
                        placeholder="Contoh: Kelas XII MIPA 5"required>
                    <small class="text-muted">Nama kelas maksimal 20 karakter</small>
                    <br>
                    <br>
                    <label for="mulai"><b>Waktu Mulai: <small class="text-muted">(Optional)</small></b></label>
                    <input type="time" name="mulai_jadwal" id="mulai" class="form-control">
                    <br>
                    <label for="selesai"><b>Waktu Selesai: <small class="text-muted">(Optional)</small></b></label>
                    <input type="time" name="selesai_jadwal" id="selesai" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-success form-control" id="btn-tambahjadwal"
                        value="Tambah Jadwal">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- endmodal --}}
<hr>
<div class="jadwal row">
    <div class="col-md-4 mb-4">
        <div class="card" style="height: 100%;">
            <div class="card-header py-2 pt-3 bg-success" style="color:white;">
                <center>
                    <h4><b>Senin</b></h4>
                </center>
            </div>
            <table>
                @foreach ($senin as $sen)
                    <tr>
                        <td>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $sen->mapel_jadwal }}</h5>
                                <p class="card-text my-1 text-muted"><i class="fas fa-chalkboard-teacher pr-2"></i>
                                    {{ $sen->kelas_jadwal }}</p>
                                <p class="card-text my-1 text-muted"><i class="fas fa-clock pr-2"></i>
                                    {{ date('H:i', strtotime($sen->mulai_jadwal)) }} -
                                    {{ date('H:i', strtotime($sen->selesai_jadwal)) }}</p>
                            </div>
                        </td>
                        <td valign="top" title="Edit" data-toggle="modal" class="editjadwal" data-url="/jadwal/{{ $sen->id_jadwal }}/edit" data-target="#editjadwal{{ $sen->id_jadwal }}"><i class="fas fa-pencil-alt px-1 pr-2 pt-4"
                                style="color:rgb(250, 225, 0);"></i></td>
                        <td valign="top" title="Hapus">
                            <form action="" method="post" class="form-hapus-jadwal"
                                data-url="/jadwal/{{ $sen->id_jadwal }}/delete">
                                @csrf
                                <button style="background-color: transparent; border:none;"><i
                                        class="fas fa-trash-alt px-1 pr-2 pt-4" style="color:red;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card" style="height: 100%;">
            <div class="card-header py-2 pt-3 bg-primary" style="color:white;">
                <center>
                    <h4><b>Selasa</b></h4>
                </center>
            </div>
            <table>
                @foreach ($selasa as $sen)
                    <tr>
                        <td>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $sen->mapel_jadwal }}</h5>
                                <p class="card-text my-1 text-muted"><i class="fas fa-chalkboard-teacher pr-2"></i>
                                    {{ $sen->kelas_jadwal }}</p>
                                <p class="card-text my-1 text-muted"><i class="fas fa-clock pr-2"></i>
                                    {{ date('H:i', strtotime($sen->mulai_jadwal)) }} -
                                    {{ date('H:i', strtotime($sen->selesai_jadwal)) }}</p>
                            </div>
                        </td>
                        <td valign="top" title="Edit" data-toggle="modal" class="editjadwal" data-url="/jadwal/{{ $sen->id_jadwal }}/edit" data-target="#editjadwal{{ $sen->id_jadwal }}"><i class="fas fa-pencil-alt px-1 pr-2 pt-4"
                                style="color:rgb(250, 225, 0);"></i></td>
                        <td valign="top" title="Hapus">
                            <form action="" method="post" class="form-hapus-jadwal"
                                data-url="/jadwal/{{ $sen->id_jadwal }}/delete">
                                @csrf
                                <button style="background-color: transparent; border:none;"><i
                                        class="fas fa-trash-alt px-1 pr-2 pt-4" style="color:red;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card" style="height: 100%;">
            <div class="card-header py-2 pt-3 bg-info" style="color:white;">
                <center>
                    <h4><b>Rabu</b></h4>
                </center>
            </div>
            <table>
                @foreach ($rabu as $sen)
                    <tr>
                        <td>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $sen->mapel_jadwal }}</h5>
                                <p class="card-text my-1 text-muted"><i class="fas fa-chalkboard-teacher pr-2"></i>
                                    {{ $sen->kelas_jadwal }}</p>
                                <p class="card-text my-1 text-muted"><i class="fas fa-clock pr-2"></i>
                                    {{ date('H:i', strtotime($sen->mulai_jadwal)) }} -
                                    {{ date('H:i', strtotime($sen->selesai_jadwal)) }}</p>
                            </div>
                        </td>
                        <td valign="top" title="Edit" data-toggle="modal" class="editjadwal" data-url="/jadwal/{{ $sen->id_jadwal }}/edit" data-target="#editjadwal{{ $sen->id_jadwal }}"><i class="fas fa-pencil-alt px-1 pr-2 pt-4"
                                style="color:rgb(250, 225, 0);"></i></td>
                        <td valign="top" title="Hapus">
                            <form action="" method="post" class="form-hapus-jadwal"
                                data-url="/jadwal/{{ $sen->id_jadwal }}/delete">
                                @csrf
                                <button style="background-color: transparent; border:none;"><i
                                        class="fas fa-trash-alt px-1 pr-2 pt-4" style="color:red;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card" style="height: 100%;">
            <div class="card-header py-2 pt-3 bg-warning" style="color:white;">
                <center>
                    <h4><b>Kamis</b></h4>
                </center>
            </div>
            <table>
                @foreach ($kamis as $sen)
                    <tr>
                        <td>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $sen->mapel_jadwal }}</h5>
                                <p class="card-text my-1 text-muted"><i class="fas fa-chalkboard-teacher pr-2"></i>
                                    {{ $sen->kelas_jadwal }}</p>
                                <p class="card-text my-1 text-muted"><i class="fas fa-clock pr-2"></i>
                                    {{ date('H:i', strtotime($sen->mulai_jadwal)) }} -
                                    {{ date('H:i', strtotime($sen->selesai_jadwal)) }}</p>
                            </div>
                        </td>
                        <td valign="top" title="Edit" data-toggle="modal" class="editjadwal" data-url="/jadwal/{{ $sen->id_jadwal }}/edit" data-target="#editjadwal{{ $sen->id_jadwal }}"><i class="fas fa-pencil-alt px-1 pr-2 pt-4"
                                style="color:rgb(250, 225, 0);"></i></td>
                        <td valign="top" title="Hapus">
                            <form action="" method="post" class="form-hapus-jadwal"
                                data-url="/jadwal/{{ $sen->id_jadwal }}/delete">
                                @csrf
                                <button style="background-color: transparent; border:none;"><i
                                        class="fas fa-trash-alt px-1 pr-2 pt-4" style="color:red;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card" style="height: 100%;">
            <div class="card-header py-2 pt-3" style="color:rgb(255, 255, 255); background-color:rgb(212, 0, 195);">
                <center>
                    <h4><b>Jum'at</b></h4>
                </center>
            </div>
            <table>
                @foreach ($jumat as $sen)
                    <tr>
                        <td>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $sen->mapel_jadwal }}</h5>
                                <p class="card-text my-1 text-muted"><i class="fas fa-chalkboard-teacher pr-2"></i>
                                    {{ $sen->kelas_jadwal }}</p>
                                <p class="card-text my-1 text-muted"><i class="fas fa-clock pr-2"></i>
                                    {{ date('H:i', strtotime($sen->mulai_jadwal)) }} -
                                    {{ date('H:i', strtotime($sen->selesai_jadwal)) }}</p>
                            </div>
                        </td>
                        <td valign="top" title="Edit" data-toggle="modal" class="editjadwal" data-url="/jadwal/{{ $sen->id_jadwal }}/edit" data-target="#editjadwal{{ $sen->id_jadwal }}"><i class="fas fa-pencil-alt px-1 pr-2 pt-4"
                                style="color:rgb(250, 225, 0);"></i></td>
                        <td valign="top" title="Hapus">
                            <form action="" method="post" class="form-hapus-jadwal"
                                data-url="/jadwal/{{ $sen->id_jadwal }}/delete">
                                @csrf
                                <button style="background-color: transparent; border:none;"><i
                                        class="fas fa-trash-alt px-1 pr-2 pt-4" style="color:red;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card" style="height: 100%;">
            <div class="card-header py-2 pt-3 bg-dark" style="color:white;">
                <center>
                    <h4><b>Sabtu</b></h4>
                </center>
            </div>
            <table>
                @foreach ($sabtu as $sen)
                    <tr>
                        <td>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $sen->mapel_jadwal }}</h5>
                                <p class="card-text my-1 text-muted"><i class="fas fa-chalkboard-teacher pr-2"></i>
                                    {{ $sen->kelas_jadwal }}</p>
                                <p class="card-text my-1 text-muted"><i class="fas fa-clock pr-2"></i>
                                    {{ date('H:i', strtotime($sen->mulai_jadwal)) }} -
                                    {{ date('H:i', strtotime($sen->selesai_jadwal)) }}</p>
                            </div>
                        </td>
                        <td valign="top" title="Edit" data-toggle="modal" class="editjadwal" data-url="/jadwal/{{ $sen->id_jadwal }}/edit" data-target="#editjadwal{{ $sen->id_jadwal }}"><i class="fas fa-pencil-alt px-1 pr-2 pt-4"
                                style="color:rgb(250, 225, 0);"></i></td>
                        <td valign="top" title="Hapus">
                            <form action="" method="post" class="form-hapus-jadwal"
                                data-url="/jadwal/{{ $sen->id_jadwal }}/delete">
                                @csrf
                                <button style="background-color: transparent; border:none;"><i
                                        class="fas fa-trash-alt px-1 pr-2 pt-4" style="color:red;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card" style="height: 100%;">
            <div class="card-header py-2 pt-3 bg-danger" style="color:white;">
                <center>
                    <h4><b>Minggu</b></h4>
                </center>
            </div>
            <table>
                @foreach ($minggu as $sen)
                    <tr>
                        <td>
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $sen->mapel_jadwal }}</h5>
                                <p class="card-text my-1 text-muted"><i class="fas fa-chalkboard-teacher pr-2"></i>
                                    {{ $sen->kelas_jadwal }}</p>
                                <p class="card-text my-1 text-muted"><i class="fas fa-clock pr-2"></i>
                                    {{ date('H:i', strtotime($sen->mulai_jadwal)) }} -
                                    {{ date('H:i', strtotime($sen->selesai_jadwal)) }}</p>
                            </div>
                        </td>
                        <td valign="top" title="Edit" data-toggle="modal" class="editjadwal" data-url="/jadwal/{{ $sen->id_jadwal }}/edit" data-target="#editjadwal{{ $sen->id_jadwal }}"><i class="fas fa-pencil-alt px-1 pr-2 pt-4"
                                style="color:rgb(250, 225, 0);"></i></td>
                        <td valign="top" title="Hapus">
                            <form action="" method="post" class="form-hapus-jadwal"
                                data-url="/jadwal/{{ $sen->id_jadwal }}/delete">
                                @csrf
                                <button style="background-color: transparent; border:none;"><i
                                        class="fas fa-trash-alt px-1 pr-2 pt-4" style="color:red;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<br><br><br>

<script id="js" src="js/jadwal.js"></script>
