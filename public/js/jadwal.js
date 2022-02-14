function klikhome(){
    $('.sidebar-menu').css('background-color', 'rgba(255,255,255,0)');
    $('.sidebar-menu:eq(0)').css({
        'background-color': 'rgba(255,255,255,0.5)',
        'width': '90%;',
        'margin': 'auto'
    });
}

$('.path').on('click', function (){
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display','block');
        },
        success: function (data) {
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
    });
});

$('#form-tambah-jadwal').on('submit', function(e){
    e.preventDefault();
    swal("Mohon Tunggu", "Sedang diproses...", "info");
    let data = $(this).serialize();
    let url = '/jadwal';
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        beforeSend: function(){},
        error: function (){
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
        },
        success: function (data) {
            swal("Berhasil", "Berhasil Menambahkan Jadwal", "success");
            $('#content').html(data);
        }
    });
});

$('.form-hapus-jadwal').on('submit', function(e){
    e.preventDefault();
    let konf = confirm('Yakin ingin menghapus jadwal ini?');
    if(konf == true){
        //
    }
    else{
        ajaxStop();
    }
    swal("Mohon Tunggu", "Sedang diproses...", "info");
    let data = $(this).serialize();
    let url = $(this).attr('data-url');
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        beforeSend: function(){},
        error: function (){
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
        },
        success: function (data) {
            swal("Berhasil", "Berhasil Menghapus Jadwal", "success");
            $('#content').html(data);
        }
    });
});
