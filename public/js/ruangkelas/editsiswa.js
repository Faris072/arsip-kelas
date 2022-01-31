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

$('#btn-editsiswa').on('click', function(e){
    e.preventDefault();
    $.ajax({
        type: 'GET',
        url: '/cobacrud',
        data: $('#form-editsiswa').serialize(),
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
