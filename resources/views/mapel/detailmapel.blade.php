<h5><b>Kelas: </b></h5>
<p>{{ $mp->kelas_mapel }}</p>
<h5><b>Mapel: </b></h5>
<p>{{ $mp->mapel }}</p>
<h5><b>Nama Nilai: </b></h5>
<p>{{ $mp->nama_nilai }}</p>
<h5><b>Deskripsi:</b></h5>
<p id="desc-mapel">{{ $mp->deskripsi_mapel }}</p>
<h5><b>Tanggal Dibuat: </b></h5>
<p>{{ date('d-m-Y', strtotime($mp->tanggal_mapel)) }}</p>
<h5><b>Aksi:</b></h5>
<div class="aksi d-flex">
    <a href="#" class="btn btn-primary px-5" data-toggle="modal" data-target="#edit-mapel">Edit</a>
    <a href="#" class="btn btn-danger px-5 ml-3" id="btn-delete-mapel" data-toggle="modal" data-target="#modal-hapusmapel">Hapus Mapel</a>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" id="edit-mapel" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Mapel</b></h5>
                    <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="height:70vh; overflow-y:auto;">
                    <div class="container">
                        <form action="/mapel/{{ $mp->id_mapel }}/update" data-url="/mapel/{{ $mp->id_mapel }}/update" method="POST" id="form-edit-mapel">
                            @csrf
                            <label for="nama-mapel"><b>Nama Mapel:</b><span style="color:red">*</span></label>
                            <input type="text" name="mapel" id="nama-mapel" class="form-control" value="{{ $mp->mapel }}" required>
                            <small class="text-muted">Nama mapel maksimal 50 karakter</small>
                            <br>
                            <label for="namanilai-mapel"><b>Nama Nilai Mapel:</b><span style="color:red;">*</span></label>
                            <input type="text" name="nama_nilai" class="form-control" value="{{ $mp->nama_nilai }}" required>
                            <small class="text-muted">Nama nilai mapel maksimal 50 karakter</small>
                            <br>
                            <label for="tanggal-mapel"><b>Tanggal Mapel:</b><span style="color:red">*</span></label>
                            <input type="date" name="tanggal_mapel" id="tanggal-mapel" class="form-control"
                                value="{{ date('Y-m-d',strtotime($mp->tanggal_mapel)) }}" required>
                            <br>
                            <label for="deskripsi-mapel"><b>Deskripsi Mapel: </b></label>
                            <textarea id="deskripsi-mapel"></textarea>
                            <br>
                            <input type="submit" value="Edit Mapel" class="btn btn-primary form-control">
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- endModal --}}
    {{-- modal --}}
    <div class="modal" tabindex="-1" role="dialog" id="modal-hapusmapel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Hapus Mapel</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><b>Apakah anda yakin akan menghapus mapel {{ $mp->mapel }}?</b> mapel yang anda hapus akan hilang beserta dengan nilai yang anda buat di mapel ini.</p>
                </div>
                <div class="modal-footer">
                    <form action="" id="form-hapus-mapel" data-url="/mapel/{{ $mp->id_mapel }}/delete" method="POST" >
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Hapus Kelas"></input>
                    </form>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Batalkan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- endmodal --}}
</div>
<script src="js/mapel/detailmapel.js"></script>
<script>
    CKEDITOR.replace('deskripsi-mapel');
</script>

