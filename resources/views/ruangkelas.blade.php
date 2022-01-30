<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome();">Home</a> / <a href="#"
        class="path" data-url="/angkatan">Angkatan</a> / <a href="#" class="path"
        data-url="/ruangkelas">Ruang Kelas</a>
</div>
<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
<div class="ruangkelas">
    <div class="judul pb-1">
        <center>
            <h2><b>X MIPA 5</b></h2>
        </center>
    </div>
    <div class="headsetting p-3" data-target="#set" data-toggle="collapse">
        <center>
            <h5><b>Setting Kelas</b></h5>
        </center>
    </div>
    <div class="settingkelas collapse" id="set">
        <div class="items d-flex pl-3">
            <div class="item m-2" data-toggle="modal" data-target="#set-siswa">
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
                    <img src="asets/detailkelas.png" alt="" style="width:100%;">
                </div>
                <div class="ket pt-3">
                    <center>
                        <p><b>Tambah Mapel</b></p>
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <div class="head mb-2">
                                <h5><b>Kelas XI MIPA 5</b></h5>
                            </div>
                            <hr>
                            <div class="isi">
                                <table class="table">
                                    <tr class="table-primary">
                                        <th><b>No. Absen</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Gender</b></th>
                                        <th><b>No. Telp</b></th>
                                        <th><b>Email</b></th>
                                        <th colspan="2"><b>Aksi</b></th>
                                    </tr>
                                    @for ($i= 0; $i<20; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>Faris</td>
                                        <td>Laki-Laki</td>
                                        <td>085706389042</td>
                                        <td>farisbos.mfs@gmail.com</td>
                                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    @endfor
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" type="button" class="btn btn-success">Tambah Siswa</a>
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <div class="container">
                                <div class="container">
                                    <div class="container">
                                        <form action="" method="post" id="form-setting-kelas">
                                        <center>
                                            <img src="/storage/default/konten.jpg" style="background-image:url('storage/default/konten.jpg'); width:240px; height:200px;">
                                            <br>
                                            <label for="gantifoto" id="label-ubahfoto" class="btn btn-primary"><i class="fas fa-upload pr-2"></i> Pilih Foto</label>
                                            <input type="file" name="fotokelas" id="gantifoto">
                                            <br><br>
                                        </center>
                                            <label for="angkatan"><b>Angkatan: </b></label>
                                            <select name="angkatan" class="form-control" id="angkatan">
                                                @for($i = 1980; $i <= date('Y'); $i++)
                                                @if($i == date('Y'))
                                                <option value="{{ $i }}" selected="selected">{{ $i }}</option>
                                                @else
                                                <option value="{{ $i }}">{{ $i }}</option>
                                                @endif
                                                @endfor
                                            </select>
                                            <br>
                                            <label for="namakelas"><b>Nama Kelas: </b></label>
                                            <input type="text" name="namakelas" id="namakelas" class="form-control">
                                            <br>
                                            <label for="deskripsi"><b>Deskripsi:</b></label>
                                            <textarea name="deskripsi" id="deskripsi"></textarea>
                                            <br>
                                            <input type="submit" class="btn btn-primary form-control" id="send-settingkelas" value="Setting Kelas">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" type="button" class="btn btn-info">Pesan Sekarang</a>
                            <a href="#" type="button" class="btn btn-success">Chat</a>
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
                                <form action="">
                                    <label for="nama-mapel"><b>Nama Mapel:</b></label>
                                    <input type="text" name="nama_mapel" id="nama-mapel" class="form-control">
                                    <br>
                                    <label for="namanilai-mapel"><b>Nama Nilai Mapel:</b></label>
                                    <input type="text" name="tanggal_mapel" id="tanggal-mapel" class="form-control">
                                    <br>
                                    <label for="tanggal-mapel"><b>Tanggal Mapel:</b></label>
                                    <input type="date" name="tanggal_mapel" id="tanggal-mapel" class="form-control">
                                    <br>
                                    <label for="deskripsi-mapel"><b>Deskripsi Mapel: </b></label>
                                    <textarea name="deskripsi_mapel" id="deskripsi-mapel"></textarea>
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
        </div>
    </div>
    <br><br>
    <div class="kelas">
        <div class="row d-flex p-3" style="justify-content:space-between;">
            <?php $i = 10; ?>
            @while ($i != 0)
                <?php $i--; ?>
                <div class="col-md-4 col-6 p-0 pb-3">
                    {{-- card --}}
                    <div class="card m-0" style="width: 100%; height:100%;">
                        <h5 class="card-header"><b>Matematika</b></h5>
                        <div class="card-body" style="padding:1vw;">
                            <h5 class="card-title" style=""><b>UAS 1</b></h5>
                            <p class="card-text text-muted">Date: <span>10/12/2022</span> | <span>X MIPA 5</span></p>
                            <div class="btn-card d-flex" style="justify-content:space-between;">
                                <a href="#" class="btn btn-primary p-1" style="font-size:100%; padding:0.2vw;"
                                    data-toggle="modal" data-target="#detail">Deskripsi</a>
                                <a href="#" class="btn btn-success p-1"
                                    style="font-size:100%; padding:0.2vw; right:0;">Masuk Mapel</a>
                            </div>
                        </div>
                    </div>
                    {{-- endCard --}}
                    <!-- Modal -->
                    <div class="modal fade" id="detail" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height:72vh; overflow:auto;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
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
            @endwhile
        </div>
    </div>
</div>
<br><br>
{{-- js --}}
<script src="js/ruangkelas.js"></script>
<script src="js/ruangkelas/tambahpresensi.js"></script>
<script>CKEDITOR.replace( 'deskripsi' );</script>
<script>CKEDITOR.replace( 'deskripsi-mapel' );</script>
