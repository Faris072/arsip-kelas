function klikhome(){
    $('.sidebar-menu').css('background-color', 'rgba(255,255,255,0)');
    $('.sidebar-menu:eq(0)').css({
        'background-color': 'rgba(255,255,255,0.5)',
        'width': '90%;',
        'margin': 'auto'
    });
}

$('.path').on('click', function (){
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display','block');
        },
        success: function (data) {
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
    });
});


$('.headsetting').on('click', function(){
    if($(this).hasClass('.headsettingmlegkug')){
        $(this).addClass('headsettingmlengkung');
    }
    else{
        $(this).removeClass('headsettingmlengkung');
    }
});

$('#menu-setpresensi').on('click', function(){
    $.ajax({
        type: 'GET',
        url: '/ruangkelaspresensi',
        beforeSend: function(){

        },
        error: function (data, data1){
            $('#ruangkelaspresensi').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#ruangkelaspresensi').html(data);
        }
    });
});


$('#form-setting-kelas').on('submit', function(e){
    e.preventDefault();
    let desc = CKEDITOR.instances['deskripsi_kelas'].getData();;//supaya ckeditor bisa masuk di database
    let formData = new FormData($(this)[0]);
    formData.append('deskripsi_kelas', desc);
    let url1 = $(this).attr('data-url');
    $.ajax({
        method: 'POST',
        enctype: 'multipart/form-data',
        url: url1,
        data: formData,
        processData: false,//untuk mengirim file dari formData()
        contentType: false,//sama
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display','block');
        },
        success: function (data) {
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
        error: function(xhr, thrownError){
            $('#content').html(xhr.statur+'<br>'+thrownError);
        }
    });
});

$('#menu-setsiswa').on('click',function(){
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

$('#tambah-siswa').on('click', function(){
    $.ajax({
        type: 'GET',
        url: '/setsiswa/create',
        beforesend: function(){

        },
        error: function (data, data1){
            $('#isi-setsiswa').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#tambah-siswa').css('display', 'none');
            $('#isi-setsiswa').html(data);
        }
    });
});

$('.masuk-mapel').on('click', function(){
    $.ajax({
        type: 'GET',
        url: '/mapel',
        beforesend: function(){
            $('.loading').css('display', 'block');
        },
        error: function (data, data1){
            $('#content').html(data.status + '<br>' + data1);
        },
        success: function (data) {
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        }
    });
});

$('#form-hapus-kelas').on('submit', function(e) {
    e.preventDefault();
    let data = $(this).serialize();
    let url = $(this).attr('data-url');
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display','block');
        },
        success: function (data) {
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
        error: function(xhr, thrownError){
            $('#content').html(xhr.statur+'<br>'+thrownError);
        },
    });
});



