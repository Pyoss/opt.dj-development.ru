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
<section class="poll lazy">
    <div class="poll__container container">
        <div class="poll__title">Ответьте на <b>3</b> простых вопроса</div>
        <div class="poll__comment">и мы подберем для вас подходящую комплектацию аппарата:</div>

        <div class="poll-questioner">
            <div class="poll-questioner__item" id="poll-question-1">

                <div class="poll-questioner__question"><b>1</b> Где вы собираетесь использовать аппарат?</div>
                <div class="poll-questioner__answers">
                    <ul class="list">
                        <li class="poll-questioner__answer">на даче</li>
                        <li class="poll-questioner__answer">в квартире</li>
                        <li class="poll-questioner__answer">в гараже</li>
                        <li class="poll-questioner__answer">другое место</li>
                    </ul>
                </div>
            </div>
            <div class="poll-questioner__item" id="poll-question-2" style="display: none">

                <div class="poll-questioner__question"><b>2</b> Из чего вы будете делать самогон?</div>
                <div class="poll-questioner__answers">
                    <ul class="list">
                        <li class="poll-questioner__answer">сахар</li>
                        <li class="poll-questioner__answer">ягоды/фрукты</li>
                        <li class="poll-questioner__answer">зерно</li>
                        <li class="poll-questioner__answer">другое</li>
                    </ul>
                </div>
            </div>
            <div class="poll-questioner__item" id="poll-question-3" style="display: none">

                <div class="poll-questioner__question"><b>3</b> Какие напитки будете готовить?</div>
                <div class="poll-questioner__answers">
                    <ul class="list">
                        <li class="poll-questioner__answer">самогон</li>
                        <li class="poll-questioner__answer">виски</li>
                        <li class="poll-questioner__answer">коньяк</li>
                        <li class="poll-questioner__answer">настойки</li>
                    </ul>
                </div>
            </div>
        </div>
        <button class="poll-button button" id="poll-button" >Далее</button>
    </div>
</section>