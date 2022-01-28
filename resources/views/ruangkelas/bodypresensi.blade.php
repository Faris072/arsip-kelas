<div class="headsetpresensi mb-1">
    <h6><b>Presensi</b></h6>
</div>
<div class="detailpresensi mb-3">
    <table>
        <tr>
            <td>Tanggal Presensi</td>
            <td> : </td>
            <td> 10-10-2022</td>
        </tr>
        <tr>
            <td>Nama Presensi</td>
            <td> : </td>
            <td> UAS</td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td> : </td>
            <td> Blablabla</td>
        </tr>
    </table>
    <button class="btn btn-primary" id="ubahpresensi">Ubah Presensi</button>
</div>
<div class="isipresensi">
    <table celpadding="0" class="table table-hover table-striped">
        <thead class="table-primary p-5">
            <tr>
                <th>No. Absen</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Kehadiran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            @for ($i = 0; $i < 30; $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>Noname</td>
                    <td>L</td>
                    <td>Hadir</td>
                    <td><button class="btn btn-primary" data-toggle="modal"
                            data-target="#ubah{{ $i }}">Ubah</button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal modal-presensi fade" id="ubah{{ $i }}" tabindex="-1"
                    role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <b>Noname</b></h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" data-target=".modal-presensi"
                                    aria-label="Close">
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
                                    class="btn btn-success">Hadir</button>
                                <button type="button"
                                    class="btn btn-primary">Izin</button>
                                <button type="button"
                                    class="btn btn-danger">Alpha</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- endmodal --}}
            @endfor
        </tbody>
    </table>
</div>
<script src="js/ruangkelas/bodypresensi.js"></script>

