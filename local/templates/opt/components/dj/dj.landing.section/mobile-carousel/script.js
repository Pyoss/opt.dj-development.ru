$(document).ready(
    function (){
        $('.mobile-carousel__list-image').click(
            function (event){
                console.log(event.target.dataset.src)
                $('.mobile-carousel__main-image').attr("src", event.target.dataset.src)
            }
        )
    }
)