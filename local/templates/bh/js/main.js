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

    // Popup hide button
    $(document).click(function (e) {
        if ($(e.target).closest('#phone-popup').length !== 0 || $(e.target).closest('#thanks-popup').length !== 0) return false;
        popup_manager.hidePopups()

    });

    $('.send-tel').click(
        function () {
            let phone = $('#' + this.dataset.phoneInput);
            if (!checkPhone(phone.val())) {
                let error_msg = 'Введите телефон в верном формате'
                showErrorMsg(error_msg)
            } else {
                if (poll.answers[3]) {
                    let answers = []
                    for (let answer in poll.answers) {
                        console.log(answer)
                        answers.push(poll.answers[answer].textContent)
                    }
                    ym(90253936,'reachGoal','Callback')
                    sendMail('poll', {...{'phone': phone.val()}, ...answers})
                } else {
                    ym(90253936,'reachGoal','Callback')
                    sendMail('callback', {'phone': phone.val()})
                }
            }
        }
    )

    $('.tel-mask').mask('+7(000)000-00-00')

    $('.show-tel-popup').click(
        showTelPopup
    )

    //Burger menu
    $('#burger').on('click', function (e) {
        $('#burger-menu').toggleClass("active");
    });
    $(function () {
        $('.lazy').Lazy({effect: 'fadeIn',});
    });
})

const phoneRegexp = /^\+7[(]\d{3}[)]\d{3}-\d{2}-\d{2}$/

function checkPhone(phone) {
    return phone.match(phoneRegexp)
}


function checkMail(mail) {
    return true
}

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

function showErrorMsg(msg) {
    $('#error-msg span').text(msg)
    popup_manager.showPopup($('#error-msg'))
}


function showTelPopup() {
    popup_manager.showPopup($('#phone-popup'))
}

function formatNumber(int) {
    return int.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
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