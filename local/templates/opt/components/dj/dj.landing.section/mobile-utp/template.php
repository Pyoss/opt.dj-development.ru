<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="mobile-utp" class="mobile-utp mobile">
    <h2 class="mobile-utp__title">С нами выгодно</h2>
    <div class="mobile-utp__container container">
        <div class="mobile-utp__list">
            <? foreach ($arResult['ELEMENTS'] as $ELEMENT) {

                ?>
                <div class="mobile-utp__list-item">
                    <img loading="lazy" class="mobile-utp__list-image"
                         src="<?= $ELEMENT['DETAIL_PICTURE_PATH'] ?>">
                    <div class="mobile-utp__list-name">
                        <span><?= $ELEMENT['NAME'] ?></span>
                    </div>
                </div>
                <?
            } ?>
        </div>
    </div>
</section>
