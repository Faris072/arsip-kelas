<div class="tgl-presensi">
    <div class="headtglpresensi mb-3">
        <h6><b>Tanggal Presensi</b></h6>
    </div>
    <div class="isitglpresensi">
        @foreach ($datas as $x)
        <button class="tg-presensi btn btn-primary mb-1" data-url="/presensi/{{ $x->id_presensi }}/body">{{ date('d-m-Y', strtotime($x->tanggal_presensi)) }}</button>
        @endforeach
    </div>
</div>
<hr>
<div class="set-presensi">

</div>
<script src="js/ruangkelas/ruangkelaspresensi.js"></script>
