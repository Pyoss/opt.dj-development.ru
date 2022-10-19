$(document).ready(function () {

    var offer = {
        sum: 0
    }

    $(".offer__grid :input").change(function () {
        offer.sum = 0
        $(".offer__grid :input").each(function () {
            if (this.checked) {
                offer.sum += parseInt(this.dataset.price)
            } // This is the jquery object of the input, do what you will
        });
        document.getElementById('sum-final').textContent = formatNumber(offer.sum) + ' p'
    })

    $('#order-form').submit(function (event) {
        event.preventDefault()
        if (!checkPhone($('#offer-tel').val())) {
            let error_msg = 'Введите телефон в верном формате'
            showErrorMsg(error_msg)
            return
        }
        let data = {cart: [],
        phone: $('#offer-tel').val(),
        name: $('#offer-name').val(),
        email: $('#offer-email').val(),
        sum: $('#sum-final').html()}
        $(".offer__grid :input").each(function () {
            if (this.checked) {
                data.cart.push(getValue(this))
            }
        });
        data = JSON.stringify(data)
        ym(90253936,'reachGoal','Order_Confirmed')
        sendMail('order', {data})
    })

    $('.offer-items label .offer-items__name').click(
        function (event){
            loadCard(this.dataset.id)
        }
    )

})
function getValue(input_element){
    let price = input_element.dataset.price
    let name = $('label[for="' + input_element.id + '"] .offer-items__name').html();

   return {'price': price, 'name': name}
}

function loadCard(id){
    $.ajax({
        type: "POST",
        url: '/ajax-data/',
        data: {'ID': id},
        success: function (data) {
            console.log(data)
            data = JSON.parse(data)
            showCard(data['NAME'], data['DETAIL_TEXT'], data['PICTURE_PATH'])
        }
    });

}

function showCard(name, text, picture) {
    let card = $('<div class="popup-overlay" style="display: none"><div class="hero-card">' +
        '<div class="hero-card__close">X</div> ' +
        `<div class="hero-card__title">${name}</div>` +
        `<div class="hero-text__image" style="background-image: url(${picture})"></div>` +
        `<div class="hero-text__text">${text}</div>` +
        '<div class="hero-text__button">Добавить в корзину</div>' +
        '</div></div>')

    card.appendTo('main');
    card.fadeIn(300)
    card.center()
    $('.hero-card__close').click(
        function (){
            $('.popup-overlay').fadeOut(300, function (){
                $('.popup-overlay').remove()
            })
        }
    )
    $('.hero-text__button').click(
        function (){
            $('.popup-overlay').fadeOut(300, function (){
                $('.popup-overlay').remove()
            })
        }
    )
}