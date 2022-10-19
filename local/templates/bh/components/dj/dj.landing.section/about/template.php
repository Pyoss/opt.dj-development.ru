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
<section class="about lazy" id="about">
    <div class="about__container container hero-text">
        <img src="<?=$arResult['background_img']?>" class="about__img" width="454px" height="486px">
        <div class="about__text-block">
            <div class="about__title">О нас</div>
            <div class="about__text">Миссия бренда HERO: дать возможность реализовать свои самые смелые фантазии и
                наслаждаться процессом приготовления элитного алкоголя по своим авторским рецептам.
            </div>
        </div>
    </div>
</section>