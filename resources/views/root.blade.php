<!doctype html>
<html lang="id">

<head>
    <title>Arsip Kelas</title>

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
    {{-- Adsense --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2121760861721927" crossorigin="anonymous"></script>

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

        .dropdown-item {
            color:white;
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
            <ul class="navbar-nav mr-5">
                <li class="nav-item login active p-1">
                    <a class="nav-link nav-login" href="#" >Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item welcome p-1">
                    <a class="nav-link nav-welcome" href="#" >Welcome<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item adventages p-1">
                    <a class="nav-link nav-adventages" href="#">Advantages<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item features p-1">
                    <a class="nav-link nav-features" href="#">Features & Guide<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item questions p-1">
                    <a class="nav-link nav-questions" href="#">General Questions<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item about p-1">
                    <a class="nav-link nav-about" href="#">About<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item p-1 dropdown navdropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other Web
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Personal Web</a>
                        <a class="dropdown-item" href="#">My Profil</a>
                        <a class="dropdown-item" href="#">Blog</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">Public Web</a>
                        <a class="dropdown-item" href="#">Arsipkelas</a>
                    </div>
                </li>
                <li class="nav-item p-1 dropdown navdropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact
                    </a>
                    <div class="dropdown-menu bg-dark" style="color:white;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://wa.wizard.id/1d1439" target="_blank">Whatsapp</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" target="_blank" href="mailto:arsipkelas.mail@gmail.com">Email</a>
                    </div>
                </li>
            </ul>
            <div class="btn-register ml-5 mx-auto">
                <a class="nav-link btn btn-primary py-1 ml-0" href="/auth/create">Register</a>
            </div>
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
                        @if (session()->get('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Email atau password anda salah!</strong>
                            <br>
                            Jika anda belum mempunyai akun, silahkan register <a href="/auth/create" target="_blank">di sini.</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
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
    <div class="container element-welcome">
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
    <div class="container element-adventages">
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
                <p>Disini anda dapat menikmati layanan ini secara gratis. Ayo segera bergabung mumpung masih gratis!</p>
            </div>
        </div>
        <br><br>
        <br>
    </div>
    <br>
    <div class="container-fluid element-features" style="background-image: linear-gradient(to right,rgba(66, 116, 255,0.7),rgba(161, 10, 255,0.6)); border:4px solid; border-image: linear-gradient(to right,gold, lime) 30;">
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
                                        <br>
                                        Oke langsung saja kita ke panduan fitur siswa:
                                    </p>
                                    <br>
                                    <h5><b>Panduan Fitur Siswa</b></h5>
                                    <p>
                                        <b>1. Tambah Siswa</b>
                                        <br>
                                        Untuk menambahkan siswa, klik <span style="background-color:lightgrey">Setting Kelas</span> sampai muncul menu card.
                                        Selanjutnya klik <span style="background-color:lightgrey">Siswa</span> pada menu card Setting Kelas seperti gambar dibawah ini:
                                        <img src="/asets/fitur/siswa/siswa1.png" alt="" style="max-width:100%;" loading="lazy">
                                        Selanjutnya, anda klik tombol hijau di bagian bawah yang bertuliskan <span style="background-color:lightgrey">Tambah siswa</span>.
                                        Maka akan muncul form seperti gambar ini:
                                        <img src="/asets/fitur/siswa/siswa2.png" alt="" style="max-width:100%;" loading="lazy">
                                        Untuk membatalkan tambah siswa bisa klik tombol X di samping judul Tambah Siswa.
                                        jika anda ingin menambahkan siswa, maka isikan form dan ingat kembali bahwa tanda <span style="color:red;">*</span> berarti
                                        itu adalah kolom yang wajib di isi sedangkan <span class="text-muted">(Optional)</span> adalah kolom yang boleh dikosongkan.
                                        Dan perlu memperhatikan untuk mengisi sesuai dengan validasi yang telah tertuli di bawah kolom seperti gambar di bawah:
                                        <img src="/asets/fitur/siswa/siswa3.png" alt="" style="max-width:100%;" loading="lazy">
                                        <img src="/asets/fitur/siswa/siswa4.png" alt="" style="max-width:100%;" loading="lazy">
                                        Setelah kolom di isi maka klik tambah siswa dan tunggu sampai proses berhasil.
                                    </p>
                                    <p>
                                        <b>2. Edit dan Hapus Siswa</b>
                                        <br>
                                        Setelah berhasil menambahkan siswa, maka akan tampil gambar seperti di bawah ini:
                                        <img src="/asets/fitur/siswa/siswa5.png" alt="" style="max-width:100%;" loading="lazy">
                                        Untuk mengedit data per siswa, anda klik tombol kuning edit dan untuk menghapus siswa anda perlu
                                        klik hapus permanen.
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
                            <p class="card-text">
                                Fitur Presensi memungkinkan anda untuk membuat suatu presensi dimana siswa yang akan anda presensi
                                sesuai dengan daftar siswa yang sudah ada di fitur siswa. Presensi disini sangat mudah. Selengkapnya dapat anda klik card ini...
                            </p>
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
                                    <center><img src="/asets/fitur/presensi/presensi.png" style="width:50vw;" loading="lazy"></center>
                                    <br><br>
                                    <p>
                                        Fitur Presensi memungkinkan anda untuk membuat suatu presensi dimana siswa yang akan anda presensi
                                        sesuai dengan daftar siswa yang sudah ada di fitur siswa. Presensi disini sangat mudah. anda tinggal
                                        membuat presensi dengan tanggal dan nama presensi yang dibutuhkan lalu anda hanya tinggal pilih kehadiran
                                        siswa dengan mengklik pilihan kehadiran.
                                        <br>
                                        Untuk lebih jelasnya langsung saja kita ke Panduan Fitur Presensi:
                                    </p>
                                    <br>
                                    <h5><b>Panduan Fitur Presensi</b></h5>
                                    <p>
                                        <b>1. Tambah Presensi</b>
                                        <br>
                                        Untuk tambah presensi, anda klik tombol <span style="background-color:lightgrey">Setting Kelas</span> sampai
                                        muncul menu card. Selanutnya klik tombol hijau <span style="background-color:lightgrey">Tambah Presensi</span>
                                        seperti gambah dibawah:
                                        <img src="/asets/fitur/presensi/presensi1.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu anda isikan form dan perlu di perhatikan kolom mana yang wajib di isi serta perhatikan pula aturan validasi yang
                                        tertulis di bawah kolom seperti gambar ini:
                                        <img src="/asets/fitur/presensi/presensi2.png" alt="" style="max-width:100%;" loading="lazy">
                                        Jika sudah maka klik tombol <span style="background-color:lightgrey">Tambah Presensi</span> yang ada di bawah form.
                                    </p>
                                    <p>
                                        <b>2. Ubah Detail Presensi</b>
                                        <br>
                                        Untuk mengubah detail presensi, anda pilih presensi yang akan anda ubah di tombol bagian <span style="background-color:lightgrey">Tanggal Presensi</span>
                                        <img src="/asets/fitur/presensi/presensi3.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu klik tombol <span style="background-color:lightgrey">Ubah Presensi</span> dan isi form tersebut.
                                    </p>
                                    <p>
                                        <b>3. Mengisi Kehadiran Siswa</b>
                                        <br>
                                        Untuk mengisi kehadiran siswa anda hanya perlu klik tombol <span style="background-color:lightgrey">Tambah</span> di kolom aksi per siswa seperti gambar ini:
                                        <img src="/asets/fitur/presensi/presensi4.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu anda pilih kehadiran siswa.
                                    </p>
                                    <p>
                                        <b>4. Mengubah Kehadiran Siswa</b>
                                        <br>
                                        Mengubah kehadiran siswa sama seperti mengisi kehadiran siswa. Anda hanya perlu klik tombol <span style="background-color:lightgrey">Ubah</span> seperti gambar:
                                        <img src="/asets/fitur/presensi/presensi5.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu silahkan anda pilih kehadiran siswa tersebut.
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
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#warpath">
                        <img class="card-img-top" src="/asets/fitur/mapel/mapel.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Mapel (Mata Pelajaran)</h5>
                            <p class="card-text">
                                Mapel adalah fitur untuk mengelompokkan nilai berdasarkan mata pelajaran (mapel) tertentu. Misalkan anda ingin menilai siswa kelas tertentu sesuai dengan mata pelajaran
                                tertentu dan bab tertentu. Anda dapat mengguakan mapel untuk menilai siswa tersebut. Untuk lebih lengkapnya anda bisa klik card ini...
                            </p>
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
                                    <center><img src="/asets/fitur/mapel/mapel.png" style="width:50vw;" loading="lazy"></center>
                                    <br><br>
                                    <p>
                                        Mapel adalah fitur untuk mengelompokkan nilai berdasarkan mata pelajaran (mapel) tertentu. Misalkan anda ingin menilai siswa kelas tertentu sesuai dengan mata pelajaran
                                        tertentu dan bab tertentu. Anda dapat mengguakan mapel untuk menilai siswa tersebut.
                                        <br>
                                        Untuk lebih jelasnya kita langsung ke Panduan Fitur Mapel.
                                    </p>
                                    <br>
                                    <h5><b>Panduan Fitur Mapel</b></h5>
                                    <p>
                                        <b>Membuat Mapel</b>
                                        <br>
                                        Langkah pertama utnuk membuat mapel adalah dengan masuk di kelas yang anda ingin tambahkan mapel. Lalu anda klik tobol <span style="background-color:lightgrey">Setting Kelas</span>,
                                        Maka akan muncul pengaturan kelas seperti gambar ini:
                                        <img src="/asets/fitur/mapel/mapel1.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu anda pilih <span style="background-color:lightgrey">Tambah Mapel</span> dan anda isikan form sesuai dengan validasi yang diminta.
                                        <img src="/asets/fitur/mapel/mapel2.png" alt="" style="max-width:100%;" loading="lazy">
                                        <img src="/asets/fitur/mapel/mapel3.png" alt="" style="max-width:100%;" loading="lazy">
                                        Setelah anda isikan maka akan muncul card mapel seperti gambar ini:
                                        <img src="/asets/fitur/mapel/mapel4.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu anda bisa masuk ke mapel tersebut kemudian anda bisa mengatur mapel tersebut dengan klik <span style="background-color:lightgrey">bagian kelas / nama mapel / nilai mapel</span>.
                                        <img src="/asets/fitur/mapel/mapel6.png" alt="" style="max-width:100%;" loading="lazy">
                                        Maka tampilannya akan seperti ini:
                                        <img src="/asets/fitur/mapel/mapel7.png" alt="" style="max-width:100%;" loading="lazy">

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
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#nilai">
                        <img class="card-img-top" src="/asets/fitur/nilai/nilai.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Nilai</h5>
                            <p class="card-text">
                                Fitur nilai digunakan utnuk memberi nilai untuk siswa yang ada di kelas anda. Anda bissa meambahkan nilai berdasarkan mapel yang anda pilih di kelas tersebut.
                                Untuk lebih lengkapnya anda bisa klik card ini...
                            </p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="nilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <center><img src="/asets/fitur/nilai/nilai.png" style="width:50vw;" loading="lazy"></center>
                                    <br><br>
                                    <p>
                                        Fitur nilai digunakan utnuk memberi nilai untuk siswa yang ada di kelas anda. Anda bissa meambahkan nilai berdasarkan mapel yang anda pilih di kelas tersebut.
                                        <br>
                                        Untuk lebih jelasnya langsung ke Panduan Fitur Nilai.
                                    </p>
                                    <br>
                                    <h5><b>Panduan Fitur Nilai</b></h5>
                                    <p>
                                        <h5>Menambahkan Nilai dan Mengubah Nilai</h5>
                                        <br>
                                        Cara menambahkan nilai adalah dengan masuk di mapel yang ingin anda berikan nilai. Kemudian anda akan ditampilkan daftar siswa yang ada di kelas anda seperti berikut:
                                        <img src="/asets/fitur/nilai/nilai1.png" alt="" style="max-width:100%;" loading="lazy">
                                        Untuk menambahkan nilai, anda dapat klik dropdown <span style="background-color:lightgrey">Tambah</span> yang ada di samping data siswa yang akan anda beri nilai.
                                        Lalu anda masukkan nilai yang ada di kolom input tersebut seperti gambar ini:
                                        <img src="/asets/fitur/nilai/nilai2.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu anda klik tombol tambah.
                                        <br>
                                        Jika anda ingin mengubah nilai yang telah anda isikan, maka anda klik dropdown edit yang ada di samping nilai siswa sama seperti sebelum anda menambahkan nilai. Selengkapnya
                                        <img src="/asets/fitur/nilai/nilai3.png" alt="" style="max-width:100%;" loading="lazy">
                                        Lalu ubah nilainya yang ada di kolom input nilai.
                                        <img src="/asets/fitur/nilai/nilai4.png" alt="" style="max-width:100%;" loading="lazy">
                                        Setelah itu anda klik tombol ubah.
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
                    <div class="card m-auto" style="max-width: 25rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#cetak">
                        <img class="card-img-top" src="/asets/fitur/cetak/cetak.png" alt="Card image cap" style="height:200px;" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Cetak</h5>
                            <p class="card-text">
                                Fitur cetak memungkinkan adnda mencetak nilai siswa dari suatu mapel anda. Disana terdapat beberapa tools untuk membantu anda dalam
                                membuat dokumen cetak. Anda juga dapat menyimpan cetakan anda dalam bentuk PDF. Untuk panduannya, anda dapat klik card ini...
                            </p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cetak</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5" style="height:72vh; overflow:auto;">
                                    <center><img src="/asets/fitur/cetak/cetak.png" style="width:50vw;" loading="lazy"></center>
                                    <br><br>
                                    <p>
                                        Fitur cetak memungkinkan adnda mencetak nilai siswa dari suatu mapel anda. Disana terdapat beberapa tools untuk membantu anda dalam
                                        membuat dokumen cetak. Anda juga dapat menyimpan cetakan anda dalam bentuk PDF.
                                        <br>
                                        Untuk panduannya, silahkan baca panduan di bawah ini:
                                    </p>
                                    <br>
                                    <h5><b>Cara Mencetak Nilai</b></h5>
                                    <p>
                                        Pertama anda masuk ke mapel. Kemudian di samping kanan atas dari tabel ada tombol <span style="background-color:lightgrey">Cetak</span>, klik tombol tersebut.
                                        <img src="/asets/fitur/cetak/cetak1.png" alt="" style="max-width:100%;" loading="lazy">
                                        <br>
                                        setelah anda klik kemudian anda akan ditampilkan tools dan daftar nilai. Untuk tools <span style="background-color:lightgrey">Edit Header</span> digunakan
                                        untuk membuat header pada dokumen cetak anda seperti nama dinas, nama sekolah, nama kelas dan lain sebagainya.
                                        Lalu dibawah edit header terdapat checkbox tanda tangan yang berfungsi untuk menambahkan tanda tangan di dokumen anda.
                                        Anda dapat memilih letak tanda tangan dengan mencentang checkbox tersebut lalu setelah anda centang pasti akan keluar inputan.
                                        Inputan itu sebagai nama siapa saja yang akan menandatangani dokumen tersebut.
                                        <br>
                                        Setelah anda selesai menggunakan tools tersebut, untuk menerapkannya anda klik tombol <span style="background-color:lightgrey">Terapkan</span> untuk
                                        melihat hasil edit header atau tanda tangan anda.
                                        <img src="/asets/fitur/cetak/cetak2.png" alt="" style="max-width:100%;" loading="lazy">
                                        <img src="/asets/fitur/cetak/cetak3.png" alt="" style="max-width:100%;" loading="lazy">
                                        <br>
                                        Ketika sudah dirasa cukup dan anda ingin mencetak dokumen tersebut, maka klik tombol <span style="background-color:lightgrey">Cetak</span>
                                        <img src="/asets/fitur/cetak/cetak4.png" alt="" style="max-width:100%;" loading="lazy">
                                        Jika anda menggunakan PC atau laptop dan hasilnya tidak berwarna seperti gambar dibawah,
                                        <img src="/asets/fitur/cetak/cetak5.png" alt="" style="max-width:100%;" loading="lazy">
                                        Maka anda klik checkbox <span style="background-color:lightgrey">Grafis Latar Belakang</span> maka akan muncul warna tersebut.
                                        <img src="/asets/fitur/cetak/cetak6.png" alt="" style="max-width:100%;" loading="lazy">
                                        <br>
                                        Jika sudah, anda dapat mencetaknya atau anda simpan sebagai PDF.
                                    </p>
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
    <div class="container element-questions">
        <center>
            <h3><b>Pertanyaan Umum</b></h3>
        </center>
        <br><br>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <div class="header d-flex card-header" data-toggle="collapse" data-target="#lupasandi" style="justify-content:space-between;">
                        <div class="judul">
                            <h5>Bagaimana jika saya lupa kata sandi?</h5>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chevron-down pl-2"></i>
                        </div>
                    </div>
                    <div class="card-body collapse" id="lupasandi">
                        <div class="container">
                            <p class="card-text">
                                Mohon maaf atas ketidaknyamanannya untuk sementara fitur ubah password otomatis belum tersedia. Mohon untuk menunggu update fitur reset sandi otomatis menggunakan email pada update berikutnya.
                                Untuk sementara, anda dapat menghubungi call center melalui email atau nomor whatsapp yang tersedia di bawah ini:
                            </p>
                            <div class="button-chat">
                                <a href="https://wa.wizard.id/1d1439" target="_blank" class="btn btn-success mr-2">Whatsapp</a>
                                <a href="mailto:arsipkelas.mail@gmail.com" class="btn btn-info">Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
            <div class="list">
                <div class="card">
                    <div class="header d-flex card-header" data-toggle="collapse" data-target="#apainvest" style="justify-content:space-between;">
                        <div class="judul">
                            <h5>Bagaimana cara merubah kata sandi?</h5>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chevron-down pl-2"></i>
                        </div>
                    </div>
                    <div class="card-body collapse" id="apainvest">
                        <div class="container">
                            <p class="card-text">
                                Jika anda ingin mengubah kata sandi dan anda tidak lupa dengan kata sandi anda, maka anda dapat mengikuti langkah-langkah
                                berikut ini:
                                <ul>
                                    <li>Masuk ke menu <b>Profil.</b></li>
                                    <li>Klik tombol <b>Setting Profil</b> pada bagian atas kiri.</li>
                                    <li>Selanjutnya anda scroll pada bagian paling bawah dan akan ada tombol <b>Ubah Password</b>. Klik tombol tersebut.</li>
                                    <li>Masukkan kata sandi lama anda. Lalu klik tombol <b>Submit</b></li>
                                    <li>
                                        Masukkan kata sandi baru anda pada kolom input tersebut. Pastikan kata sandi anda kuat (misalnya terdapat 1 huruf kapital dan terdapat
                                        huruf karakter simbol dan lebih dari 7 karakter). Lalu jika sudah maka klik tombol <b>Submit</b>.
                                    </li>
                                    <li>Password anda berhasil diubah!</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="container-fluid py-5 element-about" style="color:white; background-image: linear-gradient(to right,rgba(66, 116, 255,0.7),rgba(161, 10, 255,0.6)); border:4px solid; border-image: linear-gradient(to right,gold, lime) 30;">
        <center>
            <h3 style="color:white;"><b>About</b></h3>
        </center>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-7 p-4 ml-2 my-2" style="max-width:100%; background-color:rgba(255, 255, 255,0.4); border-radius:10px; color:rgb(255, 255, 255);">
                    <img src="/asets/faris.jpg" alt="" style="width:70px; border-radius:100%;">
                    <br>
                    <b>Muhammad Faris Shafwan</b>
                    <br><br>
                    <p>
                        Halo, Selamat datang di Arsip Kelas! Perkenalkan nama saya Muhammad Faris Shafwan. Saya adalah developer sekaligus owner dari website ini. Saat ini, saya
                        adalah mahasiswa dari Politeknik Elektronika Negeri Surabaya (PENS).
                    </p>
                    <p>
                        Saya ucapkan terimakasih atas dukungan dari anda untuk menggunakan
                        aplikasi website ini. Saya harap anda puas dengan fitur dari website ini dan semoga website ini dapat memberikan
                        manfaat untuk mempermudah pekerjaan anda. Saran dan masukan anda akan sangat bermanfaat untuk mengembangkan website ini menjadi lebih baik lagi.
                    </p>
                </div>
                <div class="col-md-4 p-4 ml-5 my-2" style="max-width:100%; background-color:rgba(0, 0, 0,0.2); border-radius:10px;">
                    <img src="/asets/habibie.jpg" alt="" style="width:70px; height:70px; object-fit:cover; object-position: right; border-radius:50%;">
                    <br>
                    <b>B.J. Habibie</b>
                    <br><br>
                    "Di manapun engkau berada selalulah menjadi yang terbaik dan berikan yang terbaik dari yang bisa kita berikan".
                    <br><br>
                    "Kesempurnaan tidak datang dengan sendirinya. Kesempurnaan harus diupayakan. Kesempurnaan harus dinilai. Proses dan hasil pekerjaan harus diawasi".
                    <br><br>
                    "Salah satu kunci kebahagiaan adalah gunakan uangmu untuk pengalaman, bukan gunakan uangmu untuk keinginan".
                </div>
                <div class="col-12 p-4 my-3" style="border:5px double white; border-radius:10px; font-size:50px;">
                    <center><b>Terima Kasih!</b></center>
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
                            <li style="margin-bottom:10px; padding-left:35px; padding-right:35px; list-style:none;">
                                <b>This Web</b>
                                <ul style="padding-left:14px;">
                                    <li><a href="#" class="nav-login" style="color:white;">Login</a></li>
                                    <li><a href="#" class="nav-welcome" style="color:white;">Welcome</a></li>
                                    <li><a href="#" class="nav-adventages" style="color:white;">Adventages</a></li>
                                    <li><a href="#" class="nav-features" style="color:white;">Features & Guide</a></li>
                                    <li><a href="#" class="nav-questions" style="color:white;">General Questions</a></li>
                                    <li><a href="#" class="nav-about" style="color:white;">About</a></li>
                                </ul>
                            </li>
                            <li style="margin-bottom:10px; padding-left:35px; padding-right:35px; list-style:none;">
                                <b>Other Web</b>
                                <ul style="padding-left:14px;">
                                    <li><a href="#" style="color:white;">My Profile</a></li>
                                    <li><a href="#" style="color:white;">Blog</a></li>
                                    <li><a href="#" style="color:white;">Arsipkelas</a></li>
                                </ul>
                            </li>
                            <li style="margin-bottom:10px; padding-left:35px; padding-right:35px; list-style:none;">
                                <b>Contact</b>
                                <ul style="padding-left:14px;">
                                    <li><a href="https://wa.wizard.id/1d1439" target="_blank" style="color:white;">Whatsapp</a></li>
                                    <li><a href="mailto:arsipkelas.mail@gmail.com" style="color:white;">Email</a></li>
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
                copyright <i class="fas fa-copyright"></i> 2022 - <?php echo date('Y'); ?>
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
