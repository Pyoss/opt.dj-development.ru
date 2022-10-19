<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
?>
<section class="questions">
    <div class="questions__container container">
        <div class="questions-background"></div>
        <div class="questions__block hero-text">
            <div class="questions__title">Хотите заказать<br> нашу продукцию<br> или есть вопросы?</div>
            <div class="questions__text">
                Напишите нам в удобный мессенджер<br> и мы проконсультируем вас<br> в течение рабочего дня:
            </div>
            <div class="questions__messengers">
                <a class="messenger" id='telegram-click' href="https://t.me/apparat_hero" target="_blank"><img title="telegram" alt="telegram" src="/upload/src/TG.png"></a>
                <a class="messenger mobile"  id='viber-click'  href="viber://chat/?number=%2B79645064272"><img title="viber" alt="viber" src="/upload/src/VB.png"></a>
                <a class="messenger"  id='whatsapp-click'  href="https://api.whatsapp.com/send?phone=+79645064272" target="_blank"><img title="whatsapp" alt="whatsapp" src="/upload/src/WHATSAPP.png"></a>
            </div>
          <div class="questions__text questions__text--call">
                Или закажите обратный звонок, и мы<br> свяжемся с вами в ближайшее время
            </div>
            <input id="question-tel" class="questions__tel-input tel tel-mask" placeholder="+7 (000) 000-00-00" type="tel">
            <button class="button send-tel" data-phone-input="question-tel" id="question-button">Заказать звонок</button>
        </div>
</section>