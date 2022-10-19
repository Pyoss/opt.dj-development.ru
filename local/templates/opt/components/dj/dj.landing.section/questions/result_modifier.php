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

use DJScripts\ImgRef;

$is_mobile = isMobile();
if($is_mobile){
    $size_array =  array('width' => 450, 'height' => 450);
} else {
    $size_array =  array('width' => 1920, 'height' => 1920);
}

if ($is_mobile){
    $background_img = ImgRef::optimizeImg(getFileId($arParams['SECTION_BACKGROUND_MOBILE']), $size_array);
} else {
    $background_img = ImgRef::optimizeImg(getFileId($arParams['SECTION_BACKGROUND']), $size_array);
}
$arResult['background_img'] = $background_img['auto'];

