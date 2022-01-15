// file js harus diload paling akhir.
// jika menggunakan ajax saat berpindah halaman di refresh terakhir sehingga fungsi js mungkin tidak berfungsi. js tidak bisa diload dengan berganti alamat src nya begitu saja karena yang di load adalah js yang sebelum di ganti alamat src nya
// maka dari itu untuk refresh src js harus menggunakan manual dari element html yang terrefresh
// itulah alasan kenapa hanya body.js yang hanya di blade templating engine sedangkan yang lain manual di halaman yang bersangkutan karena body.js hanya mengatasi js di sidebar dan navbar sedangkan yg lain mengatasi halaman content masing-masing

if (window.innerWidth <= 920) {
    $('#btn-sidebar').html('<i class="fas fa-bars"></i>');
    $('.sidebar').width(0);
    $('.content').css('width', '100%');
} else if (window.innerWidth <= 600) {
    $('#btn-sidebar').html('<i class="fas fa-bars"></i>');
    $('.sidebar').width(0);
    $('.content').css('width', '100%');
} else {
    $('#btn-sidebar').html('<i class="fas fa-times"></i>');
}

$('#btn-sidebar').on('click', function () {
    if ($('.sidebar').width() != 0) {
        $('.sidebar').width(0);
        $('.content').css('width', '100%');
        $('.content').css('filter', 'blur(0)');
        $('#btn-sidebar').html('<i class="fas fa-bars"></i>');
    } else if (window.innerWidth < 920) {
        $('.sidebar').css('width', '50%');
        $('.content').css('width', '50%');
        $('.content').css('filter', 'blur(3px)');
        $('#btn-sidebar').html('<i class="fas fa-times"></i>');
    } else if (window.innerWidth < 600) {
        $('.sidebar').css('width', '80%');
        $('.content').css('width', '20%');
        $('.content').css('filter', 'blur(3px)');
        $('#btn-sidebar').html('<i class="fas fa-times"></i>');
    } else {
        $('.sidebar').css('width', '20%');
        $('.content').css('width', '80%');
        $('.content').css('filter', 'blur(0)');
        $('#btn-sidebar').html('<i class="fas fa-times"></i>');
    }
});

    $.ajax({
        type: 'GET',
        url: '/home',
        success: function(data){
            $('#content').html(data);
            $('.loading').css('display', 'none');
        }
    });

$('.sidebar-menu').on('click', function (e) {
    // e.preventDefault();
    $('.sidebar-menu').css('background-color', 'rgba(255,255,255,0)');
    $(this).css({
        'background-color': 'rgba(255,255,255,0.5)',
        'width': '90%;',
        'margin': 'auto'
    });

    let url1 = $(this).attr('data-url');
    $.ajax({
        type: "GET",
        // url : window.location.pathname,//pathname untuk mengambil url
        url: "/" + url1,
        beforeSend: function(){//menampilkan loading sebelum ajax dikirim
            $('#content').html('');
            $('.loading').css('display', 'block');
        },
        // dataType : "Json",//menggunakan dataType hanya untuk benar2 menggunakan json
        success: function (data) { //data adalah responseText nya kalau di manual
            $('#content').html(data);
            $(window).ajaxComplete(function () { //jika ajax sudah selesai maka jalankan perintah berikut
                let css = $('#linkCSS').text();
                let js = $('#linkJS').text();
                $('#css').attr('href', css);
                $('#js').attr('src', js);
                $('.loading').css('display', 'none');
            });
            // document.getElementById('content').innerHTML = data;
        },
        error: function (xhr, thrownError) {
            $('#content').html(xhr.status + '<br>' + thrownError);
        }
    });
});
