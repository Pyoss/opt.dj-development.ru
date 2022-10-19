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
<section class="info lazy">
    <div class="info__container container">
        <div class="info__title">Больше информации – <br>больше преимуществ!</div>
        <div class="info__slider owl-carousel">
            <?foreach ($arResult['ELEMENTS'] as $arElement):?>
            <div class="info__slider-item">
                <div class="info__slider-img" style="background-image: url(<?=$arElement['PICTURE_PATH']?>)"></div>
                <span class="info__slider-text"><?=$arElement['DETAIL_TEXT']?></span>
            </div>
            <?endforeach?>
        </div>
</section>