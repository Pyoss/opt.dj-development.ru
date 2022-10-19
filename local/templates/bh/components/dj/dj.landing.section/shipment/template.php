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
<section class="shipment" id="shipment">
    <div class="shipment__container container hero-text">
        <div class="shipment__title">
            Бесплатная доставка по всей России
        </div>
        <div class="shipment__text-block">
            <div class="shipment__text">
                <b>По России:</b> бесплатная доставка до ближайшего пункта
                <img alt="СДЭК" title="СДЭК" src="/upload/src/SDEK.png"> (3-5 дней) или <img alt="Почта России"
                                                                                             title="Почта России"
                                                                                             src="/upload/src/POCHTA.png">
            </div>
            <div class="shipment__text">
                <b>Москва и МО:</b> бесплатная доставка собственной курьерской службой (1-3 дня)
            </div>
        </div>
        <div class="shipment__text-bottom">
            Оплата после получения.<br>
            Можно вскрыть упаковку и проверить товар.
        </div>
        <div class="shipment__comment">
            По любым вопросам обращаться по телефону:<br>
            <b>+7 (800) 600-74-87</b>
        </div>
        <div class='shipment__img-block'>
            <img class="shipment-img shipment-img__2" src="<?=$arResult['background_img_2']?>">
            <img class="shipment-img shipment-img__3" src="<?=$arResult['background_img_3']?>">
            <img class="shipment-img shipment-img__1" src="<?=$arResult['background_img_1']?>">
        </div>
    </div>
</section>