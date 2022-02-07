$('.tg-presensi').on('click', function(){
    $('.tg-presensi').removeClass('active');
    $(this).addClass('active');
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
            $('.set-presensi').html(data);
        }
    });
});

$('#tambah-presensi').on('click', function() {
    $.ajax({
        type: "GET",
        url: '/presensi/create',
        beforesend: function(){

        },
        error: function(data, data1) {
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function(data){
            $('#tambah-presensi').css('display', 'none');
            $('.set-presensi').html(data);
        }
    });
});
