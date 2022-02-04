<div class="isi" id="isi-setsiswa">
    <table class="table">
        <tr class="table-primary">
            <th><b>No. Absen</b></th>
            <th><b>Nama</b></th>
            <th><b>Gender</b></th>
            <th><b>No. Telp</b></th>
            <th><b>Email</b></th>
            <th colspan="2"><b>Aksi</b></th>
        </tr>
        @foreach ($data_siswa as $dtsiswa)
            <tr>
                <td>{{ $dtsiswa->no_absen }}</td>
                <td>{{ $dtsiswa->nama_siswa }}</td>
                <td>{{ $dtsiswa->gender }}</td>
                <td>{{ $dtsiswa->telp_siswa }}</td>
                <td>{{ $dtsiswa->email_siswa }}</td>
                <td><a href="#" class="btn btn-warning edit-siswa" data-url="/setsiswa/{{ $dtsiswa->id_siswa }}|/edit"
                        id="edit-siswa">Edit</a></td>
                <td>
                    <form method="POST" class="form-delete-siswa" action="/setsiswa/{{ $dtsiswa->id_siswa }}/delete" data-url="/setsiswa/{{ $dtsiswa->id_siswa }}/delete">
                        @csrf
                        <input id="btn-hapus-siswa" type="submit" class="btn btn-danger" value="Hapus Permanen">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<script src="js/ruangkelas/setsiswa.js"></script>
