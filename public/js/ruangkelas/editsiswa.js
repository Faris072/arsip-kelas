$('#close-editsiswa').on('click', function(){
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

// $('#btn-editsiswa').on('click', function(e){
//     e.preventDefault();
//     $.ajax({
//         type: 'GET',
//         url: '/cobacrud',
//         data: $('#form-editsiswa').serialize(),
//         beforesend: function(){

//         },
//         error: function (data, data1){
//             $('#modal-setsiswa').html(data.status + '<br>' + data1);
//         },
//         success: function (data) {
//             $('#modal-setsiswa').html(data);
//         }
//     });
// });

$('#form-edit-siswa').on('submit',function(e){
    e.preventDefault();
    swal("Sedang diproses...", {icon: "warning",});
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method:'post',
        url: url,
        data: data,
        beforesend: function(){

        },
        error: function (data, data1){
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
        },
        success: function (data) {
            swal("Siswa berhasil diubah", {icon: "success",});
            $('#tambah-siswa').css('display', 'block');
            $('#modal-setsiswa').html(data);
        }
    });
});
