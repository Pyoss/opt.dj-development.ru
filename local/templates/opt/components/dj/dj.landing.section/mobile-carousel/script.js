$(document).ready(
    function (){
        $('.mobile-carousel__list-image').click(
            function (event){
                let img = $('.mobile-carousel__main-image')
                img.fadeOut().promise().done(function (){

                    img.attr("src", event.target.dataset.src)
                })
            }
        )
    }
)