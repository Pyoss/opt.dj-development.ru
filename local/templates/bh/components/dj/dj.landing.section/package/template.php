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
<section class="package lazy" id="package">
    <div class="package__container container">

        <div class="package-list">
            <div class="package-list__title">Комплектация:</div>
            <ul>
                <li class="package-list__item" data-item-n="1">
                    <span class="hint-number">1</span>
                    Носик <br></li>
                <li class="package-list__item" data-item-n="2">
                    <span class="hint-number">2</span>
                    Быстросъем / 4 шт<br></li>
                <li class="package-list__item" data-item-n="3">
                    <span class="hint-number">3</span>
                    Холодильник 9 трубок 45 см<br>
                    <span class="package-list__item-feature"> - повышает производительность</span>
                    <span class="package-list__item-feature"> - экономит воду</span>
                    <span class="package-list__item-feature"> - произведен из экологичных сертифицированных материалов</span></li>

                <li class="package-list__item" data-item-n="4">
                    <span class="hint-number">4</span>
                    Хомут 2 дюйма / 11 шт<br></li>
                <li class="package-list__item" data-item-n="5">
                    <span class="hint-number">5</span>
                    Отвод 90 / 3 шт <br>
                    <span class="package-list__item-feature"> - позволяют  снизить высоту колонны при сохранении ее протяженности</span>
                </li>
                <li class="package-list__item" data-item-n="6">
                    <span class="hint-number">6</span>
                    Прокладка 2 дюйма / 11 шт<br></li>

                <li class="package-list__item" data-item-n="7">
                    <span class="hint-number">7</span>
                    Кран игольчатый <br></li>
                <li class="package-list__item" data-item-n="8">
                    <span class="hint-number">8</span>
                    Кран 3/4<br></li>
                <li class="package-list__item" data-item-n="9">
                    <span class="hint-number">9</span>
                    Узел отбора с диоптром 2 в 1 <br>
                    <span class="package-list__item-feature"> - подходит новичкам и профи</span>
                    <span class="package-list__item-feature"> - отбор по жидкости и по пару</span>
                    <span class="package-list__item-feature"> - позволяет легко получить любимые напитки: виски, джин, водку, коньяк, текилу, ром и т.д.
</span></li>
                <li class="package-list__item" data-item-n="10">
                    <span class="hint-number">10</span>
                    Дефлегматор 9 трубок 20 см<br></li>
                <li class="package-list__item" data-item-n="11">
                    <span class="hint-number">11</span>
                    Царга 50 см
                </li>
                <li class="package-list__item" data-item-n="12">
                    <span class="hint-number">12</span>
                    Утеплитель царги <br>
                    <span class="package-list__item-feature"> - уменьшает теплопотерю</span>
                    <span class="package-list__item-feature"> - ускоряет работу аппарата</span>
                    <span class="package-list__item-feature"> - экономит электроэнергию</span>
                </li>
                <li class="package-list__item" data-item-n="13">
                    <span class="hint-number">13</span>
                    Носик атмосферный<br></li>
                <li class="package-list__item" data-item-n="14">
                    <span class="hint-number">14</span>
                    Термометр / 3 шт<br></li>
                <li class="package-list__item" data-item-n="15">
                    <span class="hint-number">15</span>
                    Клапан сброса давления<br></li>
                <li class="package-list__item" data-item-n="16">
                    <span class="hint-number">16</span>
                    Фальшдно
                </li>
                <li class="package-list__item" data-item-n="17">
                    <span class="hint-number">17</span>
                    Куб HERO
                </li>
                <li class="package-list__item" data-item-n="18">
                    <span class="hint-number">18</span>
                    Цагра 50см с нипелем
                </li>
                <li class="package-list__item" data-item-n="19">
                    <span class="hint-number">19</span>
                    Сетка панченкова нерж
                </li>
                <li class="package-list__item" data-item-n="20">
                    <span class="hint-number">20</span>
                    Переходник на кран <br></li>

                <li class="package-list__item" data-item-n="21">
                    <span class="hint-number">21</span>
                    Кран 1/2<br></li>
                <li class="package-list__item" data-item-n="22">
                    <span class="hint-number">22</span>
                    Пневмошланг / 6м<br></li>

            </ul>
        </div>
        <div class="package-images">

            <img class="package-images__image package-images__image-carga" src="/upload/src/carga.png">
            <img class="package-images__image package-images__image-net" src="/upload/src/Panchenkova 3.png">
            <img class="package-images__image package-images__image-silicon" src="/upload/src/silicon.png">
            <img class="package-images__image package-images__image-bottom" src="/upload/src/bottom.png">
            <img class="package-images__image package-images__image-main" src="/upload/src/hero-main.png">
            <? for ($i = 1; $i < 23; ++$i): ?>
                <span class="package-images__hint hint-number package-images__hint-<?= $i ?>"
                      data-hint-n="<?= $i ?>"><?= $i ?></span>
            <? endfor; ?>


        </div>
    </div>
</section>