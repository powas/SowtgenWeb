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


//FORM VALIDATE
$(document).ready(function(){
    $("#contact-form").validate({
        ignore: ".ignore",
        rules: {
            nombre: {
                required: true,
            },
            email: {
                required: true,
                email:true
            },
            mensaje: {
                required: true,
            }
        }

    });
});