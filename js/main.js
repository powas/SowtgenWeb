$(document).ready(function () {
    $('.navbar .navbar-nav > li.dropdown').hover(function () {
        $('ul.dropdown-menu', this).stop(true, true).slideDown('fast');
        $(this).addClass('open');
    }, function () {
        $('ul.dropdown-menu', this).stop(true, true).slideUp('fast');
        $(this).removeClass('open');
    });
});

$('.owl-brands').owlCarousel({
    loop:true,
    autoplay: true,
    autoplayTimeout: 2000,
    margin:30,
    nav: false,
    dots: false,
    responsiveClass:false,
    responsive:{
    0:{
        items:2,
    },
    550:{
    items:3,
    },
    993:{
    items:6,
    },
    }
});