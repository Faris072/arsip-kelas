$('#ubahpresensi').on('click', function(){
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforesend: function(){

        },
        error: function (data, data1){
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#tambah-presensi').css('display', 'none');
            $('.set-presensi').html(data);
        },
    });
});

$('#form-hapus-presensi').on('submit', function(e){
    e.preventDefault();
    let konfirmasi = confirm('Apakah anda yakin akan menghapus presensi ini?');
    if(konfirmasi == true){
        //
    }
    else{
        ajaxStop();
    }
    swal("Sedang diproses...", {icon: "warning",});
    let data = $(this).serialize();
    let url = $(this).attr('data-url');
    $.ajax({
        method:"POST",
        url: url,
        data: data,
        beforesend: function(){

        },
        error: function (data, data1){
            swal("Terjadi Kesalahan", {icon: "danger",});
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            swal("Presensi berhasil dihapus", {icon: "success",});
            $('#tambah-presensi').css('display', 'block');
            $('#ruangkelaspresensi').html(data);
        },
    });
});

$('.close').on('click', function (){
    $('.modal-presensi').modal('hide');
});

$('.form-kehadiran').on('submit', function(e){
    e.preventDefault();
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method:"POST",
        url: url,
        data: data,
        beforesend: function(){

        },
        error: function (data, data1){
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#tambah-presensi').css('display', 'none');
            $('.set-presensi').html(data);
        },
    });
});
