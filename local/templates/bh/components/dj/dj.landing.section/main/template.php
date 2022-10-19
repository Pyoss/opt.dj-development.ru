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
<section class="sale"
         style="background-image: url(<?= $arResult['background_img'] ?>),linear-gradient(to right,#76532c85 73%, #000000 30%)">
    <div class="sale-container container hero-text">
        <div class="sale-container__block top">
            <div class="sale-container__title">самогонный аппарат</div>
            <div class="sale-container__feature">С узлом
                отбора
                2&nbspв&nbsp1
            </div>
            <ul class="sale-container__feature-list list">
                <li class="sale-container__feature-item">Чистый спирт - <b>96%</b></li>
                <li class="sale-container__feature-item">По цене < <b>47 р</b> за <b>0.5 л</b></li>
            </ul>
        </div>
        <div class="sale-container__block bottom">
            <div class="sale-container__title">
                <span class="sale-container__title--main">Акция</span>
                <span class="sale-container__title--comment">до 15.10</span></div>
            <ul class="sale-container__feature-list list">
                <li class="sale-container__feature-item">Бесплатная доставка!</li>
                <li class="sale-container__feature-item">Фальш дно в подарок!</li>
                <li class="sale-container__feature-item">Царга 50 см в подарок!</li>
            </ul>
        </div>
    </div>

    <div class="sale-360">
        <img class="sale-360__logo" src="/upload/src/360.svg">
    <div class="sale-360__image-container">
        <?foreach ($arResult as $key => $picture):
            if (strpos($key, 'SECTION_360') === false){
                continue;
            }?>
        <img src="<?=$picture?>">
        <?endforeach?>
    </div>
        <div class="sale-360__buttons">
            <button class="sale-360__button button show-tel-popup" style="background-color: #FF843C">
                Получить консультацию
            </button>
            <a id='manual-click' href="/upload/src/hero-manual.pdf" target="_blank" class="sale-360__button button">
                Скачать инструкцию
            </a>
        </div>
    </div>
</section>