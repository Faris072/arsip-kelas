$('#ubahpresensi').on('click', function(){
    $.ajax({
        type: 'GET',
        url: '/ubahpresensi',
        beforesend: function(){

        },
        error: function (data, data1){
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('.set-presensi').html(data);
        },
    });
});
