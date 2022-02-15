$('#close-editprofil').on('click', function(e) {
    let url = $(this).attr('data-url');
    $.ajax({
        method: 'GET',
        url: url,
        beforeSend: function(){},
        error: function (){},
        success: function(data){
            $('#content').html(data);
        }
    });
});
