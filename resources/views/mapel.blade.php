<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome();">Home</a> / <a href="#"
        class="path" data-url="/angkatan">Angkatan</a> / <a href="#" class="path"
        data-url="/ruangkelas/{{ session()->get('id_kelas'); }}">Ruang Kelas</a> / <a href="#" class="path" data-url="/mapel/{{ $m->id_mapel }}/mapel">Mapel</a>
    </div>
<br>
{{-- linkcss --}}
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
{{-- endlinkcss --}}

<div class="card">
    <div class="card-header d-flex" id="btn-detail-mapel" data-url="/mapel/{{ $m->id_mapel }}/detail" style="cursor: pointer; justify-content:space-between;" data-toggle="collapse" data-target="#detail-mapel">
        <h5> <b>{{ $m->kelas_mapel }}</b> / <b>{{ $m->mapel }}</b> / <b><span style="color:blue;">{{ $m->nama_nilai }}</span></b></h5>
        <i class="fas fa-caret-down fa-2x"></i>
    </div>
    <div class="collapse card-body" id="detail-mapel">

    </div>
</div>
<br><br>
<div class="nilai" data-url="/nilai">
{{-- ajax --}}
</div>

<br>
<br>
<br>
<br>
<br>

{{-- js --}}
<script src="js/mapel.js"></script>

