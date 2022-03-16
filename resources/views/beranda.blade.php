<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/beranda">Beranda</a>
</div>
<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>



{{-- nilai --}}
<div class="nilai wrap-kategori" style="background-color:rgba(14, 118, 255, 0.13); border-radius:10px;">
    <div class="kategori pb-2 pr-3">
        <table width="100%">
            <tr>
                <td valign="bottom" style="margin-bottom:0;">
                    <h4>Nilai baru saja diubah</h4>
                </td>
            </tr>
        </table>
    </div>
    <div class="row d-flex p-3">
        <?php $loopnilai = "" ?>
        <?php $i = 0 ?>
        @foreach ($nilai as $n)
        @if ($n->id_mapel == $loopnilai || $i == 6)

        @else
        <div class="col-md-4 p-1 pb-3 card-nilai">
            {{-- card --}}
            <div class="card mr-2 wrap-kategori" style="width: 100%; height:100%;">
                <h5 class="card-header"><b>{{ $n->mapel }}</b></h5>
                <div class="card-body p-3" style="padding:1vw;">
                    <h5 class="card-title" style=""><b>{{ $n->nama_nilai }}</b></h5>
                    <p class="card-text text-muted">Date:
                        <span>{{ date('d-m-Y', strtotime($n->tanggal_mapel)) }}</span> |
                        <span>{{ $n->kelas_mapel }}</span>
                    </p>
                    <div class="btn-card d-flex" style="justify-content:space-between;">
                        <a href="#" class="btn btn-primary p-1" style="font-size:100%; padding:0.2vw;"
                            data-toggle="modal" data-target="#detail{{ $n->id_mapel }}">Deskripsi</a>
                        <a href="#" class="btn btn-success p-1 masuk-mapel" data-url="/mapel/{{ $n->id_mapel }}/mapel"
                            style="font-size:100%; padding:0.2vw; right:0;">Masuk Mapel</a>
                    </div>
                </div>
            </div>
            {{-- endCard --}}
            <!-- Modal -->
            <div class="modal fade" id="detail{{ $n->id_mapel }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deskripsi Mapel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:72vh; overflow:auto;">
                            <p class="desk-mapel">{{ $n->deskripsi_mapel }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- endModal --}}
        </div>
        <?php $i=$i+1; ?>
        <?php $loopnilai = $n->id_mapel ?>
        @endif
        @endforeach
    </div>
</div>
{{-- endnilai --}}

<br><br>
{{-- mapel --}}
<div class="mapel wrap-kategori" style="background-color:rgba(14, 118, 255, 0.13); border-radius:10px;">
    <div class="kategori pb-2 pr-3">
        <table width="100%">
            <tr>
                <td valign="bottom" style="margin-bottom:0;">
                    <h4>Mapel Yang Baru Saja Diubah</h4>
                </td>
            </tr>
        </table>
    </div>
    <div class="row d-flex p-3">
        <?php $i = 10; ?>
        @foreach ($mapel as $m)
        {{-- @dd($m->id_kelas) --}}
            <?php $i--; ?>
            <div class="col-md-4 p-1 pb-3 card-mapel">
                {{-- card --}}
                <div class="card mr-2 wrap-kategori" style="width: 100%; height:100%;">
                    <h5 class="card-header"><b>{{ $m->mapel }}</b></h5>
                    <div class="card-body p-3" style="padding:1vw;">
                        <h5 class="card-title" style=""><b>{{ $m->nama_nilai }}</b></h5>
                        <p class="card-text text-muted">Date:
                            <span>{{ date('d-m-Y', strtotime($m->tanggal_mapel)) }}</span> |
                            <span>{{ $m->kelas_mapel }}</span>
                        </p>
                        <div class="btn-card d-flex" style="justify-content:space-between;">
                            <a href="#" class="btn btn-primary p-1" style="font-size:100%; padding:0.2vw;"
                                data-toggle="modal" data-target="#detail{{ $m->id_mapel }}">Deskripsi</a>
                            <a href="#" class="btn btn-success p-1 masuk-mapel" data-url="/mapel/{{ $m->id_mapel }}/mapel"
                                style="font-size:100%; padding:0.2vw; right:0;">Masuk Mapel</a>
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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="height:72vh; overflow:auto;">
                                <p class="desk-mapel">{{ $m->deskripsi_mapel }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- endModal --}}
            </div>
        @endforeach
    </div>
