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
        @for ($i= 0; $i<20; $i++)
        <tr>
            <td>{{ $i }}</td>
            <td>Faris</td>
            <td>Laki-Laki</td>
            <td>085706389042</td>
            <td>farisbos.mfs@gmail.com</td>
            <td><a href="#" class="btn btn-warning edit-siswa">Edit</a></td>
            <td><a href="#" class="btn btn-danger">Hapus</a></td>
        </tr>
        @endfor
    </table>
</div>
<script src="js/ruangkelas/setsiswa.js"></script>
