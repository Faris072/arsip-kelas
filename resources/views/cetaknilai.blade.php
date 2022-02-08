{{-- @dd($data) --}}
<!doctype html>
<html lang="id">
<head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/7b5d20839a.js" crossorigin="anonymous"></script>
    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Font Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <!-- Trix -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js" integrity="sha512-H8CbNdhcOBCt62S6eVGAUSiyNx5OGVEVrYIIVs0iIgurgD1+oTA9THTZ1tqxSE9yw9vzfilg83xgyxD467a28g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js" integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--CKEditor-->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <style>

    </style>
</head>
<body>

    <div class="container">
        <div class="editheader">
            <br>
            <center><h4><b>Edit Header</b></h4></center>
            <input type="text" id="textheader"></input>
        </div>
        <br>
        <div class="">
            <div class="ttd">
                <ul>
                    <form action="">
                    <li>
                        <input type="checkbox" id="ttd-kiri"> <label for="ttd-kiri"> Tanda Tangan Kiri</label>
                        <br>
                        <input type="text" id="fttd-kiri" style="display:none">
                    </li>
                    <li>
                        <input type="checkbox" id="ttd-kanan"> <label for="ttd-kanan"> Tanda Tangan Kanan</label>
                        <br>
                        <input type="text" id="fttd-kanan" style="display:none">
                    </li>
                    <li>
                        <input type="checkbox" id="ttd-tengah"> <label for="ttd-tengah"> Tanda Tangan Tengah</label>
                        <br>
                        <input type="text" id="fttd-tengah" style="display:none">
                    </li>
                </form>
                </ul>
            </div>
            {{-- <div class="add-kolom">
                <input type="checkbox" id="kolom"> <label for="ttd-tengah">Tambah Kolom</label>
                <br>
                <input type="text" id="form-kolom" style="display:none">
            </div> --}}
        </div>
        <br>
        <div class="aksi">
            <button id="editheader" class="btn btn-primary form-control">Terapkan</button>
            <br><br>
            <button id="cetak" class="btn btn-success form-control">Cetak</button>
        </div>
        <br>
        <br>
        <br>
        <div class="header">
            <center><div id="header"></div></center>
        </div>
        <div class="isi">
            <table border="1px" width="100%" cellpadding="10px">
                <tr style="background-color:yellow;">
                    <th width="15%"><b>No. Absen</b></th>
                    <th><b>Nama</b></th>
                    <th width="20%"><b>Gender</b></th>
                    <th width="30%"><b>Nilai</b></th>
                    <th class="tambah-kolom" id="kol" style="background-color:yellow"></th>
                </tr>
                    @foreach ($data as $d)
                    <tr>
                        {{-- <td>{{ $d->siswa }}</td> --}}
                        {{-- <td>{{ $d->siswa }}</td> --}}
                        <td>{{ $d->siswa }}</td>
                        <td>{{ $d->nilai }}</td>
                        <td class="tambah-kolom" style=""></td>
                    </tr>
                    @endforeach
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="tanda-tangan d-flex my-5" style="justify-content:space-between;">
            <div class="tanda-tangan-kiri">
                <p><b id="ttdki"></b></p>
            </div>
            <div class="tanda-tangan-kiri">
                <p><b id="ttdka"></b></p>
            </div>
        </div>
        <br>
        <div class="tanda-tangan-tengah d-flex">
            <div class="tanda-tangan2 mt-5 d-flex" style="margin:auto">
                <p><b id="ttdt"></b></p>
            </div>
        </div>
    </div>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>CKEDITOR.replace( 'textheader' );</script>
    <script>
        $('.tambah-kolom').css('display', 'none');

        $('#ttd-kiri').on('click',function(){
            $('#fttd-kiri').toggle();
        });

        $('#ttd-kanan').on('click',function(){
            $('#fttd-kanan').toggle();
        });

        $('#ttd-tengah').on('click',function(){
            $('#fttd-tengah').toggle();
        });

        $('#kolom').on('click',function(){
            $('#form-kolom').toggle();
        });




        $('#editheader').on('click',function(){
            let isi = CKEDITOR.instances['textheader'].getData();//untuk mengambil val dari ckeditor
            let ttdki = $('#fttd-kiri').val();
            let ttdka = $('#fttd-kanan').val();
            let ttdt = $('#fttd-tengah').val();
            let kol = $('#form-kolom').val();
            $('#header').html(isi);

            if($('#fttd-kiri').css('display') == 'none'){
                $('#ttdki').html('');
            }
            else{
                $('#ttdki').html(ttdki);
            }

            if($('#fttd-kanan').css('display') == 'none'){
                $('#ttdka').html('');
            }
            else{
                $('#ttdka').html(ttdka);
            }

            if($('#fttd-tengah').css('display') == 'none'){
                $('#ttdt').html('');
            }
            else{
                $('#ttdt').html(ttdt);
            }

            if($('#form-kolom').css('display') == 'none'){
                $('.tambah-kolom').html('');
                $('.tambah-kolom').css('display', 'none');
            }
            else{
                $('.tambah-kolom').css('display', 'block');
                $('#kol').html(kol);
            }
        });

        $('#cetak').on('click',function(){
            $('.editheader').css('display', 'none');
            $('.ttd').css('display', 'none');
            $('.aksi').css('display', 'none');
            print();
        });
    </script>
</body>
</html>
