/*$(document).ready(function () {
    $(".sale-slider").owlCarousel(
        {
            nav: true,
            items: 1,
            loop: true,
            navText: ['<img src="/src/slider_arrow.svg" class="offer-arrow prev">',
                      '<img src="/src/slider_arrow.svg" class="offer-arrow next">']
        }
    );
})*/

$(document).ready(function(){
    $(".sale-360__image-container").image360();
    $('#manual-click').click(
        function (){
            ym(90253936,'reachGoal','Download_Manual')
        }
    )
});