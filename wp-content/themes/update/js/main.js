$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
})

var toggleButton = $('.toggle-menu')
var navBar = document.querySelector('.nav-bar');
$('.toggle-menu').on('click', function() {
    $('#navMobile').toggleClass('toggle')
    $('#menu-mobile').toggleClass('hide')
})