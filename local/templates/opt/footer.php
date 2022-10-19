<footer>
    <div class="footer__container container desktop">
        <div class="footer__logo">
            <img src="/upload/src/opt/footer_logo.png" class="footer__logo">
        </div>
        <div class="footer__menu">
            <span class="footer__menu-item">Главная</span>
            <span class="footer__menu-item">О компании</span>
            <span class="footer__menu-item">Контакты</span>
        </div>
        <div class="footer__additions">
            <span class="footer__additions-item">Политика конфиденциальности</span>
        </div>
        <div class="footer__contacts">
            <div class="footer__contacts-phone"><?= $GLOBALS['phone'] ?></div>
            <div class="footer__contacts-button opt-button show-tel-popup">Заказать звонок</div>
            <a href="https://b2b.dobriy-jar.ru">
                <div class="footer__contacts-button opt-button">Вход в личный кабинет</div>
            </a>
        </div>
    </div>

    <div class="mobile-contact mobile">
        <img class="mobile-contacts__picture" src="/upload/src/opt/email.png">
    </div>

    <!-- Popups --!>
    <div class="popup-phone" id="phone-popup" style="display:none;">
        <span class="popup-phone__text">Оставьте ваш телефон и менеджер перезвонит Вам<br> в ближайшее время</span>
        <input type="tel" class="popup-phone__input tel tel-mask" id='popup-phone-input'
               placeholder="+7 (000) 000-00-00">
        <button class="popup-phone__button opt-button send-tel" data-phone-input='popup-phone-input'
                id="tel-popup-button">Отправить
        </button>
    </div>

    <div class="thanks-popup" id="thanks-popup" style="display:none;">
        Спасибо, <br> Ваш личный менеджер <br> перезвонит Вам <br> в ближайшее время
    </div>
    <div class="popup-price" id="price-popup" style="display:none;">
        <span class="popup-phone__text">Оставьте ваши контакты</span>
        <input type="email" class="popup-mail__input mail" id='price-tel-input' placeholder="email@mail.ru">
        <input type="tel" class="popup-phone__input tel tel-mask" id='price-phone-input'
               placeholder="+7 (000) 000-00-00">
        <button class="popup-phone__button opt-button get-price" data-phone-input='price-phone-input'
                id="tel-price-button">Получить прайс-лист
        </button>
    </div>
    <div class="mobile-contacts__popup" id="mobile-contacts" style="display:none;">
        <div class="popup-phone__button opt-button show-tel-popup">Обратный звонок</div>
        <a href="tel:<?=$GLOBALS['phone']?>"><?=$GLOBALS['phone']?><div class="mobile-contacts__phone"></div></a>
        <div class="mobile-contacts__messengers">
            <img class="mobile-contacts__messengers-items" src="/upload/src/opt/phone.png">
            <img class="mobile-contacts__messengers-items" src="/upload/src/opt/whatsapp.png">
            <img class="mobile-contacts__messengers-items" src="/upload/src/opt/telegram.png">
        </div>
    </div>
    <div class="thanks-popup" id="error-msg" style="display:none;"><span></span></div>
</footer>