$('.nav-login').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0},300);
});

$('.nav-welcome').on('click', function(e) {
    e.preventDefault();
    let x = $('.element-welcome').offset().top;//menentukan posisi scroll pada element tertentu
    $('html, body').animate({scrollTop:x-100},300);
});

$('.nav-adventages').on('click', function(e){
    e.preventDefault();
    let x = $('.element-adventages').offset().top;
    $('html, body').animate({scrollTop:x-100},300);
});

$('.nav-features').on('click', function(e) {
    e.preventDefault();
    let x = $('.element-features').offset().top;
    $('html, body').animate({scrollTop:x-50},300);
});

$('.nav-questions').on('click', function(e) {
    e.preventDefault();
    let x = $('.element-questions').offset().top;
    $('html, body').animate({scrollTop:x-100},300);
});

$('.nav-about').on('click', function(e) {
    e.preventDefault();
    let x = $('.element-about').offset().top;
    $('html, body').animate({scrollTop:x-50},300);
});
