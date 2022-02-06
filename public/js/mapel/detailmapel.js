$('#form-edit-mapel').on('submit', function(e){
    e.preventDefault();
    swal("Sedang Diproses", {icon: "warning",});
    let url = $(this).attr('data-url');
    let data = $(this).serializeArray();
    let desc = CKEDITOR.instances['deskripsi-mapel'].getData();; //supaya ckeditor bisa masuk di database
    data.push({name: "deskripsi_mapel", value: desc});
    data = $.param(data);//untuk mengkonfersikan ke form ajax
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display','block');
        },
        success: function (data) {
            swal("Data Mapel Berhasil Diubah", {icon: "success",});
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
        error: function(xhr, thrownError){
            swal("Terjadi kesalahan", {icon: "danger",});
            $('#content').html(xhr.statur+'<br>'+thrownError);
        },
    });
});

$('#form-hapus-mapel').on('submit', function(e){
    e.preventDefault();
    swal("Sedang diproses...", {icon: "warning",});
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display','block');
        },
        success: function (data) {
            swal("Mapel Berhasil Dihapus", {icon: "success",});
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
        error: function(xhr, thrownError){
            swal("Terjadi kesalahan", {icon: "danger",});
            $('#content').html(xhr.statur+'<br>'+thrownError);
        },
    });
});
