<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/beranda" onclick="klikhome()">Beranda</a> / <a href="#" class="path" data-url="/profil">Profil</a>
</div>
<span style="display: none;" id="linkCSS"><?php echo $css ?></span>
<div class="container">
    <div class="aksi mt-4">
        <a href="#" class="btn btn-primary" data-url="/profil/edit" id="settingprofil">Setting Profil</a>
        <hr>
    </div>
    <div class="profil">
        <br>
        <center>
            <div class="fotoprofil">
                @if(Auth::user()->foto_profil)
                <img src="/storage/profil/{{ Auth::user()->foto_profil }}" style="width:200px; height:200px; border-radius:100%; object-fit:cover; object-position: center;" alt="">
                @else
                <img src="/storage/profil/user.png" style="width:200px; height:200px; border-radius:100%; object-fit:cover; object-position: center;" alt="">
                @endif
            </div>
        </center>
        <br>
        <br>
        <table>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>Username</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">{{ Auth::user()->username }}</td>
            </tr>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>Nama Lengkap</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">{{ Auth::user()->nama_lengkap }}</td>
            </tr>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>Email</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">{{ Auth::user()->email }}</td>
            </tr>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>No. Telp</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">{{ Auth::user()->telp }}</td>
            </tr>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>Tempat Lahir</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">{{ Auth::user()->tempat_lahir }}</td>
            </tr>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>Tanggal Lahir</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">@if(Auth::user()->tanggal_lahir){{ date('d-m-Y', strtotime(Auth::user()->tanggal_lahir)) }}@else @endif</td>
            </tr>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>Jenis Kelamin</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">{{ Auth::user()->jenis_kelamin }}</td>
            </tr>
            <tr style="padding-bottom:10px;">
                <th class="pb-3"><b>Alamat</b></th>
                <td class="pb-3 pr-2 pl-5">:</td>
                <td class="pb-3">{{ Auth::user()->alamat }}</td>
            </tr>

        </table>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
{{-- js --}}
<script id="js" src="js/profil.js"></script>
