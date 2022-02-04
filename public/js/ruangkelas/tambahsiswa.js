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
            $('#modal-setsiswa').html(data);
        }
    });
});

$('#form-tambah-siswa').on('submit', function(e){
    e.preventDefault();
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: '/setsiswa',
        data: data,
        error: function (data, data1){
            $('#modal-setsiswa').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#modal-setsiswa').html(data);
        }
    });
});
