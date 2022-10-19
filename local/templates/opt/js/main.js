var burger_menu = {
    closed: true, transition: false, open: function () {
        let burg = $(".header__burger");
        if (burg.css('height') === '120px') {
            burg.css({'height': '600px'})
            burg.toggleClass('active')
            $(".burger-menu").slideToggle();
            burger_menu.closed = false;
        } else {

            burg.css({'height': '120px'})
            setTimeout(function () {
                $(".burger-menu").slideToggle().promise().done(function () {
                    burg.toggleClass('active')
                    burger_menu.closed = true;
                })
            }, 100)
        }
    }
}

var popup_manager = {
    currentPopup: null,
    fading: false,
    hidePopups: function () {
        if (!popup_manager.currentPopup || popup_manager.fading) return false

        popup_manager.fading = true
        popup_manager.currentPopup.fadeOut(500)
        setTimeout(
            function () {
                popup_manager.fading = false
                popup_manager.currentPopup = null
            })
    },

    showPopup: function (popup) {
        if (popup_manager.fading) return false;
        popup_manager.hidePopups()
        if (!burger_menu.closed){
            burger_menu.open()
        }
        popup_manager.fading = true
        popup.fadeIn(500)
        popup.center()
        setTimeout(
            function () {
                popup_manager.fading = false
                popup_manager.currentPopup = popup
            })
    }
}

$(document).ready(function () {
    $('.header__burger').click(burger_menu.open)

    // Popup hide button
    $(document).click(function (e) {
        if (popup_manager.currentPopup !== null){
            if ($(e.target).closest('#' + popup_manager.currentPopup.attr('id')).length !== 0) return false;
        }
        popup_manager.hidePopups()
    });

    $('.send-tel').click(
        function () {
            let phone = $('#' + this.dataset.phoneInput);
            if (!checkPhone(phone.val())) {
                let error_msg = 'Введите телефон в верном формате'
                showErrorMsg(error_msg)
            } else {
                sendMail('callback', {'phone': phone.val()})

            }
        }
    )

    $('.tel-mask').mask('+7(000)000-00-00')

    $('.show-tel-popup').click(
        showTelPopup
    )

    $('.show-price-popup').click(
        showPricePopup
    )

    $('.mobile-contact').click(
        showMobileContacts
    )

    $('.get-price').click(
        function (event){
            event.preventDefault()
            let mail = $(this).parent().children('[type="email"]').val()
            let phone = $(this).parent().children('[type="tel"]').val()
            if (!(mail.includes('@'))){
                let error_msg = 'Введите email в верном формате'
                showErrorMsg(error_msg)
            } else if (!checkPhone(phone)){

                let error_msg = 'Введите телефон в верном формате'
                showErrorMsg(error_msg)
            } else {
                sendMail('callback', {'phone': phone})
            }
        }
    )

})

function sendMail(template, data) {
    let mail_data = {...{'template': template}, ...data}
    $.ajax({
        type: "POST",
        url: '/ajax-mail/',
        data: mail_data,
        success: function (data) {
            console.log(data)
            showThanksPopup()
        }
    });
}

function showThanksPopup() {
    popup_manager.showPopup($('#thanks-popup'))
}

function showMobileContacts() {
    popup_manager.showPopup($('#mobile-contacts'))
}

function showErrorMsg(msg) {
    $('#error-msg span').text(msg)
    popup_manager.showPopup($('#error-msg'))
}


function showTelPopup() {
    popup_manager.showPopup($('#phone-popup'))
}

function showPricePopup() {
    popup_manager.showPopup($('#price-popup'))
}

function formatNumber(int) {
    return int.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}
const phoneRegexp = /^\+7[(]\d{3}[)]\d{3}-\d{2}-\d{2}$/

function checkPhone(phone) {
    return phone.match(phoneRegexp)
}

$.fn.center = function () {
    this.css("position", "fixed");
    let top = $(window).height() / 2 - this.height() / 2
    if (top > 0) {

        this.css("top", top + 'px');
    } else {

        this.css("top", 0);
    }
    this.css("left", ($(window).width() / 2 - this.width() / 2) + "px");
    return this;
}