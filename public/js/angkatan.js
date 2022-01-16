//tidak saya taruh di body.js karena body js meload lebih awal dibanding dengan content ajax
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

$(document).ready(function() {
    $('.akt-ruangkelas').on('click', function (){
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
                    let js = $('#linkJS').text();
                    $('#css').attr('href', css);
                    $('#js').attr('src', js);
                    $('.loading').css('display', 'none');
                });
            },
            error: function(xhr, thrownError){
                $('#content').html(xhr.statur+'<br>'+thrownError);
            },
        });
    });

});
