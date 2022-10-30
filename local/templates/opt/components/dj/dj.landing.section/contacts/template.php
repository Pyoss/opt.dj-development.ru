<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 **/
?>
<section id="contacts" class="contacts">
    <div class="contacts-block__container container">
        <div class="contacts__column contacts__column-contacts">
            <div class="contacts__title">
                <span>Контакты:<br>Добрый жар / ооо феникс</span>
            </div>
            <div class="contacts__list-item contacts__item-address">
                    <span>
                        Офис:
                    </span>
                <br>
                <span>
                        г. Москва, 4-й Лучевой просек 4
                    </span>
            </div>
            <div class="contacts__list-item contacts__item-mail">
                    <span>
                        Почта:
                    </span>
                <br>
                <span>
                        Email: opt@dobriy-jar.ru
                    </span></div>
            <div class="contacts__list-item contacts__item-phone">
                    <span>
                        Телефон:
                    </span>
                <br>
                <span>
                       <?= $GLOBALS['phone'] ?>
                    </span></div>
            <div class="contacts__list-item contacts__item-messengers">
                    <span>
                        Мессенджеры:
                    </span>
                <a href="tel:<?=$GLOBALS['phone']?>"> <img class="contacts__messengers-items mobile" src="/upload/src/opt/phone.png"></a>
                <a href="<?=$GLOBALS['whatsapp_ref']?>"><img class="contacts__messengers-items" src="/upload/src/opt/whatsapp_ios.png"></a>
                <a href="<?=$GLOBALS['tg_ref']?>"><img class="contacts__messengers-items" src="/upload/src/opt/tg_ios.png"></a>
            </div>
        </div>

        <div class="contacts__column contacts__column-map">
            <div style="position:relative;overflow:hidden;"><a
                        href="https://yandex.kz/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a
                        href="https://yandex.kz/maps/213/moscow/house/4_y_luchevoy_prosek_4/Z04YcABiTEYGQFtvfXRxcH9lbQ==/?ll=37.674265%2C55.801220&utm_medium=mapframe&utm_source=maps&z=16.08"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">4-й Лучевой просек, 4 —
                    Яндекс Карты</a>
                <iframe src="https://yandex.kz/map-widget/v1/-/CCUZ6FeV~C" width="560" height="400" frameborder="1"
                        allowfullscreen="true" style="position:relative;"></iframe>
            </div>
        </div>
    </div>
</section>
