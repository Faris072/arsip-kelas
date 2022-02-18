<!doctype html>
<html lang="id">

<head>
    <title>Homepage</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/7b5d20839a.js" crossorigin="anonymous"></script>
    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Font Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--link css-->
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            overflow-x: hidden;
        }

        .container center h1 {
            font-family: roboto;
        }

        .accordion {
            box-shadow: 0px 0px 20px -5px grey;
        }

        #akunberita {
            color: white;
            font-size: 18px;
        }

        #akunberita:hover {
            color: gold;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position:sticky; top:0; z-index:999;">
        <a class="navbar-brand pr-5" href="#" style="font-family: 'Fredericka the Great', cursive;">Arsip Kelas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse pl-5" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active p-1">
                    <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item p-1 dropdown navdropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programing & Coding
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">UX</a>
                        <a class="dropdown-item" href="#">HTML</a>
                        <a class="dropdown-item" href="#">CSS</a>
                        <a class="dropdown-item" href="#">JavaScript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">UI</a>
                        <a class="dropdown-item" href="#">PHP</a>
                        <a class="dropdown-item" href="#">LARAVEL</a>
                    </div>
                </li>
                <li class="nav-item p-1 dropdown navdropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Trik Game Android
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Game Populer</a>
                        <a class="dropdown-item" href="#">Mobile Legends</a>
                        <a class="dropdown-item" href="#">PUBG Mobile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">Game Lainnya</a>
                        <a class="dropdown-item" href="#">Free Fire</a>
                        <a class="dropdown-item" href="#">POU</a>
                    </div>
                </li>
                <li class="nav-item p-1 dropdown navdropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Trading & Investasi
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Analisis Fundamental</a>
                        <a class="dropdown-item" href="#">Analisis Tekhnical</a>
                    </div>
                </li>
                <li class="nav-item p-1 dropdown navdropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Artikel Sehari-hari
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Kesehatan</a>
                        <a class="dropdown-item" href="#">Covid-19</a>
                        <a class="dropdown-item" href="#">Comming soon</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">Lainnya</a>
                        <a class="dropdown-item" href="#">Flu</a>
                        <a class="dropdown-item" href="#">Batuk</a>
                    </div>
                </li>
            </ul>
            <a class="nav-link btn btn-primary py-1 ml-0" href="/auth/create">Register</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 p-0">
                <img src="/asets/illustrasi/5 SCENE.svg" width="100%" alt="">
            </div>
            <div class="col-md-4 d-flex">
                <div class="container m-auto" style="font-family: 'Roboto', sans-serif;">
                    <form action="/auth/login" method="POST">
                        @csrf
                        <center><h4><b>Login Arsip Kelas</b></h4></center>
                        <br>
                        <input type="email" class="form-control" name="email" placeholder="email">
                        <br>
                        <input type="password" class="form-control" name="password" placeholder="password">
                        <br>
                        <input type="checkbox" id="remember" name="remember_me"> <label for="remember"> Remember me</label>
                        <br>
                        <input type="submit" class="form-control btn btn-success" value="Login">
                        <br>
                        <br>
                        <p>Lupa password? <a href="#">Ganti Password</a></p>
                        <p>Belum punya akun? <a href="/auth/create">Register</a></p>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <center><h3><b>Selamat Datang di Arsip Kelas</b></h3></center>
        <br>
        <p style="text-indent:25px">
            Arsip kelas adalah website yang menyediakan berbagai fitur untuk memudahkan seseorang terutama para guru untuk
            mengarsipkan data-data mereka. Website ini menyediakan fitur kelas, daftar siswa, presensi, daftar nilai, dan masih banyak lagi.
            Untuk memudahkan anda, kami juga membuat loading website ini seminimal mungkin supaya meningkatkan kecepatan website ini
            dalam memuat berbagai data. Di sini, pengarsipan dapat dilakukan dimana saja dan kapan saja.
        </p>
        <p style="text-indent:25px;">
            Dalam kehidupan sehari-hari seseorang pasti pernah mengalami kehilangan dan
            lupa akan sesuatu, seperti misalnya lupa menaruh dokumen, lupa membawa dokumen ke kantor, kehilangan dokumen,
            dan lain sebagainya. Tak itu saja, dalam kehidupan sehari-hari, seseorang pasti menginginkan sesuatu yang simpel,
            mudah digunakan, dan bisa melakukan pekerjaan kapanpun dan dimanapun.
        </p>
        <p style="text-indent:25px;">
            Oleh karena itu, di web ini anda dapat mengarsipkan dokumen anda tanpa khawatir kehilangan dokumen, lupa membawa dokumen,
            melakukan pengarsipan anda secara mudah dan praktis. Disini anda tidak diminta data-data penting pribadi seperti nomor KTP,
            NIP, NIS, NISN dan lain sebagainya sehingga anda tidak perlu khawatir akan data-data penting anda. Untuk password, anda tidak
            harus mengisikan password asli dari email anda dan password anda akan di enskripsi sehingga tak seorangpun termasuk developer dan admin
            mengetahui password anda.
        </p>
    </div>
    <br><br><br>
    <div class="container">
        <center>
            <h3><b>Kelebihan Arsip Kelas</b></h3>
        </center>
        <br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fas fa-spinner fa-7x" style="color:rgb(8, 46, 214); margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>Minim Loading</b></h5>
                <p>
                    Website ini mengusahakan loading seminimal mungkin sehingga mempercepat anda dalam mengaksesn web ini. Karena
                    pada dasarnya website akan memuat semua data ketika website tersebut berpindah halaman. Di sini, anda tidak
                    perlu khawatir akan kecepatan website dalam meload data karena hanya data-data yang harus dimuat saja yang akan di load
                    dari server dan data yang tidak perlu dimuat tidak akan dimuat sehingga ringan dalam mengambil data dari server.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fas fa-mobile-alt fa-7x" style="color:rgb(0, 0, 0); margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>Mudah dan Simpel</b></h5>
                <p>
                    Anda tidak perlu repot-repot lagi untuk mengambil bolpoint dan kertas untuk mengarsipkan data. Di zaman ini sudah saatnya
                    kita beralih ke era digital dimana anda dapat melakukan pekerjaan anda dari manapun dan kapanpun melalui perangkat kecil. Ini juga berlaku
                    untuk website ini. Selama anda terhubung dengan internet dan perangkat yang mendukung seperti smartphone atau PC, anda dapat
                    melakukan pengarsipan secara digital dan daring.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fas fa-lock fa-7x" style="margin:auto; color:gold;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>Aman</b></h5>
                <p>
                    Tak perlu lagi khawatir akan kehilangan dokumen penting anda. Karena disini data anda akan disimpan di server
                    sehingga data anda tidak akan hilang selama anda menghapusnya. Untuk keamanan akun, password anda akan di enskripsi
                    sehingga tidak ada seorangpun yang dapat mengetahui password anda termasuk admin dan developer. Website ini tidak pernah
                    menanyakan data penting pribadi anda seperti NIK, nomor KTP, NIP, NIS, NISN dan lain sebagainya sehingga anda tidak perlu
                    khawatir akan data pribadi anda.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fab fa-elementor fa-7x" style="color:rgb(188, 107, 255); margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>Banyak Fitur</b></h5>
                <p>
                    Disini ada berbagai fitur yang bisa anda nikmati. fitur-fitur tersebut antara lain yaitu
                    kelas, daftar siswa, presensi, mata pelajaran dan daftar nilai. untuk kelas, anda dapat menambahkan kelas sesuka
                    hati anda, mengubah kelas yang telah anda buat dan menghapusnya. Disini juga ada pembagian angkatan untuk memudahkan
                    anda dalam memilih kelas. untuk daftar siswa, anda juga dapat menambahkan siswa siapa saja yang ada di kelas tersebut.
                    untuk presensi, anda dapat menambahkan presensi sesuai siswa yang ada di kelas tersebut. Untuk nilai, anda dapat menambahkan
                    nilai untuk siswa yang ada di kelas tersebut dan di mata pelajaran (mapel) tersebut.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fas fa-users fa-7x" style="color:rgb(0, 255, 21); margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>Dapat Digunakan Siapapun</b></h5>
                <p>
                    Website ini dapat digunakan oleh semua orang tanpa terkecuali. Semua orang dapat menggunakan website ini
                    sesuai kebutuhan saja. Meskipun website ini diperuntukkan untuk guru atau tenaga pendidikan, tidak menutup
                    kemungkinan bahwa selain guru dapat menggunakan website ini. Hanya saja, selain guru harus menyesuaikan
                    sendiri. Misalkan manager kantor dapat bawahannya menggunakan fitur presensi, penjual dapat mencatat barang
                    dagangannya melalui fitur nilai, dan lain sebagainya.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fas fa-money-bill-wave fa-7x" style="color:rgb(235, 52, 52); margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>GRATIS</b></h5>
                <p>Disini anda dapat menikmati layanan ini secara gratis.</p>
            </div>
        </div>
        <br><br>
        <br>
    </div>
    <br>
    <div class="container-fluid" style="background-image: linear-gradient(to right,rgba(66, 116, 255,0.7),rgba(161, 10, 255,0.6)); border:4px solid; border-image: linear-gradient(to right,gold, lime) 30;">
        <br><br>
        <center>
            <h3 style="color: white;"><b>Panduan & Fitur</b></h3>
        </center>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#kelas">
                        <img class="card-img-top" src="/asets/fitur/kelas/kelas.png" alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Kelas</h5>
                            <p class="card-text">
                                Fitur kelas memungkinkan anda membuat kelas sendiri. Di dalam kelas tersebut terdapat berbagai
                                macam fitur untuk memanagement kelas anda. Selengkapnya bisa anda kllik card ini...
                            </p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="kelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Kelas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <center><img src="/asets/fitur/kelas/kelas.png" style="width:50vw;" loading="lazy"></center>
                                    <br><br>
                                    <p>
                                        Fitur kelas memungkinkan anda membuat kelas sendiri. Di dalam kelas tersebut terdapat berbagai
                                        macam fitur untuk memanagement kelas anda. Fitur tersebut misalnya anda dapat membuat kelas, lalu anda
                                        juga bisa mengubah informasi kelas tersebut, dan menghapus kelas tersebut. Jika anda membuat kelas, anda akan
                                        diwajibkan untuk mengisi angkatan dan angkatan inilah yang nantinya mempermudah pengelompokan kelas supaya lebih
                                        terstruktur kelas anda. Jadi anda tidak perlu akan bingung suatu kelas tersebut berasal dari angkatan berapa.
                                        <br>
                                        Untuk lebih jelas penggambarannya langsung saja kita ke panduan fitur kelas:
                                    </p>
                                    <br>
                                    <h5><b>Panduan Fitur Kelas</b></h5>
                                    <br>
                                    <p>
                                        <b>1. View Kelas</b>
                                        <br>
                                        Untuk pergi ke fitur kelas, anda dapat memilih menu sidebar <span style="background-color:lightgrey">Angkatan</span>. Selanjutnya, jika anda
                                        belum mempunyai kelas, maka tampilannya seperti berikut:
                                        <img src="/asets/fitur/kelas/kelas1.png" alt="" style="max-width:100%;" loading="lazy">
                                    </p>
                                    <p>
                                        <b>2. Tambah Kelas</b>
                                        <br>
                                        Setelah anda ke angkatan, selanjutnya anda bisa menambahkan kelas anda dengan cara klik tombil hijau <span style="background-color:lightgrey">Tambah Kelas</span>.
                                        Setelah anda klik maka akan muncul form seperti ini:
                                        <img src="/asets/fitur/kelas/kelas2.png" alt="" style="max-width:100%;" loading="lazy">
                                        <img src="/asets/fitur/kelas/kelas3.png" alt="" style="max-width:100%;" loading="lazy">
                                        Isikan form tersebut dan perlu di ingat, tanda <span style="color:red">*</span> yang ada di judul kolom menandakan
                                        kolom tersebut wajib di isi dan untuk <span class="text-muted">(Optional)</span> yang ada di judul kolom menandakan
                                        kolom tersebut boleh dikosongkan. Anda juga harus mengisi form tersebut sesuai validasi yang telah dituliskan di bawah
                                        kolom tersebut. Jika terjadi error, pastikan anda cek kembali isian formulir anda apakah sudah sesuai validasi atau tidak.
                                        Setelah anda mengisikan form, selanjutnya klik tombol <span style="background-color:lightgrey">Tambah Kelas</span> di bagian
                                        bawah form.
                                        Jika berhasil maka akan tampil angkatan sesuai kelas yang anda buat. Untuk melihat kelas anda klik tombol <span style="background-color:lightgrey">More</span>
                                        di kanan label angkatan seperti gambar di bawah ini:
                                        <img src="/asets/fitur/kelas/kelas4.png" alt="" style="max-width:100%;" loading="lazy">
                                    </p>
                                    <p>
                                        <b>3. Detail Kelas</b>
                                        <br>
                                        Untuk melihat informasi kelas yang telah anda buat, maka klik tombol <span style="background-color:lightgrey">Detail</span> di
                                        kelas yang anda pilih.
                                        Maka akan tampil seperti gambar ini:
                                        <img src="/asets/fitur/kelas/kelas5.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu masuk kelas, anda cukup klik tombol <span style="background-color:lightgrey">Masuk</span> pada kelas yang anda pilih.
                                        Setelah anda masuk, maka akan tampil seperti ini:
                                        <img src="/asets/fitur/kelas/kelas6.png" alt="" style="max-width:100%;" loading="lazy">
                                        Kemudian anda klik tombol biru <span style="background-color:lightgrey">Setting Kelas</span> maka akan muncul fitur untuk
                                        memanagement kelas anda seperti gambar ini:
                                        <img src="/asets/fitur/kelas/kelas7.png" alt="" style="max-width:100%;" loading="lazy">
                                    </p>
                                    <p>
                                        <b>4. Edit Informasi Kelas</b>
                                        <br>
                                        Anda dapat mengubah informasi kelas dengan cara klik menu card <span style="background-color:lightgrey">Detail Kelas</span>
                                        yang terdapat di Setting Kelas. Selanjutnya isikan form untuk mengubah informasi kelas anda seperti gambar dibawah ini:
                                        <img src="/asets/fitur/kelas/kelas8.png" alt="" style="max-width:100%;" loading="lazy">
                                        Perlu di ingat kembali bahwa pastikan mengisi sesuai dengan validasi yang telah tertulis dan perhatikan kolom apa saja yang wajib
                                        di isi (tidak boleh kosong).
                                    </p>
                                    <p>
                                        <b>5. Hapus Kelas</b>
                                        <br>
                                        Untuk menghapus kelas, anda pilih menu card <span style="background-color:lightgrey">Hapus Kelas</span> yang ada di Settings Kelas
                                        seperti gambar dibawah ini:
                                        <img src="/asets/fitur/kelas/kelas9.png" alt="" style="max-width:100%;" loading="lazy">
                                        Harap diperhatikan bahwa menghapus kelas dapat menghapus <i>semua</i> data yang ada di dalam kelas tersebut termasuk daftar siswa,
                                        presensi, mapel(Mata Pelajaran), dan nilai siswa yang ada di kelas tersebut.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#pubg">
                        <img class="card-img-top" src="/asets/fitur/siswa/siswa.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Siswa</h5>
                            <p class="card-text">
                                Di dalam fitur ini, anda dapat memanagement siswa yang ada di kelas yang anda pilih. Fitur siswa disini sangat penting
                                dimana daftar siswa di kelas yang anda pilih merupakan acuan untuk presensi dan menambahkan nilai. Selengkapnya bisa anda
                                klik card ini...
                            </p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="pubg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <center><img src="/asets/fitur/siswa/siswa.png" style="width:50vw;" loading="lazy"></center>
                                    <br><br>
                                    <p>
                                        Di dalam fitur ini, anda dapat memanagement siswa yang ada di kelas yang anda pilih. Fitur siswa disini sangat penting
                                        dimana daftar siswa di kelas yang anda pilih merupakan acuan untuk presensi dan menambahkan nilai.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#honkai">
                        <img class="card-img-top" src="/asets/fitur/presensi/presensi.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Presensi</h5>
                            <p class="card-text">Honkai Impact 3 atau adalah game free-to-play aksi permainan peran 3D mobile game yang dikembangkan oleh miHoYo. Merupakan seri ketiga dari...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="honkai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Presensi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <img src="beranda/honkai.jpg" style="width:100%;" loading="lazy">
                                    <br><br>
                                    <p>Honkai Impact 3 atau adalah game free-to-play aksi permainan peran 3D mobile game yang dikembangkan oleh miHoYo. Merupakan seri ketiga dari Seri Honkai dan kelanjutan dari Houkai Gakuen, menggunakan banyak karakter yang sama dari judul sebelumnya, dengan cerita baru yang terpisah. Game ini dikenal menggabungkan elemen-elemen dari berbagai genre, dari hack-and-slash, stimulasi sosial, bullet hell, platforming, shoot ‘em up, dan dungeon crawling, yang terdapat di dalam mode single player dan multiplayer.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#warpath">
                        <img class="card-img-top" src="/asets/fitur/mapel/mapel.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Mapel (Mata Pelajaran)</h5>
                            <p class="card-text">Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="warpath" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Mapel (Mata Pelajaran)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <img src="beranda/warpath.jpg" style="width:100%;" loading="lazy">
                                    <br><br>
                                    <p>Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang musuh, upgrade dan masih banyak lagi. game ini dimainkan secara daring (online) sehingga pemain bisa merasakan serunya berperang dan bersekutu dengan player lain. di game ini juga ada envent yang menarik dan juga bisa bekerja sama dengan player lain.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#warpath">
                        <img class="card-img-top" src="/asets/fitur/nilai/nilai.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Nilai</h5>
                            <p class="card-text">Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="warpath" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <img src="beranda/warpath.jpg" style="width:100%;">
                                    <br><br>
                                    <p>Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang musuh, upgrade dan masih banyak lagi. game ini dimainkan secara daring (online) sehingga pemain bisa merasakan serunya berperang dan bersekutu dengan player lain. di game ini juga ada envent yang menarik dan juga bisa bekerja sama dengan player lain.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#warpath">
                        <img class="card-img-top" src="/asets/fitur/cetak/cetak.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Cetak</h5>
                            <p class="card-text">Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="warpath" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cetak</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <img src="beranda/warpath.jpg" style="width:100%;">
                                    <br><br>
                                    <p>Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang musuh, upgrade dan masih banyak lagi. game ini dimainkan secara daring (online) sehingga pemain bisa merasakan serunya berperang dan bersekutu dengan player lain. di game ini juga ada envent yang menarik dan juga bisa bekerja sama dengan player lain.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <br><br>
    <div class="container">
        <center>
            <h3><b>Prtanyaan Umum</b></h3>
        </center>
        <br><br>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <h5 class="card-header" data-toggle="collapse" data-target="#apatrading">Apa itu trading? <i class="fas fa-chevron-down pl-2"></i></h5>
                    <div class="card-body collapse" id="apatrading">
                        <center><img src="beranda/ml.png" style="width:80%;"></center>
                        <br>
                        <div class="container" style="width:83%;">
                            <p class="card-text">Mobile Legends: Bang Bang adalah sebuah permainan peranti bergerak (Mobile) berjenis MOBA yang dikembangkan dan diterbitkan oleh Moonton.</p>
                            <a href="#" class="btn btn-primary">Lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <h5 class="card-header" data-toggle="collapse" data-target="#apainvest">Apa itu investasi? <i class="fas fa-chevron-down pl-2"></i></h5>
                    <div class="card-body collapse" id="apainvest">
                        <center><img src="beranda/pubg.jpg" style="width:80%;"></center>
                        <br>
                        <div class="container" style="width:83%;">
                            <p class="card-text">PlayerUnknown's Battlegrounds (sering disingkat PUBG) adalah sebuah permainan video dengan genre battle royale, di mana 100 orang sekaligus dapat bermain secara daring. Di dalam permainan ini pemain bisa bermain solo, tim 2 orang, dan tim 4 orang, serta bisa mengundang teman untuk bergabung ke dalam permainan sebagai tim.</p>
                            <a href="#" class="btn btn-primary">Lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <h5 class="card-header" data-toggle="collapse" data-target="#perbedaan">Apa perbedaan trading dan investasi? <i class="fas fa-chevron-down pl-2"></i></h5>
                    <div class="card-body collapse" id="perbedaan">
                        <center><img src="beranda/honkai.jpg" style="width:80%;"></center>
                        <br>
                        <div class="container" style="width:83%;">
                            <p class="card-text">Honkai Impact 3 atau adalah game free-to-play aksi permainan peran 3D mobile game yang dikembangkan oleh miHoYo. Merupakan seri ketiga dari Seri Honkai dan kelanjutan dari Houkai Gakuen, menggunakan banyak karakter yang sama dari judul sebelumnya, dengan cerita baru yang terpisah. Game ini dikenal menggabungkan elemen-elemen dari berbagai genre, dari hack-and-slash, stimulasi sosial, bullet hell, platforming, shoot ‘em up, dan dungeon crawling, yang terdapat di dalam mode single player dan multiplayer.</p>
                            <a href="#" class="btn btn-primary">Lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <h5 class="card-header" data-toggle="collapse" data-target="#resikotrading">Apa resiko trading? <i class="fas fa-chevron-down pl-2"></i></h5>
                    <div class="card-body collapse" id="resikotrading">
                        <center><img src="beranda/warpath.jpg" style="width:80%;"></center>
                        <br>
                        <div class="container" style="width:83%;">
                            <p class="card-text">Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang musuh, upgrade dan masih banyak lagi. game ini dimainkan secara daring (online) sehingga pemain bisa merasakan serunya berperang dan bersekutu dengan player lain. di game ini juga ada envent yang menarik dan juga bisa bekerja sama dengan player lain.</p>
                            <a href="#" class="btn btn-primary">Lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <h5 class="card-header" data-toggle="collapse" data-target="#resikoinvest">Apa resiko tnvestasi? <i class="fas fa-chevron-down pl-2"></i></h5>
                    <div class="card-body collapse" id="resikoinvest">
                        <center><img src="beranda/warpath.jpg" style="width:80%;"></center>
                        <br>
                        <div class="container" style="width:83%;">
                            <p class="card-text">Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang musuh, upgrade dan masih banyak lagi. game ini dimainkan secara daring (online) sehingga pemain bisa merasakan serunya berperang dan bersekutu dengan player lain. di game ini juga ada envent yang menarik dan juga bisa bekerja sama dengan player lain.</p>
                            <a href="#" class="btn btn-primary">Lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <h5 class="card-header" data-toggle="collapse" data-target="#tipstradinginvest">Bagaimana tips dan trik trading dan investasi? <i class="fas fa-chevron-down pl-2"></i></h5>
                    <div class="card-body collapse" id="tipstradinginvest">
                        <center><img src="beranda/warpath.jpg" style="width:80%;"></center>
                        <br>
                        <div class="container" style="width:83%;">
                            <p class="card-text">Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang musuh, upgrade dan masih banyak lagi. game ini dimainkan secara daring (online) sehingga pemain bisa merasakan serunya berperang dan bersekutu dengan player lain. di game ini juga ada envent yang menarik dan juga bisa bekerja sama dengan player lain.</p>
                            <a href="#" class="btn btn-primary">Lebih banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="container-fluid py-5" style="background-image: linear-gradient(to right,rgba(66, 116, 255,0.7),rgba(161, 10, 255,0.6)); border:4px solid; border-image: linear-gradient(to right,gold, lime) 30;">
        <center>
            <h3 style="color:white;"><b>Artikel Sehari-hari</b></h3>
        </center>
        <div class="container py-5 m-auto">
            <center>
                <h3 style="color:white;">Artikel Teratas</h3>
            </center>
            <div class="beritautama d-flex" style=" background-image:url(covid2.jpg); width:100%; height:450px; border-radius:30px; filter:brightness(60%);">
                <div class="container p-5" style="margin:auto 0px;">
                    <h4 style="color:white;"><b>Lawan Covid</b></h4>
                    <h5 style="color:white;">Ayo Lawan Covid-19 dan ucapkan goodbyee pada covid</h4s>
                        <br><br>
                        <img src="beranda/covid.jpg" alt="" style="width:60px; height:60px; border-radius:100%">
                        <a href="" id="akunberita">Muhammad Faris Shafwan</a>
                </div>
            </div>
            <br><br><br>
            <div class="contentberita m-auto">
                <center>
                    <h2 style="color:white;">Artikel Lainnya</h2>
                </center>
                <div class="row m-auto">
                    <div class="col-md-3 col-sm-4 m-auto py-3">
                        <div class="card" style="width: 100%; height:100%;">
                            <img class="card-img-top" src="beranda/covid2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-text" href="#">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 m-auto py-3">
                        <div class="card" style="width: 100%; height:100%;">
                            <img class="card-img-top" src="beranda/covid2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-text" href="#">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 m-auto py-3">
                        <div class="card" style="width: 100%; height:100%;">
                            <img class="card-img-top" src="beranda/covid2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-text" href="#">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 m-auto py-3">
                        <div class="card" style="width: 100%; height:100%;">
                            <img class="card-img-top" src="beranda/covid2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a class="card-text" href="#">Some quick example text to build on the card title and make up the bulk of the card's content.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer bg-dark py-5" style="margin-bottom:0; padding-bottom:0;">
        <div class="container py-2">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <center>
                        <h2 style="color:white;"><b>Arsip Kelas</b></h2>
                    </center>
                </div>
                <div class="col-md-9 col-sm-9 py-3">
                    <div class="list" style="color:white;">
                        <ul id="listfooter" class="d-flex" style="flex-wrap:wrap; font-size:12px;">
                            <li style="margin-bottom:10px; padding:15px; list-style:none;">
                                <b>Programing & Coding</b>
                                <ul style="padding-left:14px;">
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                            <li style="margin-bottom:10px; padding:15px; list-style:none;">
                                <b>Programing & Coding</b>
                                <ul style="padding-left:14px;">
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                            <li style="margin-bottom:10px; padding:15px; list-style:none;">
                                <b>Programing & Coding</b>
                                <ul style="padding-left:14px;">
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                            <li style="margin-bottom:10px; padding:15px; list-style:none;">
                                <b>Programing & Coding</b>
                                <ul style="padding-left:14px;">
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <center>
            <p style="color:white;">
                copyright 2020 - <?php echo date('Y'); ?>
                <br>
                Muhammad Faris Shafwan.
            </p>
        </center>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/root.js"></script>
</body>

</html>
