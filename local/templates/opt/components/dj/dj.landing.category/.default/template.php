<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>

<section id="category" class="category">
    <div class="category__container container">
        <h2 class="category__title"><?=$arResult['CATEGORY']['SEO']['SECTION_PAGE_TITLE']?></h2>
        <div class="category__image" style="background-image: url('<?= $arResult['CATEGORY']['PICTURE_PATH']?>')">

        </div>
        <div class="category__text"><?=$arResult['CATEGORY']['DESCRIPTION']?></div>
        <div class="category__form desktop">
            <div class="category__form-action">
                Заполните форму и получите прайс-лист:
            </div>
            <div class="category__form-inputs">
                <input type='email' class="category__form-input" placeholder="E-mail">
                <input type='tel' class="category__form-input" placeholder="+7 123 456 78 90">
                <button class="category__form-button opt-button get-price">Скачать прайс-лист</button>
            </div>
            <div class="category__form-comments">
                <span>Нужна помощь?</span>
                <span>Позвоните нам <?=$GLOBALS['phone']?></span>
                <img src="/upload/src/opt/whatsapp.png">
                <img src="/upload/src/opt/phone.png">
                <img src="/upload/src/opt/telegram.png">
            </div>
        </div>
    </div>
</section>

