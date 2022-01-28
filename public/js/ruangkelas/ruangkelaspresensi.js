$('.tg-presensi').on('click', function(){
    $('.tg-presensi').removeClass('active');
    $(this).addClass('active');
    $.ajax({
        type: 'GET',
        url: '/bodypresensi',
        beforesend: function(){

        },
        error: function (data, data1){
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('.set-presensi').html(data);
        }
    });
});

$('#tambah-presensi').on('click', function() {
    $.ajax({
        type: "GET",
        url: '/tambahpresensi',
        beforesend: function(){

        },
        error: function(data, data1) {
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function(data){
            $('.set-presensi').html(data);
        }
    });
});
