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
<section class="offer lazy" id="offer">
    <div class="offer__container container">
        <div class="offer__title">Купить самогонный аппарат <span class="mas-bold">HERO</span></div>
            <form class="offer__grid" id="order-form">
                <div class="offer-items">
                    <div class="mas-bold offer-items__title">Оформление заказа:</div>
                    <input type="radio" name="dist-type" id="hero-21" data-price="27900" checked>
                    <label for="hero-21">
                        <span class="offer-items__name">HERO 21 л</span><br>
                        <span class="offer-items__price"><span class="mas-bold">27 900</span> р</span>
                        <span class="offer-items__old-price">32 900 р</span>
                    </label>
                    <input type="radio" name="dist-type" id="hero-33" data-price="29900">
                    <label for="hero-33">
                        <span class="offer-items__name">HERO 33 л</span><br>
                        <span class="offer-items__price"><span class="mas-bold">29 900</span> р</span>
                        <span class="offer-items__old-price">35 900 р</span>
                    </label>
                    <input type="radio" name="dist-type" id="hero-50" data-price="32900">
                    <label for="hero-50">
                        <span class="offer-items__name">HERO 50 л</span><br>
                        <span class="offer-items__price"><span class="mas-bold">32 900</span> р</span>
                        <span class="offer-items__old-price">37 900 р</span>
                    </label>
                    <input type="radio" name="dist-type" id="hero-colon" data-price="17900">
                    <label for="hero-colon">
                        <span class="offer-items__name">Колонна дистиллятор HERO</span><br>
                        <span class="offer-items__price"><span class="mas-bold">17 900</span> р</span>
                        <span class="offer-items__old-price">20 900 р</span>
                    </label>
                    <input type="checkbox" name="tan" id="tan" data-price="4990">
                    <label for="tan">
                        <span class="offer-items__name" data-id="23">ТЭН + Регулятор 2 кВт</span><br>
                        <span class="offer-items__price"><span class="mas-bold">4 990</span> р</span>
                        <span class="offer-items__old-price">6 990 р</span>
                    </label>
                    <input type="checkbox" name="iPlatez-4" id="iPlatez-4" data-price="5900">
                    <label for="iPlatez-4">
                        <span class="offer-items__name" data-id="18">Индукционная плита iPlate YZ-T24 2 кВт</span><br>
                        <span class="offer-items__price"><span class="mas-bold">5 900</span> р</span>
                        <span class="offer-items__old-price">7 900 р</span>
                    </label>
                    <input type="checkbox" name="iPlatez-Alina" id="iPlatez-Alina" data-price="18990">
                    <label for="iPlatez-Alina">
                        <span class="offer-items__name" data-id="21">Индукционная плита iPlate Alina 3,5 кВт</span><br>
                        <span class="offer-items__price"><span class="mas-bold">18 990</span> р</span>
                        <span class="offer-items__old-price">19 900 р</span>
                    </label>
                    <input type="checkbox" name="djin" id="djin" data-price="2990">
                    <label for="djin">
                        <span class="offer-items__name" data-id="22">Джин Корзина</span><br>
                        <span class="offer-items__price"><span class="mas-bold">2 990</span> р</span>
                        <span class="offer-items__old-price">4 900 р</span>
                    </label>
                    <input type="checkbox" name="rpn" id="rpn" data-price="1490">
                    <label for="rpn">
                        <span class="offer-items__name" data-id="19">РПН 4 метра, медь</span><br>
                        <span class="offer-items__price"><span class="mas-bold">1 490</span> р</span>
                        <span class="offer-items__old-price">1 990 р</span>
                    </label>
                    <input type="checkbox" name="popugai" id="popugai" data-price="1490">
                    <label for="popugai">
                        <span class="offer-items__name" data-id="20">Попугай на банку</span><br>
                        <span class="offer-items__price"><span class="mas-bold">1 490</span> р</span>
                        <span class="offer-items__old-price">1 990 р</span>
                    </label>

                </div>
                <div class="offer-image">
                    <img src="/upload/src/hero-main.png">
                </div>
                <div class="offer-sum">
                <span class="offer-sum__title">Итоговая сумма</span>
                <span class="offer-sum__price" id="sum-final">27 900 р</span>
                    <div class="input-container name">
                        <input type="text" placeholder="Имя" class="offer-sum__client" name="name" id="offer-name"></div>
                    <div class="input-container phone">
                        <input type="tel" required placeholder="Телефон" class="offer-sum__client tel-mask" name="phone" id="offer-tel"></div>
                    <div class="input-container email">
                        <input type="email" placeholder="E-mail" class="offer-sum__client" name="email" id="offer-email"></div>
                    <div class="input-container submit">
                        <button type="submit" class="offer-sum__submit" id="order-button">Оформить заказ</button></div>
        </form>
    </div>
</section>

