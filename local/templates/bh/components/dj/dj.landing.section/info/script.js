$(document).ready(function () {
    $(".info__slider").owlCarousel(
        {
            loop: true,
            navText: ['<img src="/upload/src/slider_arrow.svg" class="info-arrow prev">',
                '<img src="/upload/src/slider_arrow.svg" class="info-arrow next">'],
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                    margin: 12,
                },
                1064: {
                    items: 3,
                    nav: true,
                    margin: 99
                }
            }
        })

})