<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arTemplateParameters = array();
for($i = 1; $i < 13; $i++){

    $arTemplateParameters['SECTION_360_' . $i] = array(
        "NAME" => 'Изображение 360 ' . $i,
        "TYPE" => "FILE",
        "FD_TARGET" => "F",
        "FD_EXT" => array('png', 'jpg', 'jpeg', 'gif'),
        "FD_UPLOAD" => true,
        "MULTIPLE" => "Y",
        "FD_USE_MEDIALIB" => true,
        "FD_MEDIALIB_TYPES" => Array('image')
    );
}

$arTemplateParameters['SECTION_BACKGROUND'] = array(
    "NAME" => 'Фон секции',
    "TYPE" => "FILE",
    "FD_TARGET" => "F",
    "FD_EXT" => array('png', 'jpg', 'jpeg', 'gif'),
    "FD_UPLOAD" => true,
    "FD_USE_MEDIALIB" => true,
    "FD_MEDIALIB_TYPES" => Array('image')
);

$arTemplateParameters['SECTION_BACKGROUND_MOBILE'] = array(
    "NAME" => 'Фон секции мобильный',
    "TYPE" => "FILE",
    "FD_TARGET" => "F",
    "FD_EXT" => array('png', 'jpg', 'jpeg', 'gif'),
    "FD_UPLOAD" => true,
    "FD_USE_MEDIALIB" => true,
    "FD_MEDIALIB_TYPES" => Array('image')
);
