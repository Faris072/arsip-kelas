<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome();">Home</a> / <a href="#"
        class="path" data-url="/angkatan">Angkatan</a> / <a href="#" class="path"
        data-url="/ruangkelas">Ruang Kelas</a> / <a href="#" class="path" data-url="/mapel">Mapel</a>
</div>
<br>
{{-- linkcss --}}
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
{{-- endlinkcss --}}

<div class="card">
    <div class="card-header d-flex" style="cursor: pointer; justify-content:space-between;" data-toggle="collapse" data-target="#detail-mapel">
        <h5><b>Matematika</b> / <b><span style="color:blue;">UAS 1</span></b></h5>
        <i class="fas fa-caret-down fa-2x"></i>
    </div>
    <div class="collapse card-body" id="detail-mapel">

    </div>
</div>
<br><br>
<div class="nilai">
    <div class="panel" style="width:100%">
        <div class="panel-heading" style="width: 100%;">
            <div class="row">
                <div class="col col-sm-3 col-xs-12">
                    <h4 class="title"><b>Nilai <span>UAS 1</span></b></span></h4>
                </div>
                <div class="col-sm-9 col-xs-12 text-right">
                    <div class="btn_group">
                        <input type="text" class="form-control" placeholder="Search" spellcheck="false"
                            data-ms-editor="true">
                        <button class="btn btn-default ml-3" title="Reload">Cetak</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><b>No. Absen</b></th>
                        <th><b>Nama</b></th>
                        <th><b>Gender</b></th>
                        <th><b>No. Telp</b></th>
                        <th><b>Email</b></th>
                        <th><b>Nilai</b></th>
                        <th><b>Aksi</b></th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i < 30; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>Muhammad Faris Shafwan</td>
                            <td>Laki-laki</td>
                            <td>085706389042</td>
                            <td>farisbos.mfs@gmail.com</td>
                            <td>100</td>
                            <td><a href="#" class="btn btn-outline-light" data-toggle="modal" data-target="#ubahnilai">Edit Nilai</a></td>
                        </tr>
                        {{-- modal --}}
                        <div class="modal" tabindex="-1" role="dialog" id="ubahnilai">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Nilai</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Silahkan ubah nilai atau tambahkan nilai untuk siswa <span style="color:blue;">Muhammad Faris Shafwan</span> di kolom dibahwah ini:</p>
                                        <form action="/a" method="POST">
                                            <input type="number" class="form-control" name="nilai" value="100">
                                    </div>
                                    <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value="Simpan Nilai">
                                        </form>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- endmodal --}}
                    @endfor
                </tbody>
            </table>
        </div>
        {{-- <div class="panel-footer">
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
        </div> --}}
    </div>
</div>


{{-- js --}}
<script src="js/mapel.js"></script>

