$(document).ready(
    function () {
        let package_item = $('.package-list__item')
        let focused_item = null
        package_item.hover(
            function () {
                $(this).addClass('hover')
                $('.package-images__hint-' + this.dataset.itemN).addClass('hover')
            }, function () {
                $(this).removeClass('hover')
                $('.package-images__hint-' + this.dataset.itemN).removeClass('hover')
            })
        package_item.click(
            function () {
                if (focused_item){
                    focused_item.removeClass('selected')
                }
                focused_item = $('.package-images__hint-' + this.dataset.itemN)
                focused_item.addClass('selected')
                $('html,body').animate({
                    scrollTop: focused_item.offset().top - $(window).height() / 2
                }, 1000)
            }
        )
    }
)