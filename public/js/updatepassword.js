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

$('#form-edit-password').on('submit', function(e) {
    e.preventDefault();
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: '/profil/update/password',
        data: data,
        beforeSend: function(){},
        error: function (){},
        success: function(data){
            $('#content').html(data);
        }
    });
});
