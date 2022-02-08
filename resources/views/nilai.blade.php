<div class="panel" style="width:100%">
    <div class="panel-heading" style="width: 100%;">
        <div class="row">
            <div class="col col-sm-3 col-xs-12">
                <h4 class="title"><b>Nilai <span>{{ $m->nama_nilai }}</span></b></span></h4>
            </div>
            <div class="col-sm-9 col-xs-12 text-right">
                <div class="btn_group">
                    <input type="text" class="form-control" placeholder="Search" spellcheck="false"
                        data-ms-editor="true">
                    <a href="/cetaknilai" target="_blank" class="btn btn-default ml-3" title="Reload">Cetak</a>
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
                @foreach ($siswa as $s)
                    <tr class="table-bordered">
                        <td>{{ $s->no_absen }}</td>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ $s->gender }}</td>
                        <td>{{ $s->telp_siswa }}</td>
                        <td>{{ $s->email_siswa }}</td>
                        <?php $n = tampilNilai(session()->get('id_mapel'),$s->id_siswa); ?>
                @if ($n != '')
                        <td>{{ $n['nilai'] }}</td>
                        <td><a href="#" class="btn btn-outline-light" data-toggle="collapse" data-target="#ubahnilai{{ $s->id_siswa }}" id="btn-ubah-nilai" data-id="{{ $s->id_siswa}}">Edit <i class="fas fa-caret-down"></i></a></td>
                    </tr>
                    <tr id="ubahnilai{{ $s->id_siswa }}" class="collapse">
                        <td></td>
                        <td>Masukkan Nilai: </td>
                        <td colspan="4">
                            <form action="" class="form-inline-fluid d-flex form-ubah-nilai" data-url="/nilai/{{ $n['id_nilai'] }}/update" style="justify-content:space-between;">
                                @csrf
                                <input type="number" name="nilai" value="{{ $n['nilai'] }}" class="form-control">
                                <button class="btn btn-primary ml-3">Ubah</button>
                            </form>
                            </td>
                        </tr>
                @else
                        <td></td>
                        <td><button href="#" class="btn btn-outline-light" data-toggle="collapse" data-target="#tambahnilai{{ $s->id_siswa }}">Tambah <i class="fas fa-caret-down"></i></button></td>

                    </tr>
                    <tr id="tambahnilai{{ $s->id_siswa }}" class="collapse">
                        <td></td>
                        <td>Masukkan Nilai: </td>
                        <td colspan="4">
                            <form action="" class="form-inline-fluid d-flex form-tambah-nilai" data-url="/nilai/{{ $s->id_siswa }}/tambah" style="justify-content:space-between;">
                                @csrf
                                <input type="number" name="nilai" class="form-control">
                                <button class="btn btn-success ml-3">Tambah</button>
                            </form>
                            </td>
                        </tr>
                @endif

                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="js/nilai.js"></script>
