$('#close-editprofil').on('click', function(e) {
    let url = $(this).attr('data-url');
    $.ajax({
        method: 'GET',
        url: url,
        beforeSend: function(){
            $('.loading').css('display','block');
        },
        error: function (){},
        success: function(data){
            $('#content').html(data);
            $('.loading').css('display', 'none');
        }
    });
});

$('#form-edit-password').on('submit', function(e) {
    e.preventDefault();
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: '/profil/update/password',
        data: data,
        beforeSend: function(){
            $('.loading').css('display','block');
        },
        error: function (){
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
        },
        success: function(data){
            swal("Berhasil!", "Password berhasil diubah", "success");
            $('#content').html(data);
            $('.loading').css('display', 'none');
        }
    });
});
