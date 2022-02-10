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
        url: '/presensi',
        beforeSend: function(){

        },
        error: function (data, data1){
            swal("Terjadi Kesalahan", {icon: "warning",});        },
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
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
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
            swal("Terjadi Kesalahan", {icon: "danger",});
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
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");        },
        success: function (data) {
            $('#tambah-siswa').css('display', 'none');
            $('#isi-setsiswa').html(data);
        }
    });
});

$('.masuk-mapel').on('click', function(){
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforesend: function(){
            $('.loading').css('display', 'block');
        },
        error: function (data, data1){
            swal("Terjadi Kesalahan", {icon: "danger",});
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
    swal("Sedang diproses...", {icon: "warning",});
    let data = $(this).serialize();
    let url = $(this).attr('data-url');
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        beforeSend: function(){
            $('.loading').css('display','block');
        },
        success: function (data) {
            swal("Kelas Berhasil Dihapus", {icon: "success",});
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
        error: function(xhr, thrownError){
            swal("Terjadi kesalahan", {icon: "danger",});
        },
    });
});


$('#form-tambah-mapel').on('submit',function(e){
    e.preventDefault();
    swal("Sedang diproses...", {icon: "warning",});
    let url = $(this).attr('data-url');
    let data = $(this).serializeArray();
    let desc = CKEDITOR.instances['deskripsi-mapel'].getData();; //supaya ckeditor bisa masuk di database
    data.push({name: "deskripsi_mapel", value: desc});
    data = $.param(data);//untuk mengkonfersikan ke form ajax
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        beforeSend: function(){
            $('.loading').css('display','block');
        },
        success: function (data) {
            swal("Mapel Berhasil Ditambahkan", {icon: "success",});
            $('#content').html(data);
            $(document).ajaxComplete(function(){
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
        error: function(xhr, thrownError){
            swal("Terjadi Kesalahan", "Pastikan mengisi data dengan benar sesuai validasi", "error");
        },
    });
});

$(window).on('ready', function(){
    alert(data);
    let data = $('.desk-mapel',this).text();
    $('.desk-mapel',this).html(data);
});

$('#close-siswa').on('click', function (){
    $('#tambah-siswa').css('display', 'block');
});

$('#close-presensi').on('click', function (){
    $('#tambah-presensi').css('display', 'block');
});



