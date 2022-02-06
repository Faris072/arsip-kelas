$('.form-ubah-nilai').on('submit', function(e){
    e.preventDefault();
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        success: function(data){
            $('.nilai').html(data);
        },
        error: function(){

        }
    });
});

$('.form-tambah-nilai').on('submit', function(e){
    e.preventDefault();
    let url = $(this).attr('data-url');
    let data = $(this).serialize();
    $.ajax({
        method: 'POST',
        url: url,
        data: data,
        success: function(data){
            $('.nilai').html(data);
        },
        error: function(){

        }
    });
});
