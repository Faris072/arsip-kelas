$('#nav-login').on('click', function(e) {
    e.preventDefault();
    $('html','body').stop().animate({scrollTop:0},400,'swing');
});

$('#nav-welcome').on('click', function(e) {
    e.preventDefault();
    $('html','body').stop().animate({scrollTop:100000},40000);
});
