$('#close-ubahpresensi').on('click', function() {
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
            $('#tambah-presensi').css('display', 'block');
            $('.set-presensi').html(data);
        }
    });
});

$('#form-ubah-presensi').on('submit', function(e){
    e.preventDefault();
    swal("Sedang diproses...", {icon: "warning",});
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        beforesend: function(){

        },
        error: function(data, data1) {
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");        },
        success: function(data){
            swal("Presensi Berhasil Diubah", {icon: "success",});
            $('#tambah-presensi').css('display', 'block');
            $('.set-presensi').html(data);
        }
    });
});
