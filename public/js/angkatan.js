//tidak saya taruh di body.js karena body js meload lebih awal dibanding dengan content ajax
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
