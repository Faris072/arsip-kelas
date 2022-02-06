$(window).ready(function(){
    let link = $('#btn-detail-mapel').attr('data-url');
    $.ajax({
        type: 'GET',
        url: link,
        beforeSend: function(){

        },
        success: function (data) {
            $('#detail-mapel').html(data);
            let desk = $('#desc-mapel').text();
            $('#desc-mapel').html(desk);
        },
    });

    let url = $('.nilai').attr('data-url');
    $.ajax({
        type: 'GET',
        url: url,
        beforeSend: function(){

        },
        success: function (data) {
            $('.nilai').html(data);
        },
        error: function (){
            $('.nilai').html('error');
        }
    });
});


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


$('#editmapel').on('click', function (){
    $.ajax({
        type: 'GET',
        url: '/editmapel',
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


