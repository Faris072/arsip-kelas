<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home">Home</a>
</div>
<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
    <div class="kategori pb-2 pr-3">
        <table width="100%">
            <tr>
                <td valign="bottom" style="margin-bottom:0;">
                    <h4><span>X MIPA 5</span> | <span>2020</span></h4>
                </td>
                <td><a href="#presensi" class="btn btn-warning" data-toggle="collapse"
                        style="float:right; color:white;">Presensi >></a></td>
            </tr>
        </table>
    </div>
    <div class="absen collapse" id="presensi">
        <div class="card">
            <div class="card-header">
                <div class="row d-flex" style="flex-wrap:nowrap;">
                    <div class="col-md-6">
                        <h5><b>Presensi</b></h5>
                    </div>
                    <div class="col-md-6">
                        <center><button class="btn btn-success" style="float:right;">Tambah Presensi</button></center>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @for ($i = 0; $i < 5; $i++)
                    <button class="btn btn-primary mb-1">20 Dec 2021</button>
                @endfor
            </div>
        </div>
    </div>
    <?php $i = 10; ?>
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
                            <a href="#" class="btn btn-success p-1" style="font-size:100%; padding:0.2vw; right:0;">MASUK
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
        @endwhile
    </div>
{{-- js --}}
<script src="js/home.js"></script>
