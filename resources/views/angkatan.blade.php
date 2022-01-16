<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome()">Home</a> / <a href="#" class="path" data-url="/angkatan">Angkatan</a>
</div>
<span style="display: none;" id="linkCSS"><?php echo $css ?></span>
@for ($j=0;$j<5;$j++)
<div class="kategori pb-2 mt-3 pr-3" data-toggle="collapse" data-target="#akt2020">
    <table width="100%">
        <tr>
            <td valign="bottom" style="margin-bottom:0;"><h4><span>Agkatan 2020</h4></td>
            <td><a href="#" class="btn btn-warning" style="float:right; color:white;">More >></a></td>
        </tr>
    </table>
</div>
<?php $i = 10; ?>
<div class="collapse angkatan" id="akt2020">
    <div class="row d-flex p-3" style="justify-content:space-between;">
        @while ($i != 0)
            <?php $i--; ?>
            <div class="col-md-4 col-6 p-0 pb-3">
                {{-- card --}}
                <div class="card m-0" style="width: 100%; height:100%;">
                    <img class="card-img-top" src="/storage/default/konten.jpg" alt="Card image cap">
                    <div class="card-body" style="padding:1vw;">
                        <h5 class="card-title" style=""><b>X MIPA 5</b></h5>
                        <p class="card-text"><span>2020</span></p>
                        <div class="btn-card d-flex" style="justify-content:space-between;">
                            <a href="#" class="btn btn-primary p-1" style="font-size:100%; padding:0.2vw;"
                                data-toggle="modal" data-target="#detail">DETAIL</a>
                            <a href="#" class="akt-ruangkelas btn btn-success p-1" data-url="/ruangkelas" style="font-size:100%; padding:0.2vw; right:0;">MASUK Kelas</a>
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
                                                    <img class="d-block" id="gambar0" style="width:70%;" src="/storage/default/konten.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" id="gambar0" style="width:70%;" src="/storage/default/konten.jpg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" id="gambar0" style="width:70%;" src="/storage/default/konten.jpg" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" style="background-color:black;" href="#carouselExampleIndicators" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" style="background-color:black;" href="#carouselExampleIndicators" role="button"
                                                data-slide="next">
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptatum architecto, odit eaque repellendus unde, odio saepe quidem optio cupiditate numquam blanditiis non recusandae. Cumque a consequuntur excepturi eaque dolorum!</p>
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
        @endwhile
    </div>
</div>
@endfor
{{-- js --}}
<script id="js" src="js/angkatan.js"></script>
