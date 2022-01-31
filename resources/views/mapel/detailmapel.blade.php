<h5><b>Kelas: </b></h5>
<p>XI MIPA 5</p>
<h5><b>Mapel: </b></h5>
<p>MATEMATIKA</p>
<h5><b>Nama Nilai: </b></h5>
<p>UAS 1</p>
<h5><b>Deskripsi:</b></h5>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita, sunt sequi ea velit accusamus modi
    officiis mollitia illo eveniet quae illum qui doloremque! Incidunt porro tenetur magnam labore. Placeat?</p>
<h5><b>Tanggal Dibuat: </b></h5>
<p>10/10/2022</p>
<h5><b>Aksi:</b></h5>
<div class="aksi d-flex">
    <a href="#" class="btn btn-primary px-5" data-toggle="modal" data-target="#edit-mapel">Edit</a>
    <a href="#" class="btn btn-danger px-5 ml-3">Hapus Mapel</a>
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
                        <form action="">
                            <label for="nama-mapel"><b>Nama Mapel:</b></label>
                            <input type="text" name="nama_mapel" id="nama-mapel" class="form-control">
                            <br>
                            <label for="namanilai-mapel"><b>Nama Nilai Mapel:</b></label>
                            <input type="text" name="tanggal_mapel" id="tanggal-mapel" class="form-control">
                            <br>
                            <label for="tanggal-mapel"><b>Tanggal Mapel:</b></label>
                            <input type="date" name="tanggal_mapel" id="tanggal-mapel" class="form-control"
                                value="{{ date('Y-m-d') }}">
                            <br>
                            <label for="deskripsi-mapel"><b>Deskripsi Mapel: </b></label>
                            <textarea name="deskripsi_mapel" id="deskripsi-mapel"></textarea>
                            <br>
                            <input type="submit" value="Edit Mapel" id="btn-editmapel" class="btn btn-primary form-control">
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
</div>
<script src="detailmapel.js"></script>
<script>
    CKEDITOR.replace('deskripsi-mapel');
</script>

