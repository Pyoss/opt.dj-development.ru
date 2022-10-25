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
                <svg  class="why__feature-background desktop" xmlns="http://www.w3.org/2000/svg" width="220" height="242" viewBox="0 0 220 242" fill="none">
                    <path d="M20 72.3704L47.6923 20H116.923L200 169.63L172.308 222H103.077L20 72.3704Z" fill="#<?=$item['COLOR']?>"
                          stroke="#<?=$item['COLOR']?>" stroke-width="40" stroke-linejoin="round"/>
                    <path d="M33 71.5L57.0429 28H107.957L132 71.5L110.786 115H57.0429L33 71.5Z" fill="white"
                          stroke="white"
                          stroke-width="30" stroke-linejoin="round"/>
                </svg>
                <svg class="why__feature-background mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 350">
                    <!-- Example of a polygon with the default fill -->

                    <polygon  fill="#<?=$item['COLOR']?>"
                              stroke="#<?=$item['COLOR']?>" stroke-linejoin="round" stroke-width="50" points="0,0 100,0 1135,0 1245,175 1150,350 0,350"/>
                    <polygon fill="white" stroke="white" stroke-linejoin="round" stroke-width="50" points="850,175 935,35 1115,35 1200,175 1125,315 935,315"/>

                </svg>
                <div class="why__text-container">
                    <div class="why__feature-text"><span><?=$item['TEXT']?></span></div>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>
