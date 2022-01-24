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
            <div class="item m-2" data-toggle="modal" data-target="#set-presensi">
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
            <div class="item m-2" data-toggle="modal" data-target="#set-detail">
                <div class="image">
                    <img src="asets/detailkelas.png" alt="" style="width:100%;">
                </div>
                <div class="ket pt-3">
                    <center>
                        <p><b>Detail Kelas</b></p>
                    </center>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-xl" id="set-siswa" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Modal title</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <div class="gambar">
                                <center>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" style="background-color:black;"
                                            href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" style="background-color:black;"
                                            href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="harga pt-2">
                                <h5><b>Harga:</b></h5>
                                <p>Rp100.000</p>
                            </div>
                            <div class="deskripsi">
                                <h5><b>Deskripsi:</b></h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatum architecto,
                                    odit eaque repellendus unde, odio saepe quidem optio cupiditate numquam blanditiis
                                    non recusandae. Cumque a consequuntur excepturi eaque dolorum!</p>
                            </div>
                            <div class="stok">
                                <h5><b>Stok:</b></h5>
                                <p>100</p>
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
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <div class="tgl-presensi">
                                <div class="headtglpresensi mb-3">
                                    <h6><b>Tanggal Presensi</b></h6>
                                </div>
                                <div class="isitglpresensi">
                                    <button class="btn btn-primary">20-12-2021</button>
                                </div>
                            </div>
                            <hr>
                            <div class="set-presensi">
                                <div class="headsetpresensi mb-1">
                                    <h6><b>Presensi</b></h6>
                                </div>
                                <div class="detailpresensi mb-3">
                                    <table width="100%">
                                        <tr>
                                            <td>Tanggal Presensi</td>
                                            <td>:</td>
                                            <td>10-10-2022</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Presensi</td>
                                            <td>:</td>
                                            <td>UAS</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>:</td>
                                            <td>Blablabla</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="isipresensi">
                                    <table celpadding="0" class="table table-hover table-striped">
                                        <thead class="table-primary p-5">
                                            <tr>
                                                <th>No. Absen</th>
                                                <th>Nama</th>
                                                <th>Gender</th>
                                                <th>Kehadiran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-hover">
                                            @for($i = 0; $i < 30; $i++)
                                            <tr>
                                                <td>{{ $i+1 }}</td>
                                                <td>Noname</td>
                                                <td>L</td>
                                                <td>Hadir</td>
                                                <td><button class="btn btn-success" data-toggle="modal" data-target="#ubah">Ubah</button>
                                                </td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                    <!-- Modal -->
                                    <div class="modal modal-presensi fade" id="ubah" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b>Noname</b></h5>
                                                    <button type="button" class="close" data-dismiss="modal" data-target=".modal-presensi"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Silahkan pilih presensi untuk siswa <span
                                                            style="color:blue;">Noname</span> di bawah ini!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success">Hadir</button>
                                                    <button type="button" class="btn btn-primary">Izin</button>
                                                    <button type="button" class="btn btn-danger">Alpha</button>
                                                </div>
                                            </div>
                                        </div>
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
            <div class="modal fade bd-example-modal-xl" id="set-detailkelas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Modal title</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <div class="gambar">
                                <center>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" style="background-color:black;"
                                            href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" style="background-color:black;"
                                            href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="harga pt-2">
                                <h5><b>Harga:</b></h5>
                                <p>Rp100.000</p>
                            </div>
                            <div class="deskripsi">
                                <h5><b>Deskripsi:</b></h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatum architecto,
                                    odit eaque repellendus unde, odio saepe quidem optio cupiditate numquam blanditiis
                                    non recusandae. Cumque a consequuntur excepturi eaque dolorum!</p>
                            </div>
                            <div class="stok">
                                <h5><b>Stok:</b></h5>
                                <p>100</p>
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
            <div class="modal fade bd-example-modal-xl" id="set-detailkelas" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Modal title</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:70vh; overflow-y:auto;">
                            <div class="gambar">
                                <center>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block" id="gambar0" style="width:70%;"
                                                    src="/storage/default/konten.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" style="background-color:black;"
                                            href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" style="background-color:black;"
                                            href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </center>
                            </div>
                            <div class="harga pt-2">
                                <h5><b>Harga:</b></h5>
                                <p>Rp100.000</p>
                            </div>
                            <div class="deskripsi">
                                <h5><b>Deskripsi:</b></h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatum architecto,
                                    odit eaque repellendus unde, odio saepe quidem optio cupiditate numquam blanditiis
                                    non recusandae. Cumque a consequuntur excepturi eaque dolorum!</p>
                            </div>
                            <div class="stok">
                                <h5><b>Stok:</b></h5>
                                <p>100</p>
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
                        <img class="card-img-top" src="/storage/default/konten.jpg" alt="Card image cap">
                        <div class="card-body" style="padding:1vw;">
                            <h5 class="card-title" style=""><b>UAS 1</b></h5>
                            <p class="card-text"><span>Matematika</span> | <span>X MIPA 5</span></p>
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
