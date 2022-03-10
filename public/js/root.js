$(window).scroll(function(){
    let scrollTop = $('html, body').scrollTop();
    let login = 0;//menentukan posisi scroll pada element tertentu
    let welcome = $('.element-welcome').offset().top-115;//menentukan posisi scroll pada element tertentu
    let adventage = $('.element-adventages').offset().top-145;//menentukan posisi scroll pada element tertentu
    let features = $('.element-features').offset().top-90;//menentukan posisi scroll pada element tertentu
    let questions = $('.element-questions').offset().top-145;//menentukan posisi scroll pada element tertentu
    let about = $('.element-about').offset().top-100;//menentukan posisi scroll pada element tertentu

    if(scrollTop >= login && scrollTop <= welcome){
        $('.nav-item').removeClass('active');
        $('.login').addClass('active');
    }
    else if(scrollTop >= welcome && scrollTop <= adventage){
        $('.nav-item').removeClass('active');
        $('.welcome').addClass('active');
    }
    else if(scrollTop >= adventage && scrollTop <= features){
        $('.nav-item').removeClass('active');
        $('.adventages').addClass('active');
    }
    else if(scrollTop >= features && scrollTop <= questions){
        $('.nav-item').removeClass('active');
        $('.features').addClass('active');
    }
    else if(scrollTop >= questions && scrollTop <= about){
        $('.nav-item').removeClass('active');
        $('.questions').addClass('active');
    }
    else{
        $('.nav-item').removeClass('active');
        $('.about').addClass('active');
    }

});

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
