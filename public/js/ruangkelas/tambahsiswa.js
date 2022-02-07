$('#close-tambahsiswa').on('click', function(){
    $.ajax({
        type: 'GET',
        url: '/setsiswa',
        beforesend: function(){

        },
        error: function (data, data1){
            $('#modal-setsiswa').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#tambah-siswa').css('display', 'block');
            $('#modal-setsiswa').html(data);
        }
    });
});

$('#form-tambah-siswa').on('submit', function(e){
    e.preventDefault();
    swal("Sedang diproses...", {icon: "warning",});
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: '/setsiswa',
        data: data,
        beforesend: function(){

        },
        error: function (data, data1){
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "danger");        },
        success: function (data) {
            swal("Siswa Berhasil Ditambahkan!", {icon: "success",});
            $('#tambah-siswa').css('display', 'block');
            $('#modal-setsiswa').html(data);
        }
    });
});
