$('#close-tambahpresensi').on('click', function() {
    $.ajax({
        type: "GET",
        url: '/presensi',
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

$('#form-tambah-presensi').on('submit', function(e){
    e.preventDefault();
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method: "POST",
        url: url,
        data: data,
        beforeSend: function(){

        },
        error: function(data, data1) {
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function(data){
            $('#ruangkelaspresensi').html(data);
        }
    });
});
