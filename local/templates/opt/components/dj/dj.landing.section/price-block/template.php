<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="price-block" class="price-block mobile" style="background-image: url('<?=$arResult['background_img']?>')">
    <div class="main-text mobile">
       <span class="main-text__text">Оптовые поставки напрямую от производителя товаров для:</span><br>
        <ul class="main-text__list">
            <li>Самогоноварения</li>
            <li>Виноделия</li>
            <li>Пивоварения</li>
            <li>Копчения</li>
            <li>Кулинарии</li>
        </ul>

    </div>
    <div class="price-block__container container">
        <form class="price-block__form"  id="catalog-price">
            <span class="price-block__comment">Заполните форму и получите прайс-лист:</span>
            <input type="text" name="callback-name" class="price-block__input" placeholder="Имя">
            <input type="email" name="callback-email" class="price-block__input" placeholder="E mail">
            <input type="tel" name="callback-tel" class="price-block__input tel-mask" placeholder="+7 000 000 00 00">
            <button class="price-block__button opt-button get-price">Скачать прайс</button>
            <!--<button class="price-block__button opt-button">Смотреть видео</button>--!>

        </form>
    </div>
</section>
