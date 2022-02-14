$('#close-editjadwal').on('click', function(e){
    e.preventDefault();
    let url = '/jadwal';
    $.ajax({
        $method: 'get',
        url: url,
        beforeSend: function(){},
        error: function(){},
        success: function(data){
            $('#content').html(data);
        }
    });
});

$('#form-edit-jadwal').on('submit', function(e){
    e.preventDefault();
    swal("Mohon Tunggu", "Sedang diproses...", "info");
    let data = $(this).serialize();
    let url = $(this).attr('data-url');
    $.ajax({
        method: 'post',
        url: url,
        data: data,
        beforeSend: function(){},
        error: function(){
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
        },
        success: function(data){
            swal("Berhasil!", "Berhasil Mengubah Jadwal", "success");
            $('#content').html(data);
        }
    });
});
