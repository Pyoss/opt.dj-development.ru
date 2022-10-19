<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
$arResult['ELEMENTS'][0]['ACTIVE'] = 'Y'
?>
<section id="opt-section" class="opt-section">
    <div class="opt-section__container container">
        <h2 class="opt-section__title">Наш ассортимент</h2>
        <div class="opt-section__buttons">
            <? foreach ($arResult['ELEMENTS'] as $element): ?>
                <div class="opt-section__button opt-button <?= $element['ACTIVE'] === 'Y' ? 'active' : '' ?>"
                     data-section-id="<?= $element['ID'] ?>"><?= $element['ELEMENT_NAME'] ?></div>

            <? endforeach; ?>
        </div>
        <? foreach ($arResult['ELEMENTS'] as $element): ?>
            <div class="opt-section__details <?= $element['ACTIVE'] === 'Y' ? 'active' : '" style="display:none' ?>"
                 data-section-id="<?= $element['ID'] ?>">
                <div class="opt-section__text"><span><?= $element['ELEMENT_TEXT'] ?></span></div>
                <div class="opt-section__image"><img src="<?= $element['PICTURE_PATH'] ?>"></div>
            </div>
        <? endforeach; ?>
    </div>
</section>
