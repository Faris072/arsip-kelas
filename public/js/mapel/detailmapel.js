$('#btn-editmapel').on('click', function(e){
    e.preventDefault();
    $('#close').click();//PR
    $.ajax({
        type: 'GET',
        url: '/detailmapel',
        beforeSend: function(){

        },
        success: function (data) {
            $('#detail-mapel').html(data);
        },
    });
});