</div>
{{-- endmapel --}}

<br><br>

{{-- kelas --}}
<div class="kelas wrap-kategori" style="background-color:rgba(14, 118, 255, 0.13); border-radius:10px;">
    <div class="kategori pb-2 pr-3">
        <table width="100%">
            <tr>
                <td valign="bottom" style="margin-bottom:0;">
                    <h4>Kelas Yang Baru Saja Diubah</h4>
                </td>
            </tr>
        </table>
    </div>
    <div class="row d-flex p-3">
        @foreach ($datas as $data)
            <div class="col-md-4 p-1 pb-3 card-kelas">
                {{-- card --}}
                <div class="card m-0 wrap-kategori" style="width: 100%; height:100%;">
                @if ($data->foto_kelas)
                <img class="card-img-top" width="250px" height="200px"
                    src="/storage/fotokelas/{{ $data->foto_kelas }}" alt="Card image cap">
                @else
                <img class="card-img-top" width="250px" height="200px"
                    src="/storage/fotokelas/default.jpg" alt="Card image cap">
                @endif
                    <div class="card-body p-3" style="padding:1vw;">
                        <h5 class="card-title" style=""><b>{{ $data->nama_kelas }}</b></h5>
                        <p class="card-text"><span>{{ $data->angkatan }}</span></p>
                        <div class="btn-card d-flex" style="justify-content:space-between;">
                            <a href="#" class="btn btn-primary p-1 detail-kelas" style="font-size:100%; padding:0.2vw;"
                                data-toggle="modal" data-target="#detail{{ $data->id_kelas }}">DETAIL</a>
                            <a href="#" class="akt-ruangkelas btn btn-success p-1"
                                data-url="/ruangkelas/{{ $data->id_kelas }}"
                                style="font-size:100%; padding:0.2vw; right:0;">MASUK Kelas</a>
                        </div>
                    </div>
                </div>
                {{-- endCard --}}
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" id="detail{{ $data->id_kelas }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Detail Kelas
                                        {{ $data->nama_kelas }}</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-detail" style="height:70vh; overflow-y:auto;">
                                @if ($data->foto_kelas)
                                <center><img src="/storage/fotokelas/{{ $data->foto_kelas }}"
                                        style="background-image:url('storage/fotokelas/{{ $data->foto_kelas }}'); width:600px; height:400px;">
                                </center>
                                @else
                                <center><img src="/storage/fotokelas/default.jpg"
                                        style="background-image:url('storage/fotokelas/default.jpg'); width:600px; height:400px;">
                                </center>
                                @endif
                                <br>
                                <div class="isi">
                                    <h5><b>Angkatan:</b></h5>
                                    <p>{{ $data->angkatan }}</p>
                                    <br>
                                    <h5><b>Nama Kelas:</b></h5>
                                    <p>{{ $data->nama_kelas }}</p>
                                    <br>
                                    <h5><b>Deskripsi:</b></h5>
                                    <p class="detail-deskripsikelas"> {{ $data->deskripsi_kelas }}</p>
                                    <br>
                                    <h5><b>Tanggal dibuat: </b></h5>
                                    <p>{{ $data->created_at }} GMT</p>
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
        @endforeach
    </div>
</div>
{{-- endkelas --}}
<br>
<br>
<br>
<br>
<br>
{{-- js --}}
<script src="js/beranda.js"></script>
