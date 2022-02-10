function klikhome(){
    $('.sidebar-menu').css('background-color', 'rgba(255,255,255,0)');
    $('.sidebar-menu:eq(0)').css({
        'background-color': 'rgba(255,255,255,0.5)',
        'width': '90%;',
        'margin': 'auto'
    });
};

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

$('#masuk-kelas').on('click', function (){
    $('.sidebar-menu').css('background-color','rgba(255,255,255,0)');
    $.ajax({
        type: 'GET',
        url: '/ruangkelas',
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display', 'block');
            $('#sidebar-angkatan').css({
                'background-color': 'rgba(255,255,255,0.5)',
                'width': '90%;',
                'margin': 'auto'
            });
        },
        error: function (a, b) {
            $('.set-presensi').html(a.status + '<br>' + b);
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


$('.masuk-mapel').on('click', function(){
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforeSend: function(){
            $('#content').html('');
            $('.loading').css('display', 'block');
            $('.sidebar-menu').css('background-color', 'rgba(255,255,255,0)');
            $('.sidebar-menu:eq(1)').css({
                'background-color': 'rgba(255,255,255,0.5)',
                'width': '90%;',
                'margin': 'auto'
            });
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


$('.akt-ruangkelas').on('click', function () {
    $('.sidebar-menu').css('background-color', 'rgba(255,255,255,0)');
    $('.sidebar-menu:eq(1)').css({
        'background-color': 'rgba(255,255,255,0.5)',
        'width': '90%;',
        'margin': 'auto'
    });
    let url = $(this).attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforeSend: function () {
            $('#content').html('');
            $('.loading').css('display', 'block');
        },
        success: function (data) {
            $('#content').html(data);
            $(document).ajaxComplete(function () {
                let css = $('#linkCSS').text();
                let js = $('#linkJS').text();
                $('#css').attr('href', css);
                $('#js').attr('src', js);
                $('.loading').css('display', 'none');
            });
        },
        error: function (xhr, thrownError) {
            $('#content').html(xhr.statur + '<br>' + thrownError);
        },
    });
});


$('.card-nilai').on('click', function(){
    let data = $('.desk-mapel',this).text();
    $('.desk-mapel',this).html(data);
});

$('.card-mapel').on('click', function(){
    let data = $('.desk-mapel',this).text();
    $('.desk-mapel',this).html(data);
});

$('.card-kelas').on('click', function(){
    let data = $('.detail-deskripsikelas',this).text();
    $('.detail-deskripsikelas',this).html(data);
});
