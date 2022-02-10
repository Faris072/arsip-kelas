<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home">Home</a>
</div>
<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>



{{-- nilai --}}
<div class="kategori pb-2 pr-3">
    <table width="100%">
        <tr>
            <td valign="bottom" style="margin-bottom:0;">
                <h4>Nilai baru saja diubah</h4>
            </td>
        </tr>
    </table>
</div>
<div class="row d-flex p-3" style="justify-content:space-between;">
    <div class="col-md-4 col-6 p-0 pb-3">
        {{-- card --}}
        <div class="card m-0" style="width: 100%; height:100%;">
            <h5 class="card-header"><b>Matematika</b></h5>
            <div class="card-body" style="padding:1vw;">
                <h5 class="card-title" style=""><b>UAS 1</b></h5>
                <p class="card-text text-muted">Date: <span>10/12/2022</span> | <span>X MIPA 5</span></p>
                <div class="btn-card d-flex" style="justify-content:space-between;">
                    <a href="#" class="btn btn-primary p-1" style="font-size:100%; padding:0.2vw;" data-toggle="modal"
                        data-target="#detail">Deskripsi</a>
                    <a href="#" class="btn btn-success p-1" style="font-size:100%; padding:0.2vw; right:0;">Masuk
                        Mapel</a>
                </div>
            </div>
        </div>
        {{-- endCard --}}
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="detail" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Description</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="height:70vh; overflow-y:auto;">
                        <div class="desc">
                            <p>aaa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- endModal --}}
    </div>
</div>
{{-- endnilai --}}



{{-- mapel --}}
<div class="kategori pb-2 pr-3">
    <table width="100%">
        <tr>
            <td valign="bottom" style="margin-bottom:0;">
                <h4>Mapel Yang Baru Saja Diubah</h4>
            </td>
        </tr>
    </table>
</div>
<div class="row d-flex p-3" style="justify-content:space-between;">
    <?php $i = 10; ?>
    @foreach ($mapel as $m)
        <?php $i--; ?>
        <div class="col-md-4 col-6 p-0 pb-3">
            {{-- card --}}
            <div class="card m-0" style="width: 100%; height:100%;">
                <h5 class="card-header"><b>{{ $m->mapel }}</b></h5>
                <div class="card-body" style="padding:1vw;">
                    <h5 class="card-title" style=""><b>{{ $m->nama_nilai }}</b></h5>
                    <p class="card-text text-muted">Date: <span>{{ date('d-m-Y', strtotime($m->tanggal_mapel)) }}</span> | <span>{{ $m->kelas->nama_kelas }}</span></p>
                    <div class="btn-card d-flex" style="justify-content:space-between;">
                        <a href="#" class="btn btn-primary p-1" style="font-size:100%; padding:0.2vw;"
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
                            <p>{{ $m->deskripsi_mapel }}</p>
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
{{-- endmapel --}}




{{-- kelas --}}

{{-- endkelas --}}
<br>
<br>
<br>
<br>
<br>
{{-- js --}}
<script src="js/home.js"></script>
