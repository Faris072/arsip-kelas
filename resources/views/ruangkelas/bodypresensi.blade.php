<div class="headsetpresensi mb-1">
    <h6><b>Presensi</b></h6>
</div>
<div class="detailpresensi mb-3">
    <table>
        <tr>
            <td>Tanggal Presensi</td>
            <td> : </td>
            <td> {{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
        </tr>
        <tr>
            <td>Nama Presensi</td>
            <td> : </td>
            <td> {{ $data->nama_presensi }}</td>
        </tr>
    </table>
    <br>
    <div class="aksi d-flex">
    <button class="btn btn-primary mr-2" id="ubahpresensi" data-url="/presensi/{{ $data->id_presensi }}/edit">Ubah Presensi</button>
        <form action="" method="POST" id="form-hapus-presensi" data-url="/presensi/{{ $data->id_presensi }}/delete">
            @csrf
            <button class="btn btn-danger" id="ubahpresensi">Hapus Presensi</button>
        </form>
    </div>
</div>
<div class="isipresensi">
    <table celpadding="0" class="table table-hover table-striped">
        <thead class="table-primary p-5 pt-0">
            <tr>
                <th>No. Absen</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Kehadiran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            @foreach ($datas as $s)
                <tr>
                    <td>{{ $s->no_absen }}</td>
                    <td>{{ $s->nama_siswa }}</td>
                    <td>{{ $s->gender }}</td>
                    <?php $hdr = tampilKehadiran(session()->get('id_presensi'),$s->id_siswa) ?>
                    {{-- @dd($hdr) --}}
                    <td>{{ $hdr }}</td>
                    @if ($hdr!='')
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#ubah">Ubah</button></td>
                    @else
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#ubah">Tambah</button></td>
                    @endif
                </tr>
                <!-- Modal -->
                <div class="modal modal-presensi fade" id="ubah" tabindex="-1"
                    role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <b>Noname</b></h5>
                                <button type="button" class="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Silahkan pilih presensi untuk siswa <span
                                        style="color:blue;">Noname</span> di bawah ini!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                    class="btn btn-success" id="hadir">Hadir</button>
                                <button type="button"
                                    class="btn btn-primary">Izin</button>
                                <button type="button"
                                    class="btn btn-danger">Alpha</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- endmodal --}}
            @endforeach
        </tbody>
    </table>
</div>
<script src="js/ruangkelas/bodypresensi.js"></script>

