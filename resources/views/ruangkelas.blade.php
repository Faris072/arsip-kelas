<div class="paths p-3 bg-light">
    @foreach ($datas as $data)
    <a href="#" class="path" data-url="/home" onclick="klikhome();">Home</a> / <a href="#"
        class="path" data-url="/angkatan">Angkatan</a> / <a href="#" class="path"
        data-url="/ruangkelas/{{ $data->id_kelas }}">Ruang Kelas</a>
    @endforeach
</div>
<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
<div class="ruangkelas">
    <div class="judul pb-1">
        <center>
            @foreach ($datas as $data)
            <h2><b>{{ $data->nama_kelas }}</b></h2>
            @endforeach
        </center>
    </div>
    <div class="headsetting p-3" data-target="#set" data-toggle="collapse">
        <center>
            <h5><b>Setting Kelas</b></h5>
        </center>
    </div>
    <div class="settingkelas collapse" id="set">
        <div class="items d-flex pl-3">
            <div class="item m-2" data-toggle="modal" data-target="#set-siswa" id="menu-setsiswa">
                <div class="image">
                    <img src="asets/siswa1.png" alt="" style="width:100%;">
                </div>
                <div class="ket pt-3">
                    <center>
                        <p><b>Siswa</b></p>
                    </center>
                </div>
            </div>
            <div class="item m-2" id="menu-setpresensi" data-toggle="modal" data-target="#set-presensi">
                <div class="image">
                    <img src="asets/absen.png" alt="" style="width:100%;">
                </div>
                <div class="ket pt-3">
                    <center>
                        <p><b>Presensi</b></p>
                    </center>
                </div>
            </div>
            <div class="item m-2" data-toggle="modal" data-target="#set-detailkelas">
                <div class="image">
                    <img src="asets/detailkelas.png" alt="" style="width:100%;">
                </div>
                <div class="ket pt-3">
                    <center>
                        <p><b>Detail Kelas</b></p>
                    </center>
                </div>
            </div>
            <div class="item m-2" data-toggle="modal" data-target="#tambah-mapel">
                <div class="image">
                    <img src="asets/tambah.png" alt="" style="width:100%;">
                </div>
                <div class="ket pt-3">
                    <center>
                        <p><b>Tambah Mapel</b></p>
                    </center>
                </div>
            </div>
            <div class="item m-2" data-toggle="modal" data-target="#modal-hapuskelas">
                <div class="image">
                    <img src="asets/hapus.png" alt="" style="width:100%;">
                </div>
                <div class="ket pt-3">
                    <center>
                        <p><b>Hapus Kelas</b></p>
                    </center>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-xl" id="set-siswa" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Siswa</b></h5>
                            <button type="button" class="close" id="close-siswa" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <div class="head mb-2">
                                <h5><b>Kelas XI MIPA 5</b></h5>
                            </div>
                            <hr>
                            <div class="isi" id="modal-setsiswa">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" type="button" id="tambah-siswa" class="btn btn-success">Tambah Siswa</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endModal --}}
            <!-- Modal -->
            <div class="modal fade bd-example-modal-xl" id="set-presensi" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Presensi</b></h5>
                            <button type="button" class="close" id="close-presensi" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="ruangkelaspresensi" style="height:70vh; overflow-y:auto;">
                        </div>
                        <div class="modal-footer">
                            <a href="#" type="button" id="tambah-presensi" class="btn btn-success">Tambah Presensi</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endModal --}}
            <!-- Modal -->
            <div class="modal fade bd-example-modal-xl" id="set-detailkelas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Detail Kelas</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <form action="" data-url="/ruangkelas/{{ $dataes->id_kelas }}/update" method="POST" enctype="multipart/form-data" id="form-setting-kelas">
                                @csrf
                                <center>
                                    <img src="/storage/fotokelas/{{ $dataes->foto_kelas }}"
                                        style="background-image:url('storage/fotokelas/{{ $dataes->foto_kelas }}'); width:240px; height:200px;">
                                    <br>
                                    <label for="gantifoto" id="label-ubahfoto" class="btn btn-primary"><i
                                            class="fas fa-upload pr-2"></i>Pilih Foto (Optional)</label>
                                    <input type="file" name="foto_kelas" id="gantifoto">
                                    <br><br>
                                </center>
                                <label for="angkatan"><b>Angkatan: <span style="color:red">*</span></b></label>
                                <select name="angkatan" class="form-control" id="angkatan">
                                    @for ($i = 1980; $i <= date('Y'); $i++)
                                        @if ($i == $dataes->angkatan)
                                            <option value="{{ $i }}" selected="selected">{{ $i }}
                                            </option>
                                        @else
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endif
                                    @endfor
                                </select>
                                <small class="text-muted">Pastikan mengisi tahun dengan benar</small>
                                <br>
                                <br>
                                <label for="namakelas"><b>Nama Kelas: <span style="color:red">*</span></b></label>
                                <input type="text" name="nama_kelas" id="namakelas" class="form-control" value="{{ $dataes->nama_kelas}}" required>
                                <small class="text-muted">Nama kelas maksimal 20 karakter</small>
                                <br>
                                <br>
                                <label for="deskripsi_kelas"><b>Deskripsi: <small class="text-muted">(Optional)</small> </b></label>
                                <input type="text" name="deskripsi_kelas" id="deskripsi_kelas">
                                <input type="hidden" id="desk_kelas" value="{{ $dataes->deskripsi_kelas }}">
                                <br>
                                <input type="submit" class="btn btn-primary form-control" id="send-settingkelas"
                                    value="Setting Kelas">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endModal --}}
            <!-- Modal -->
            <div class="modal fade bd-example-modal-xl" id="tambah-mapel" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Mapel</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <div class="container">
                                <form action="/mapel" method="POST" id="form-tambah-mapel" data-url="/mapel">
                                    @csrf
                                    <label for="nama-mapel"><b>Nama Mapel:</b><span style="color:red">*</span></label>
                                    <input type="text" name="mapel" id="nama-mapel" class="form-control" placeholder="Contoh: Matematika" required>
                                    <small class="text-muted">Nama mapel maksimal 50 karakter</small>
                                    <br>
                                    <br>
                                    <label for="namanilai-mapel"><b>Nama Nilai Mapel:</b><span style="color:red">*</span></label>
                                    <input type="text" name="nama_nilai" id="tanggal-mapel" class="form-control" placeholder="Contoh: Ujian Akhir Semester" required>
                                    <small class="text-muted">Nama nilai mapel maksimal 50 karakter</small>
                                    <br>
                                    <br>
                                    <label for="tanggal-mapel"><b>Tanggal Mapel:</b><span style="color:red">*</span></label>
                                    <input type="date" name="tanggal_mapel" id="tanggal-mapel" class="form-control"
                                        value="{{ date('Y-m-d') }}" required>
                                    <br>
                                    <label for="deskripsi-mapel"><b>Deskripsi Mapel: </b><small class="text-muted">(Optional)</small></label>
                                    <textarea id="deskripsi-mapel"></textarea>
                                    <br>
                                    <input type="submit" value="Tambah Mapel" class="btn btn-success form-control">
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endModal --}}
            {{-- modal --}}
            <div class="modal" tabindex="-1" role="dialog" id="modal-hapuskelas">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><b>Hapus Kelas</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><b>Apakah anda yakin akan menghapus kelas {{ $dataes->nama_kelas }}?</b> kelas yang anda hapus akan hilang beserta dengan mapel dan nilai yang anda buat di kelas ini.</p>
                        </div>
                        <div class="modal-footer">
                            @foreach($datas as $data)
                            <form action="" id="form-hapus-kelas" data-url="/ruangkelas/{{ $data->id_kelas }}/delete" method="POST" >
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Hapus Kelas"></input>
                            </form>
                            @endforeach
                            <button type="button" class="btn btn-success" data-dismiss="modal">Batalkan</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endmodal --}}
        </div>
    </div>
    <br><br>
    <div class="kelas">
        <div class="row d-flex p-3" style="justify-content:space-between;">
            <?php $i = 10; ?>
            @foreach ($mapel as $m)
                <?php $i--; ?>
                <div class="col-md-4 col-6 p-0 pb-3 card-mapel">
                    {{-- card --}}
                    <div class="card m-0" style="width: 100%; height:100%;">
                        <h5 class="card-header"><b>{{ $m->mapel }}</b></h5>
                        <div class="card-body" style="padding:1vw;">
                            <h5 class="card-title" style=""><b>{{ $m->nama_nilai }}</b></h5>
                            <p class="card-text text-muted">Date: <span>{{ date('d-m-Y', strtotime($m->tanggal_mapel)) }}</span> | <span>{{ $m->kelas->nama_kelas }}</span></p>
                            <div class="btn-card d-flex" style="justify-content:space-between;">
                                <a href="#" class="btn btn-primary p-1 btn-deskripsi-mapel" style="font-size:100%; padding:0.2vw;"
                                    data-toggle="modal" data-target="#detail{{ $m->id_mapel }}">Deskripsi</a>
                                <a href="#" class="btn btn-success p-1 masuk-mapel" data-url="/mapel/{{ $m->id_mapel }}/mapel" style="font-size:100%; padding:0.2vw; right:0;">Masuk Mapel</a>
                            </div>
                        </div>
                    </div>
                    {{-- endCard --}}
                    <!-- Modal -->
                    <div class="modal fade" id="detail{{ $m->id_mapel }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi Mapel</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height:72vh; overflow:auto;">
                                    <p class="desk-mapel">{{ $m->deskripsi_mapel }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- endModal --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
<br><br>
{{-- js --}}
<script src="js/ruangkelas.js"></script>
<script src="js/ruangkelas/tambahpresensi.js"></script>
<script>
    CKEDITOR.replace('deskripsi_kelas');
</script>
<script>
    CKEDITOR.replace('deskripsi-mapel');
    var deskrip = document.getElementById('desk_kelas').value;
    // alert(deskrip);
    CKEDITOR.instances['deskripsi_kelas'].setData(deskrip);
</script>
