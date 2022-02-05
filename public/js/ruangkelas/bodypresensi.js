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
    let data = $(this).serialize();
    let url = $(this).attr('data-url');
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
            $('#tambah-presensi').css('display', 'block');
            $('#ruangkelaspresensi').html(data);
        },
    });
});

$('.close').on('click', function (){
    $('.modal-presensi').modal('hide');
});


