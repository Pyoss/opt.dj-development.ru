var burger_menu = {
    closed: true, transition: false, open: function () {
        if (burger_menu.closed) {
            $(".burger-menu").slideToggle();
            burger_menu.closed = false;
        } else {
            setTimeout(function () {
                $(".burger-menu").slideToggle().promise().done(function () {
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

        if (!burger_menu.closed) {
            burger_menu.open()
        }
        setTimeout(
            function () {
                popup_manager.fading = false
                popup_manager.currentPopup = null
            })
    },

    showPopup: function (popup, position='center') {
        if (popup_manager.fading) return false;
        popup_manager.hidePopups()
        if (!burger_menu.closed) {
            burger_menu.open()
        }
        popup_manager.fading = true
        popup.fadeIn(500)
        if (position === 'center'){
            popup.center()
        } else {
            popup.onTop(position)
        }
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
        if (popup_manager.currentPopup !== null) {
            if ($(e.target).closest('#' + popup_manager.currentPopup.attr('id')).length !== 0) return false;
        }
        popup_manager.hidePopups()
    });

    $('.send-tel').click(
        function () {
            let phone = $('#' + this.dataset.phoneInput);
            if (!checkPhone(phone.val())) {
                let error_msg = 'Введите телефон в верном формате'
                showErrorMsg(error_msg, phone)
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
        function (event) {
            event.preventDefault()
            let name = $(this).parent().children('[type="text"]')
            let mail = $(this).parent().children('[type="email"]')
            let phone = $(this).parent().children('[type="tel"]')
            if (!(mail.val().includes('@'))) {
                let error_msg = 'Введите email в верном формате'
                showErrorMsg(error_msg, mail)
            } else if (!checkPhone(phone.val())) {

                let error_msg = 'Введите телефон в верном формате'
                showErrorMsg(error_msg, phone)
            } else {
                sendMail('price', {'phone': phone.val(), 'email': mail.val(), 'name': name.val()})
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

function showErrorMsg(msg, position='center') {
    $('#error-msg span').text(msg)
    popup_manager.showPopup($('#error-msg'), position)
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
    this.css("left", ($(window).width() / 2 - this.outerWidth()/ 2) + "px");
    console.log(this.width())
    console.log($(window).width())
    return this;
}

$.fn.under = function (jq) {
    this.css("position", "absolute");
    this.css('box-sizing', 'border-box')
    this.css('width', jq.width() + 'px')
    let top = jq.offset().top + jq.outerHeight()
    let left = jq.offset().left
    this.css("left", left + "px");
    this.css("top", top + "px");
    return this;
}

$.fn.onTop = function (jq) {
    this.css("position", "absolute");
    this.css('box-sizing', 'border-box')
    this.css('width', jq.outerWidth() + 'px')
    let top = jq.offset().top - this.outerHeight()
    let left = jq.offset().left
    this.css("left", left + "px");
    this.css("top", top + "px");
    return this;
}