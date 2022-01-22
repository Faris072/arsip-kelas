<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome();">Home</a> / <a href="#" class="path" data-url="/angkatan">Angkatan</a> / <a href="#" class="path" data-url="/ruangkelas">Ruang Kelas</a>
</div>
<br>
<span style="display: none;" id="linkCSS"><?php echo $css ?></span>
<div class="ruangkelas">
<div class="headsetting p-3" data-target="#set" data-toggle="collapse">
        <center><h5><b>Setting Kelas</b></h5></center>
    </div>
    <div class="settingkelas collapse" id="set">
        <div class="items d-flex pl-3">
            @for ($i=0;$i<10;$i++)
            <div class="item m-2">
                <div class="image">
                    <img src="storage/default/konten.jpg" alt="" style="width:100%">
                </div>
                <div class="ket pt-3">
                    <center><p>Diam</p></center>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <br><br>
    <div class="kelas">
        <div class="row d-flex p-3" style="justify-content:space-between;">
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
                                <a href="#" class="btn btn-success p-1" style="font-size:100%; padding:0.2vw; right:0;">Masuk Mapel</a>
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
            @endwhile
        </div>
    </div>
</div>
<br><br>
{{-- js --}}
<script src="js/ruangkelas.js"></script>
