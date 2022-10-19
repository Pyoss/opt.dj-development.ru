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
                <span>Контакты: Добрый жар / ооо феникс</span>
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
                       <?=$GLOBALS['phone']?>
                    </span></div>
            <div class="contacts__list-item contacts__item-messengers desktop">
                    <span>
                        Мессенджеры:
                    </span><br>
                <img class="contacts__messengers-items" src="/upload/src/opt/phone.png">
                <img class="contacts__messengers-items" src="/upload/src/opt/whatsapp.png">
                <img class="contacts__messengers-items" src="/upload/src/opt/telegram.png">
            </div>
        </div>

        <div class="contacts__column contacts__column-map">
            <div style="position:relative;overflow:hidden;"><a
                        href="https://yandex.kz/maps/162/almaty/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Алматы</a><a
                        href="https://yandex.kz/maps/162/almaty/house/Y08Yfg5mS0cPQFppfX5yeXxjYA==/?ll=76.901415%2C43.235735&utm_medium=mapframe&utm_source=maps&z=16.3"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Проспект Гагарина, 124 —
                    Яндекс Карты</a>
                <iframe src="https://yandex.kz/map-widget/v1/-/CCUZIBVZ9B" frameborder="1"
                        allowfullscreen="true" style="position:relative;"></iframe>
            </div>
        </div>
    </div>
</section>
