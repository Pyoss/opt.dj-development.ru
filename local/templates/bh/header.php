<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="https://use.typekit.net/tmh8swb.css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title><?= $APPLICATION->ShowTitle() ?></title>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBJST7Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?
    function getFileId($path){
        $path = explode('/', $path);
        unset($path[count($path) - 1]);
        unset($path[1]);;
        unset($path[0]);
        $res =  CFile::getList(array(), ['SUBDIR' => implode('/', $path)]);

        return $res -> fetch()['ID'];
    }

    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    use Bitrix\Main\Page\Asset;

    $APPLICATION->ShowHead();
    ?>
<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico?v=2" type="image/x-icon">

    <script src="//code.jivo.ru/widget/qoIGZGcD6D" async></script>

</head>
<body>
<header>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBJST7Z');</script>
<!-- End Google Tag Manager -->

    <?php

    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.6.0.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/image360.jquery.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.mask.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.lazy.min.js");

    $APPLICATION->ShowPanel();

    ?>

    <div class="header-container">
        <img src="/upload/src/logo.png" class="header-logo">
        <ul class="menu">
            <li class="desktop"><a href="#about">О нас</a></li>
            <li class="desktop"><a href="#package">Комплектация</a></li>
            <li class="desktop"><a href="#shipment">Доставка и оплата</a></li>
            <li><a class="phone-mobile" href="tel:88006007487">8 (800) 600-74-87</a></li>
        </ul>

        <a href="#offer" class="button desktop">Заказать</a>
        <i class="header-burger mobile" id="burger"><svg viewBox="0 0 100 80" width="40" height="40">
                <rect width="100" height="20" fill="#E9D4B4"></rect>
                <rect y="30" width="100" height="20" fill="#E9D4B4"></rect>
                <rect y="60" width="100" height="20" fill="#E9D4B4"></rect>
            </svg></i>
        <div class="mobile-menu mobile" id="burger-menu">
            <a href="#about">О нас</a>
            <a href="#package">Комплектация</a>
            <a href="#shipment">Доставка и оплата</a>
            <a href="#offer">Заказать</a>
        </div>
    </div>
</header>