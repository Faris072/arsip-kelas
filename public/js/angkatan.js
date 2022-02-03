//tidak saya taruh di body.js karena body js meload lebih awal dibanding dengan content ajax
function klikhome() {
    $('.sidebar-menu').css('background-color', 'rgba(255,255,255,0)');
    $('.sidebar-menu:eq(0)').css({
        'background-color': 'rgba(255,255,255,0.5)',
        'width': '90%;',
        'margin': 'auto'
    });
}

$('.path').on('click', function () {
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
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
    });
});

$(document).ready(function () {
    $('.akt-ruangkelas').on('click', function () {
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

});

$('#form-tambah-kelas').on('submit', function (e) {
    e.preventDefault();
    let desc = CKEDITOR.instances['deskripsi-tambahkelas'].getData();; //supaya ckeditor bisa masuk di database
    // let formData = $('#form-tambah-kelas').serialize();//serialize untuk mengambil data apapun dari form tapi tidak untuk file
    let formData = new FormData($(this)[0]); //untuk mengirim file kita mangguanakan formData($(form)[0])
    formData.append('deskripsi_kelas', desc);
    $.ajax({
        method: 'POST',
        url: '/angkatan',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false, //untuk mengirim file dari formData()
        contentType: false, //sama
        beforeSend: function () {
            $('#content').html('');
            $('.loading').css('display', 'block');
        },
        success: function (data) {
            $('#content').html(data);
            $(document).ajaxComplete(function () {
                let css = $('#linkCSS').text();
                $('#css').attr('href', css);
                $('.loading').css('display', 'none');
            });
        },
        error: function (xhr, thrownError) {
            $('#content').html(xhr.statur + '<br>' + thrownError);
        },
    });
});

$('.modal-detail').on('hover',function () {
    let x = $('.detail-deskripsikelas',this).text();
    $('.detail-deskripsikelas',this).html(x);
});
