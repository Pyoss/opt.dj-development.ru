<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionList $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 **/

CModule::IncludeModule('dj.imgref');

use DJScripts\ImgRef;


$is_mobile = isMobile();
if($is_mobile){
    $size_array =  array('width' => 600, 'height' => 600);
} else {
    $size_array =  array('width' => 1920, 'height' => 1920);
}

if ($is_mobile){
    $background_img = ImgRef::optimizeImg(getFileId($arParams['SECTION_BACKGROUND_MOBILE']), $size_array);
} else {
    $background_img = ImgRef::optimizeImg(getFileId($arParams['SECTION_BACKGROUND']), $size_array);
}
$logo = ImgRef::optimizeImg(getFileId($arParams['SECTION_LOGO']), array('width' => 279, 'height' => 55));
$arResult['background_img'] = $background_img['auto'];
$arResult['logo'] = $logo['auto'];