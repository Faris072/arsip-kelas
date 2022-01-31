$('#close-ubahpresensi').on('click', function() {
    $.ajax({
        type: "GET",
        url: '/bodypresensi',
        beforesend: function(){

        },
        error: function(data, data1) {
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function(data){
            $('#tambah-presensi').css('display', 'block');
            $('.set-presensi').html(data);
        }
    });
});
