<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="why-us" class="why-us">
    <div class="why__container">
        <h2 class="why__title container">Почему мы</h2>
        <div class="why__features">
            <?foreach($arResult['ITEMS'] as $item):?>
            <div class="why__feature">
                <img src="<?=$item['IMG_PATH']?>" class="why__feature-icon">
                <svg  class="why__feature-background" xmlns="http://www.w3.org/2000/svg" width="220" height="242" viewBox="0 0 220 242" fill="none">
                    <path d="M20 72.3704L47.6923 20H116.923L200 169.63L172.308 222H103.077L20 72.3704Z" fill="#<?=$item['COLOR']?>"
                          stroke="#<?=$item['COLOR']?>" stroke-width="40" stroke-linejoin="round"/>
                    <path d="M33 71.5L57.0429 28H107.957L132 71.5L110.786 115H57.0429L33 71.5Z" fill="white"
                          stroke="white"
                          stroke-width="30" stroke-linejoin="round"/>
                </svg>
                <div class="why__text-container">
                    <div class="why__feature-text"><span><?=$item['TEXT']?></span></div>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>
