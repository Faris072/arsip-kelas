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

$('#form-update-profil').on('submit', function(e) {
    e.preventDefault();
    let data = new FormData($(this)[0]);
    let url = $(this).attr('data-url');
    // alert(url);
    $.ajax({
        method: 'POST',
        enctype: 'multipart/form-data',
        url : url,
        data : data,
        processData: false,//untuk mengirim file dari formData()
        contentType: false,//sama
        beforeSend: function(){
            // $('#content').html('');
            // $('.loading').css('display','block');//yang ini harus menggunakan html('') itu sebabnya jika error halaman akan blank putih
            swal("Tunggu!", "Sedang diproses...", "info");
        },
        error: function (){
            swal("Gagal!", "Pastikan megisi data sesuai validasi", "error");
        },
        success: function(data){
            swal("Berhasil!", "Profil berhasil diubah", "success");
            $('#content').html(data);
            $('.loading').css('display', 'none');
        }
    });
});


$('#ubahpassword').on('click', function(e){
    $.ajax({
        method: 'GET',
        url: '/profil/edit/password',
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display','block');
        },
        error: function (){},
        success: function(data){
            $('#content').html(data);
            $('.loading').css('display', 'none');
        }
    });
});

$('#fotoprofil').on('change', function(){
    let images = document.querySelector('#fotoprofil');
    let previews = document.querySelector('.foto-profil');
    let oFReader = new FileReader();
    oFReader.readAsDataURL(images.files[0]);
    oFReader.onload = function (oFREvent) {
        previews.src = oFREvent.target.result;
    }
});


