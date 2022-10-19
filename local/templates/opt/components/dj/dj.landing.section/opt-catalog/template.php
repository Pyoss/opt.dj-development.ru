<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="opt-catalog" class="opt-catalog">
    <div class="opt-catalog__container container">
        <h2 class="opt-catalog__title">Наш ассортимент</h2>
        <div class="catalog-list">
            <?foreach ($arResult['ELEMENTS'] as $element):?>
            <a href="/category/<?=$element['CODE']?>/">
                <div class="catalog-list__item">
                    <span class="catalog-list__item-name"><?=$element['NAME']?></span>
                    <img class="catalog-list__item-img" src="<?=$element['PICTURE_PATH']?>">
                </div>
            </a>
            <?endforeach;?>
        </div>
        <h2 class="opt-catalog__title">Собственные марки</h2>
        <div class="brands-list">
            <?foreach ($arResult['BRANDS'] as $brand):?>
                <img class="brands-list__item" src="<?=$brand['PICTURE_PATH']?>">
            <?endforeach;?>
        </div>
    </div>
</section>
