$('.edit-siswa').on('click', function(){
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforesend: function(){

        },
        error: function (data, data1){
            $('#modal-setsiswa').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#tambah-siswa').css('display', 'none');
            $('#modal-setsiswa').html(data);
        }
    });
});

// $('#btn-hapus-siswa').on('click', function(){
//     swal({
//         title: "Apakah anda yakin akan menghapus siswa ini?",
//         text: "Data akan dihapus permanen!",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//     });
//     if (willDelete) {
//         $('#form-delete-siswa').submit();
//     }
// });


$('.form-delete-siswa').on('submit', function(e){
    e.preventDefault();
    swal("Sedang diproses...", {icon: "warning",});
    let x = confirm('Apakah anda yakin menghapus siswa ini?');
    if(x == true){
        //
    }
    else{
        ajaxStop();
    }
    swal("Sedang diproses...", {icon: "warning",});
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    console.log(data);
    $.ajax({
        method:'post',
        url: url,
        data: data,
        beforesend: function(){
            swal("Sedang diproses...", {icon: "warning",});
        },
        error: function (data, data1){
            $('#modal-setsiswa').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            swal("Siswa Berhasil Dihapus!", {icon: "success",});
            $('#tambah-siswa').css('display', 'block');
            $('#modal-setsiswa').html(data);
        }
    });
});

//close modal hapus siswa
$('.closed').on('click', function (){
    $('.modal-hapus-siswa').modal('hide');
});

$('.close').on('click', function (){
    $('.modal-hapus-siswa').modal('hide');
});


