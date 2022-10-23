<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="mobile-carousel" class="mobile-carousel mobile">
    <div class="mobile-carousel__container container">
        <img
             class="mobile-carousel__main-image"
             src="<?= $arResult['ELEMENTS'][0]['DETAIL_PICTURE_PATH'] ?>">
        <div class="mobile-carousel__list">
            <? foreach ($arResult['ELEMENTS'] as $ELEMENT) {
                ?><img  loading="lazy" class="mobile-carousel__list-image"
                       data-src="<?= $ELEMENT['DETAIL_PICTURE_PATH'] ?>" src="<?= $ELEMENT['PREVIEW_PICTURE_PATH'] ?>">
                <?
            } ?>
    </div>
    </div>
</section>
