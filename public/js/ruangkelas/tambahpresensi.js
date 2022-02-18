$('#close-tambahpresensi').on('click', function() {
    let url = $(this).attr('data-url');
    $.ajax({
        type: "GET",
        url: url,
        beforesend: function(){

        },
        error: function(data, data1) {
            $('.set-presensi').html(data.status + '<br>' + data1);
        },
        success: function(data){
            $('.set-presensi').html('');
            $('#tambah-presensi').css('display', 'block');
        }
    });
});

$('#form-tambah-presensi').on('submit', function(e){
    e.preventDefault();
    swal("Sedang diproses...", {icon: "warning",});
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method: "POST",
        url: url,
        data: data,
        beforeSend: function(){

        },
        error: function(data, data1) {
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
        },
        success: function(data){
            swal("Presensi Berhasil Ditambahkan", {icon: "success",});
            $('#ruangkelaspresensi').html(data);
            $('#tambah-presensi').css('display', 'block');
        }
    });
});

