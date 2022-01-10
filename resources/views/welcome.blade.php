@extends('parts\body')

@section('body')
    <span style="display: none;" id="linkCSS"><?php echo $css ?></span>
    <span style="display: none;" id="linkJS"><?php echo $js ?></span>
    <div class="kategori pb-2 pr-3">
        <table width="100%">
            <tr>
                <td valign="bottom" style="margin-bottom:0;"><h4>Kaos</h4></td>
                <td><a href="#" class="btn btn-warning" style="float:right; color:white;">More >></a></td>
            </tr>
        </table>
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
                        <h5 class="card-title" style=""><b>Card title</b></h5>
                        <p class="card-text">Rp.10.000</p>
                        <div class="btn-card d-flex" style="justify-content:space-between;">
                            <a href="#" class="btn btn-primary" style="font-size:100%; width:30%; padding:0.2vw;"
                                data-toggle="modal" data-target="#detail">Detail</a>
                            <a href="#" class="btn btn-info" style="font-size:100%; width:30%; padding:0.2vw;">Pesan</a>
                            <a href="#" class="btn btn-success"
                                style="font-size:100%; width:30%; padding:0.2vw; right:0;">Chat</a>
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
@endsection
