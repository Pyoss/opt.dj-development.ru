<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="hero-block" class="hero-block desktop">
    <video  autoplay loop muted playsinline id="hero-video">
        <source src="/upload/src/video/opt-video.mp4" type="video/mp4">
    </video>
    <div class="hero-block__container container">
        <div class="main-callback desktop">
            <img src="<?=$arResult['logo']?>" class="main-callback__logo">
            <span class="main-callback__text">
            “Добрый Жар” - крупнейший
            российский производитель оборудования для самогоноварения,
            виноделия, пивоварения, копчения и кулинарии</span>
            <form class="main-callback__form">
                <span class="main-callback__comment">Заполните форму и получите прайс-лист:</span>
                <input type="email" name="callback-email" class="main-callback__input" placeholder="E mail">
                <input type="tel" name="callback-tel" class="main-callback__input tel-mask" placeholder="+7 000 000 00 00">
                <button class="main-callback__button opt-button get-price">Скачать прайс</button>
                <div class="main-callback__tips">
                    <span>Нужна помощь?</span><br>
                    <span>Позвоните на <?= $GLOBALS['phone'] ?></span>
                </div>
                <div class="main-callback__messengers">
                    <div class="messengers"></div>
                    <div class="messengers"></div>
                    <div class="messengers"></div>
                </div>
            </form>
        </div>

    </div>
</section>
