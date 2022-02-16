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

$('#form-update-profil').on('submit', function(e) {
    e.preventDefault();
    let data = $(this).serialize();
    let url = $(this).attr('data-url');
    alert(url);
    $.ajax({
        method: 'POST',
        url = url,
        data = data,
        beforeSend: function(){},
        error: function (){},
        success: function(data){
            $('#content').html(data);
        }
    });
});
