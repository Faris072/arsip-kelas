<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome()">Home</a> / <a href="#" class="path"
        data-url="/angkatan">Angkatan</a>
</div>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>

<br>
<br>
<div class="tambahkelas d-flex" style="justify-content:flex-end;">
    <a href="#" class="btn btn-success px-5 py-2" data-toggle="modal" data-target="#tambahkelas">Tambah Kelas</a>
    {{-- modal --}}
    <div class="modal fade bd-example-modal-xl" id="tambahkelas" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Detail Kelas</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="height:70vh; overflow-y:auto;">
                    <form action="" method="post" id="form-tambah-kelas" enctype="multipart/form-data">
                        @csrf
                        <center>
                            <br>
                            <label for="gantifoto" id="label-ubahfoto" class="btn btn-primary"><i
                                    class="fas fa-upload pr-2"></i> Pilih Foto</label>
                            <br>
                            <input type="file" name="foto_kelas" id="gantifoto">
                            <br><br>
                        </center>
                        <label for="angkatan"><b>Angkatan: </b></label>
                        <select name="angkatan" class="form-control" id="angkatan">
                            @for ($i = 1980; $i <= date('Y'); $i++)
                                @if ($i == date('Y'))
                                    <option value="{{ $i }}" selected="selected">{{ $i }}
                                    </option>
                                @else
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endif
                            @endfor
                        </select>
                        <br>
                        <label for="namakelas"><b>Nama Kelas: </b></label>
                        <input type="text" name="nama_kelas" id="namakelas" class="form-control">
                        <br>
                        <label for="deskripsi"><b>Deskripsi:</b></label>
                        <textarea name="deskripsi_kelas" id="deskripsi-tambahkelas"></textarea>
                        <br>
                        <input type="submit" class="btn btn-success form-control" id="btn-tambahkelas"
                            value="Tambah Kelas">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- endmodal --}}
</div>
<br>

@foreach ($angkatan as $akt)
<div class="data">
    <div class="kategori pb-2 mt-3 pr-3" data-toggle="collapse" data-target="#akt{{ $akt->angkatan }}">
        <table width="100%">
            <tr>
                <td valign="bottom" style="margin-bottom:0;">
                    <h4><span>Agkatan {{ $akt->angkatan }}</span></h4>
                </td>
                <td><a href="#" class="btn btn-warning" style="float:right; color:white;">More >></a></td>
            </tr>
        </table>
    </div>
    <div class="collapse angkatan" id="akt{{ $akt->angkatan }}">
        <div class="row d-flex p-3" style="justify-content:space-between;">
            @foreach ($datas as $data)
                @if($data->angkatan == $akt->angkatan)
                <div class="col-md-4 col-6 p-0 pb-3">
                    {{-- card --}}
                    <div class="card m-0" style="width: 100%; height:100%;">
                        <img class="card-img-top" width="250px" height="200px" src="/storage/fotokelas/{{ $data->foto_kelas }}" alt="Card image cap">
                        <div class="card-body" style="padding:1vw;">
                            <h5 class="card-title" style=""><b>{{ $data->nama_kelas }}</b></h5>
                            <p class="card-text"><span>{{ $data->angkatan }}</span></p>
                            <div class="btn-card d-flex" style="justify-content:space-between;">
                                <a href="#" class="btn btn-primary p-1 detail-kelas" style="font-size:100%; padding:0.2vw;"
                                    data-toggle="modal" data-target="#detail{{ $data->id_kelas }}">DETAIL</a>
                                <a href="#" class="akt-ruangkelas btn btn-success p-1" data-url="/ruangkelas/{{ $data->id_kelas }}"
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
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-detail" style="height:70vh; overflow-y:auto;">
                                    <center><img src="/storage/fotokelas/{{ $data->foto_kelas }}"
                                        style="background-image:url('storage/fotokelas/{{ $data->foto_kelas }}'); width:600px; height:400px;"></center>
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
                @else
                {{ '' }}
                @endif
            @endforeach
        </div>
    </div>
</div>
@endforeach
<br>
<br>
<br>
<br>
<br>
{{-- js --}}
<script id="js" src="js/angkatan.js"></script>
<script>
    CKEDITOR.replace('deskripsi-tambahkelas');
</script>
