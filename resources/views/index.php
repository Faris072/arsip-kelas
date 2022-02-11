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
        <div class="container">
            <a class="navbar-brand pr-5" href="#" style="font-family: 'Fredericka the Great', cursive;">F-Info</a>
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
                <a class="nav-link btn btn-success py-1 ml-0" href="login.php">Login</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:100%">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="beranda/programer.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="beranda/trading.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="beranda/game.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="beranda/covid.jpg" alt="Fourth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 d-flex" style="background-color:black; color:white; text-align:right">
                <div class="container m-auto" style="width:85%; font-family: 'Roboto', sans-serif;">
                    <br><br>
                    <h4><b>Selamat Datang di F-Info</b></h4>
                    <h5>Temukan beragam informasi menarik mulai dari tips dan trik sampai edukasi.</h5>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <center>
            <h2><b>Programing & Coding</b></h2>
        </center>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fab fa-html5 fa-7x" style="color:orange; margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>HTML</b></h5>
                <p>Hypertext Markup Language (HTML) adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets (CSS) dan bahasa scripting seperti JavaScript dan VBScript.</p>
                <a href="pengenalanprograming.php" class="btn btn-primary">Pelajari Lebih Banyak</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fab fa-css3-alt fa-7x" style="color:blue; margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>CSS</b></h5>
                <p>Cascading Style Sheet (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.</p>
                <a href="pengenalanprograming.php" class="btn btn-primary">Pelajari Lebih Banyak</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fab fa-js-square fa-7x" style="color:gold; margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>JavaScript</b></h5>
                <p>JavaScript (disingkat JS) adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer (IE), Mozilla Firefox, Netscape dan Opera. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag SCRIPT. JavaScript merupakan salah satu teknologi inti World Wide Web selain HTML dan CSS. JavaScript membantu membuat halaman web interaktif dan merupakan bagian aplikasi web yang esensial.</p>
                <a href="pengenalanprograming.php" class="btn btn-primary">Pelajari Lebih Banyak</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fab fa-bootstrap fa-7x" style="color:rgb(188, 107, 255); margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>Bootstrap 4</b></h5>
                <p>Bootstrap adalah kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web. Kerangka kerja ini berisi templat desain berbasis HTML dan CSS untuk tipografi, formulir, tombol, navigasi, dan komponen antarmuka lainnya, serta juga ekstensi opsional JavaScript. Tidak seperti kebanyakan kerangka kerja web lainnya, kerangka kerja ini hanya fokus pada pengembangan front-end saja.</p>
                <a href="pengenalanprograming.php" class="btn btn-primary">Pelajari Lebih Banyak</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fab fa-php fa-7x" style="color:rgb(115, 17, 242); margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>PHP</b></h5>
                <p>PHP: Hypertext Preprocessor (sebelumnya disebut Personal Home Pages) adalah bahasa skrip yang dapat ditanamkan atau disisipkan ke dalam HTML. PHP banyak dipakai untuk memprogram situs web dinamis. PHP dapat digunakan untuk membangun sebuah CMS.</p>
                <a href="pengenalanprograming.php" class="btn btn-primary">Pelajari Lebih Banyak</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 d-flex">
                <center style="margin:auto;"><i class="fab fa-cuttlefish fa-7x" style="color:orange; margin:auto;"></i></center>
            </div>
            <div class="col-md-10">
                <h5><b>Pemrograman C</b></h5>
                <p>Bahasa pemrograman C merupakan salah satu bahasa pemrograman komputer. Dibuat pada tahun 1972 oleh Dennis Ritchie untuk Sistem Operasi Unix di Bell Telephone Laboratories.
                    Meskipun C dibuat untuk memprogram sistem dan jaringan komputer namun bahasa ini juga sering digunakan dalam mengembangkan software aplikasi. C juga banyak dipakai oleh berbagai jenis platform sistem operasi dan arsitektur komputer, bahkan terdapat beberepa compiler yang sangat populer telah tersedia. C secara luar biasa memengaruhi bahasa populer lainnya, terutama C++ yang merupakan extensi dari C.
                </p>
                <a href="pengenalanprograming.php" class="btn btn-primary">Pelajari Lebih Banyak</a>
            </div>
        </div>
        <br><br>
        <br>
    </div>
    <br>
    <div class="container-fluid" style="background-image: linear-gradient(to right,rgba(66, 116, 255,0.7),rgba(161, 10, 255,0.6)); border:4px solid; border-image: linear-gradient(to right,gold, lime) 30;">
        <br><br>
        <center>
            <h2 style="color: white;"><b>Tips & Trick Game</b></h2>
        </center>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="width: 20rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#ml">
                        <img class="card-img-top" src="beranda/ml.png" alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Mobile Legends</h5>
                            <p class="card-text">Mobile Legends: Bang Bang adalah sebuah permainan peranti bergerak (Mobile) berjenis MOBA yang dikembangkan dan diterbitkan oleh...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="ml" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Mobile Legends</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5">
                                    <img src="beranda/ml.png" style="width:100%;">
                                    <br><br>
                                    <p>Mobile Legends: Bang Bang adalah sebuah permainan peranti bergerak (Mobile) berjenis MOBA yang dikembangkan dan diterbitkan oleh Moonton, anak usaha dari ByteDance.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                    <a href="#" type="button" class="btn btn-primary"> Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="width: 20rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#pubg">
                        <img class="card-img-top" src="beranda/pubg.jpg" alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">PUBG Mobile</h5>
                            <p class="card-text">PlayerUnknown's Battlegrounds (sering disingkat PUBG) adalah sebuah permainan video dengan genre battle royale, di mana 100 orang...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="pubg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">PUBG Mobile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5">
                                    <img src="beranda/pubg.jpg" style="width:100%;">
                                    <br><br>
                                    <p>PlayerUnknown's Battlegrounds (sering disingkat PUBG) adalah sebuah permainan video dengan genre battle royale, di mana 100 orang sekaligus dapat bermain secara daring. Di dalam permainan ini pemain bisa bermain solo, tim 2 orang, dan tim 4 orang, serta bisa mengundang teman untuk bergabung ke dalam permainan sebagai tim.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                    <a href="#" type="button" class="btn btn-primary"> Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="width: 20rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#honkai">
                        <img class="card-img-top" src="beranda/honkai.jpg" alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Honkai Impact 3</h5>
                            <p class="card-text">Honkai Impact 3 atau adalah game free-to-play aksi permainan peran 3D mobile game yang dikembangkan oleh miHoYo. Merupakan seri ketiga dari...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="honkai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Honkai Impact 3</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5">
                                    <img src="beranda/honkai.jpg" style="width:100%;">
                                    <br><br>
                                    <p>Honkai Impact 3 atau adalah game free-to-play aksi permainan peran 3D mobile game yang dikembangkan oleh miHoYo. Merupakan seri ketiga dari Seri Honkai dan kelanjutan dari Houkai Gakuen, menggunakan banyak karakter yang sama dari judul sebelumnya, dengan cerita baru yang terpisah. Game ini dikenal menggabungkan elemen-elemen dari berbagai genre, dari hack-and-slash, stimulasi sosial, bullet hell, platforming, shoot ‘em up, dan dungeon crawling, yang terdapat di dalam mode single player dan multiplayer.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                    <a href="#" type="button" class="btn btn-primary"> Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5">
                    <div class="card m-auto" style="width: 20rem; height:100%; box-shadow: 0px 0px 20px 0px grey ;" data-toggle="modal" data-target="#warpath">
                        <img class="card-img-top" src="beranda/warpath.jpg" alt="Card image cap" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">Warpath</h5>
                            <p class="card-text">Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang...</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="warpath" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Warpath</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-5">
                                    <img src="beranda/warpath.jpg" style="width:100%;">
                                    <br><br>
                                    <p>Warpath adalah game yang bertemakan perang dimana pemain game dapat mengatur strategi, membuat pertahanan, menyerang musuh, upgrade dan masih banyak lagi. game ini dimainkan secara daring (online) sehingga pemain bisa merasakan serunya berperang dan bersekutu dengan player lain. di game ini juga ada envent yang menarik dan juga bisa bekerja sama dengan player lain.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                                    <a href="#" type="button" class="btn btn-primary"> Lihat Lebih Banyak</a>
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
            <h2><b>Trading & Investasi</b></h2>
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
            <h2 style="color:white;"><b>Artikel Sehari-hari</b></h2>
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
                <div class="col-md-1 col-sm-1">
                    <center>
                        <h2><b>F-Info</b></h2>
                    </center>
                </div>
                <div class="col-md-10 col-sm-10 py-3">
                    <div class="list" style="color:white;">
                        <ul id="listfooter">
                            <li>
                                <h6><b>Programing & Coding</b></h6>
                                <ul>
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                            <li>
                                <h6><b>Programing & Coding</b></h6>
                                <ul>
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                            <li>
                                <h6><b>Programing & Coding</b></h6>
                                <ul>
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                            <li>
                                <h6><b>Programing & Coding</b></h6>
                                <ul>
                                    <li>Pengenalan Programing</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1">
                    <center><a class="btn btn-primary" href="#">Login</a></center>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>