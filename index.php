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
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"price-block", 
	array(
		"COMPONENT_TEMPLATE" => "price-block",
		"SECTION_BACKGROUND" => "/upload/medialibrary/eb9/aw41tlum9t72570ud3rq5gkvhn8s8eb6/hero-background.png",
		"SECTION_BACKGROUND_MOBILE" => "/upload/medialibrary/e88/32eqedtr2ll677mestuew9gf1v8xqehp/logo_price.png",
		"SECTION_LOGO" => "/upload/medialibrary/0ea/sqd9c3atdi4g4x3exnysqhf658nqe42d/Логотип белый.png"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "opt-catalog",
    Array()
);?>
<?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"utp", 
	array(
		"COMPONENT_TEMPLATE" => "utp",
		"SECTION_BACKGROUND" => "/upload/medialibrary/950/kbjvell2lor8j66zmnaay7s9g0pfz7z8/features.png",
		"SECTION_BACKGROUND_MOBILE" => "/upload/medialibrary/317/uzto98bwfd1lo5rm1zd81khldt8b3ss7/features_background_mobile.png"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section",
	"mobile-utp",
	Array()
);?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "steps",
    Array()
);?>
<?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section", 
	"questions", 
	array(
		"COMPONENT_TEMPLATE" => "questions",
		"SECTION_BACKGROUND" => "/upload/medialibrary/f06/klyqtgwcwaqs2s55bh8fz71pjdr1jetc/_Группа_.png",
		"SECTION_BACKGROUND_MOBILE" => "/upload/medialibrary/f06/klyqtgwcwaqs2s55bh8fz71pjdr1jetc/_Группа_.png"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"dj:dj.landing.section",
	"mobile-carousel",
	Array()
);?>
<?$APPLICATION->IncludeComponent(
    "dj:dj.landing.section",
    "contacts",
    Array()
);?>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>