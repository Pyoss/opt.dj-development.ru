<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");?>

<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "hero-block",
    array(
        "COMPONENT_TEMPLATE" => "hero-block",
        "SECTION_BACKGROUND" => "/upload/medialibrary/eb9/aw41tlum9t72570ud3rq5gkvhn8s8eb6/hero-background.png",
        "SECTION_BACKGROUND_MOBILE" => "/upload/medialibrary/eb9/aw41tlum9t72570ud3rq5gkvhn8s8eb6/hero-background.png",
        "SECTION_LOGO" => "/upload/medialibrary/0ea/sqd9c3atdi4g4x3exnysqhf658nqe42d/Логотип белый.png"
    ));?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.category",
    ".default",
    Array('CATEGORY_CODE' => $_GET['category'])
);?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "why_us",
    Array()
);?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "audience",
    Array()
);?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "opt-section",
    Array('CATEGORY_CODE' => $_GET['category'])
);?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "contacts",
    Array()
);?>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>