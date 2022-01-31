<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome();">Home</a> / <a href="#"
        class="path" data-url="/angkatan">Angkatan</a> / <a href="#" class="path"
        data-url="/ruangkelas">Ruang Kelas</a> / <a href="#" class="path" data-url="/mapel">Mapel</a>
</div>
<br>
{{-- linkcss --}}
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
{{-- endlinkcss --}}

<div class="container">
    <div class="card">
        <div class="card-header" style="cursor: pointer" data-toggle="collapse" data-target="#detail-mapel">
            <h5><b>Matematika</b> / <b><span style="color:blue;">UAS 1</span></b></h5>
        </div>
        <div class="collapse card-body" id="detail-mapel">
            <h5><b>Kelas: </b></h5>
            <p>XI MIPA 5</p>
            <h5><b>Mapel: </b></h5>
            <p>MATEMATIKA</p>
            <h5><b>Nama Nilai: </b></h5>
            <p>UAS 1</p>
            <h5><b>Deskripsi</b></h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita, sunt sequi ea velit accusamus modi officiis mollitia illo eveniet quae illum qui doloremque! Incidunt porro tenetur magnam labore. Placeat?</p>
            <h5><b>Tanggal Dibuat: </b></h5>
            <p>10/10/2022</p>
            <a href="#" class="btn btn-primary px-5">Edit</a>
        </div>
    </div>

    <div class="nilai">
        <div class="panel" style="width:100%">
            <div class="panel-heading" style="width: 100%;">
                <div class="row">
                    <div class="col col-sm-3 col-xs-12">
                        <h4 class="title"><b>Pesananku</b></span></h4>
                    </div>
                    <div class="col-sm-9 col-xs-12 text-right">
                        <div class="btn_group">
                            <input type="text" class="form-control" placeholder="Search" spellcheck="false"
                                data-ms-editor="true">
                            <button class="btn btn-default" id="pesananku-reload" title="Reload"><i class="fa fa-sync-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><b>No</b></th>
                            <th><b>Nama</b></th>
                            <th><b>Harga</b></th>
                            <th><b>Jumlah</b></th>
                            <th><b>Potongan</b></th>
                            <th><b>Total</b></th>
                            <th><b>Tanggal Memesan</b></th>
                            <th><b>Tanggal Kirim</b></th>
                            <th><b>Aksi</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Distro</td>
                            <td>100000</td>
                            <td>4</td>
                            <td>10000</td>
                            <td>390000</td>
                            <td>10 Oktober 2001</td>
                            <td>10 Oktober 2001</td>
                            <td><a href="#" class="btn btn-outline-light">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col col-sm-6 col-xs-6">showing <b>10</b> out of <b>25</b> entries</div>
                    <div class="col-sm-6 col-xs-6">
                        <ul class="pagination hidden-xs pull-right">
                            <li><a href="#"><<</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- js --}}
<script src="js/mapel.js"></script>
