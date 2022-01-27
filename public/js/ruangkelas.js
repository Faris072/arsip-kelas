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

