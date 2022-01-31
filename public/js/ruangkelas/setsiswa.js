$('.edit-siswa').on('click', function(){
    $.ajax({
        type: 'GET',
        url: '/editsiswa',
        beforesend: function(){

        },
        error: function (data, data1){
            $('#modal-setsiswa').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#tambah-siswa').css('display', 'none');
            $('#modal-setsiswa').html(data);
        }
    });
});



