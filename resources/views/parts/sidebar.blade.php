<div class="sidebar">
    <div class="profil mt-2">
        <center>
            @if(Auth::user()->foto_profil)
            <img src="/storage/profil/{{ Auth::user()->foto_profil }}" style="width:100px; height:100px; border-radius:100%; object-fit:cover; object-position: center;" alt="">
            @else
            <img src="/storage/profil/user.png" style="width:100px; height:100px; border-radius:100%; object-fit:cover; object-position: center;" alt="">
            @endif            <br>
            <h5>{{ Auth::user()->username }}</h5>
            <h6>{{ Auth::user()->nama_lengkap }}</h6>
        </center>
        <hr>
    </div>
    <div class="menu-sidebar">
        <ul>
            <li><a href="#" class="sidebar-menu" data-url="home" style="background-color: rgba(255,255,255,0.5); width:90%; margin:auto;"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#" class="sidebar-menu" id="sidebar-angkatan" data-url="angkatan" ><i class="fas fa-user-graduate"></i> Angkatan</a></li>
            <li><a href="#" class="sidebar-menu" data-url="jadwal" ><i class="far fa-calendar-alt"></i> Jadwal Saya</a></li>
            {{-- <li><a href="#" class="sidebar-menu" data-url="angkatan" ><i class="fas fa-user-cog"></i> Setting Kelas</a></li> --}}
            <li><a href="#" class="sidebar-menu" data-url="profil"><i class="fas fa-user-circle"></i> Profil</a></li>
            <form action="/auth/logout" method="post">
                @csrf
                <li><button id="x" class="sidebar-menu"><i class='fas fa-sign-out-alt'></i> Logout</button></li>
            </form>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
