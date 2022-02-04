$('#edit-siswa').on('click', function(){
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
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




