$(document).ready(function () {
    $(".owl-carousel.recipes-carousel").owlCarousel(
        {
            nav: true,
            items: 1,
            loop: true,
            navText: ['<img src="/upload/src/slider_arrow.svg" class="recipes-carousel__arrow prev">',
                      '<img src="/upload/src/slider_arrow.svg" class="recipes-carousel__arrow next">']
        }
    );
})