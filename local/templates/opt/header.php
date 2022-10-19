<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $APPLICATION->ShowTitle() ?></title>


    <?
    function getFileId($path)
    {
        $path = explode('/', $path);
        unset($path[count($path) - 1]);
        unset($path[1]);;
        unset($path[0]);
        $res = CFile::getList(array(), ['SUBDIR' => implode('/', $path)]);

        return $res->fetch()['ID'];
    }

    function isMobile()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    use Bitrix\Main\Page\Asset;

    $GLOBALS['phone'] = '89296052405';
    $APPLICATION->ShowHead();
    ?>
    <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico?v=2" type="image/x-icon">


</head>
<body>
<header>


    <?php

    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/webfontkit-geometria/stylesheet.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.6.0.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.mask.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.lazy.min.js");

    $APPLICATION->ShowPanel();

    ?>

    <div class="header">
        <a class="header__logo desktop" href="/">Добрый Жар Опт</a>
        <div class="header__mobile-logo mobile">
            <img class="header__mobile-icon" height="59" width="52" alt="Добрый Жар Лого" src="upload/src/opt/mobile_logo.png">
            <span class="header__mobile-logo-text">Добрый Жар</span>
            <span class="header__mobile-logo-text--big">Опт</span>
        </div>
        <div class="header__right-container">
            <a class="header__price opt-button desktop" href="#hero-block">Получить прайс-лист</a>
            <a class="header__login opt-button desktop" href="https://b2b.dobriy-jar.ru">Вход / Регистрация</a>
            <a class="header__phone" href="tel:<?= $GLOBALS['phone'] ?>"><?= $GLOBALS['phone'] ?></a>
            <button class="header__callback opt-button show-tel-popup desktop">Обратный звонок</button>
        </div>
        <div class="header__burger mobile">
            <svg viewBox="0 0 100 80" width="81" height="49" fill="white">
                <rect width="100" height="7"></rect>
                <rect y="37" width="100" height="7"></rect>
                <rect y="73" width="100" height="7"></rect>
            </svg>
        </div>
        <div class="burger-menu">
            <ul>
                <li><a href="#" class="show-price-popup">Получить прайс-лист</a></li>
                <li><a href="#" class="show-tel-popup">Обратный звонок</a></li>
            </ul
        </div>
    </div>
</header>