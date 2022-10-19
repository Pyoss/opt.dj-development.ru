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
<section class="choice lazy" style="background-image: url(<?=$arResult['background_img']?>)">
    <div class="choice__container container">
        <img class="choice__arrow-img" src="/upload/src/choice-arrow.svg">
        <div class="choice__text-block choice__text-block__1 hero-text">
            <span class="choice__title"><b>HERO - </b><br> будьте уверены<br> в своем выборе</span>
        </div>
        <div class="choice__text-block choice__text-block__2 hero-text">
            <ul class="choice__list list">
                <li>Дополнительный<br> утеплитель для царги</li>
                <li>Поворотный холодильник<br>позволяет уменьшить<br>высоту аппарата</li>
            </ul>
        </div>
    </div>
</section>