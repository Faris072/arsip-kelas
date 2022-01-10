<span style="display: none;" id="linkCSS"><?php echo $css ?></span>
<span style="display: none;" id="linkJS"><?php echo $js ?></span>
<br>
<center>
    <div class="pesananku">
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
</center>
