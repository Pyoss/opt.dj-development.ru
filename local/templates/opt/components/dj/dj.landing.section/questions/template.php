<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="questions" class="questions" style="background-image: url(<?=$arResult['background_img']?>)">
    <div class="questions__container container">
        <div class="questions__container-left">
            <div class="questions__title">
                <span>Остались вопросы?</span>
            </div>
            <div class="questions__text">
                <span>Напишите нам в WhatsApp или Telegram,

                и мы проконсультируем вас </span><span class="highlight"> в рабочее время!</span>
            </div>
            <div class="questions__messengers">
                <img class="questions__messengers-items" src="/upload/src/opt/phone.png">
                <img class="questions__messengers-items" src="/upload/src/opt/whatsapp.png">
                <img class="questions__messengers-items" src="/upload/src/opt/telegram.png">
            </div>
            <div class="questions__text">
                <span>Также вы можете заказать обратный звонок, и мы свяжемся с вами </span>
                <span class="highlight"> в ближайшее время</span>
            </div>
            <div class="questions__inputs">
                <input type="tel" placeholder="+7(000)000 00 00" id='questions-phone' class="questions__input tel-mask">
                <button class="questions__button opt-button send-tel" data-phone-input="questions-phone">Заказать звонок</button>

            </div>


        </div>

    </div>
</section>
