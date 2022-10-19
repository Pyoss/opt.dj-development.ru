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
<section class="recipes">
    <div class="recipes__container container">
        <div class="recipes__title">Рецепты:</div>
        <div class="owl-carousel recipes-carousel">
            <? foreach ($arResult['ELEMENTS'] as $ELEMENT):?>
            <div class="recipes-carousel__slide">
                <div class="recipe-carousel__slide-top">
                    <div class="recipe-carousel__slide-recipe">

                        <div class="recipe-carousel__slide-title">
                            <?=$ELEMENT['NAME']?>
                            </div>
                        <div class="recipe-carousel__slide-composition">
                            <b>Вам понадобится:</b><br>
                            <?=$ELEMENT['PREVIEW_TEXT']?>

                        </div>
                    </div>
                    <img class="recipe-carousel__slide-img" src="<?=$ELEMENT['PICTURE_PATH']?>">

                </div>
                <div class="recipe-carousel__slide-text"><?=$ELEMENT['DETAIL_TEXT']?>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>