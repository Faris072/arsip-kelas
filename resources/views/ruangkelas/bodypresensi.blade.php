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
                    @if ($hdr!='')
                    <td>{{ $hdr['kehadiran'] }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ubah</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <form action="" class="form-kehadiran" data-url="/presensi/{{ $s->id_siswa }}/{{ $hdr['id_kehadiran'] }}/uhadir">
                                    @csrf
                                    <input type="hidden" name="kehadiran" value="Hadir">
                                    <input type="submit" class="dropdown-item p-2" value="Hadir">
                                </form>
                                <form action="" class="form-kehadiran" data-url="/presensi/{{ $s->id_siswa }}/{{ $hdr['id_kehadiran'] }}/uizin">
                                    @csrf
                                    <input type="hidden" name="kehadiran" value="Izin">
                                    <input type="submit" class="dropdown-item p-2" value="Izin">
                                </form>
                                <form action="" class="form-kehadiran" data-url="/presensi/{{ $s->id_siswa }}/{{ $hdr['id_kehadiran'] }}/ualpha">
                                    @csrf
                                    <input type="hidden" name="kehadiran" value="Alpha">
                                    <input type="submit" class="dropdown-item p-2" value="Alpha">
                                </form>
                            </div>
                        </div>
                    </td>
                    @else
                    <td> </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tambah</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <form action="" class="form-kehadiran" data-url="/presensi/{{ $s->id_siswa }}/thadir">
                                    @csrf
                                    <input type="hidden" name="kehadiran" value="Hadir">
                                    <input type="submit" class="dropdown-item p-2" value="Hadir">
                                </form>
                                <form action="" class="form-kehadiran" data-url="/presensi/{{ $s->id_siswa }}/tizin">
                                    @csrf
                                    <input type="hidden" name="kehadiran" value="Izin">
                                    <input type="submit" class="dropdown-item p-2" value="Izin">
                                </form>
                                <form action="" class="form-kehadiran" data-url="/presensi/{{ $s->id_siswa }}/talpha">
                                    @csrf
                                    <input type="hidden" name="kehadiran" value="Alpha">
                                    <input type="submit" class="dropdown-item p-2" value="Alpha">
                                </form>
                            </div>
                        </div>
                    </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="js/ruangkelas/bodypresensi.js"></script>

