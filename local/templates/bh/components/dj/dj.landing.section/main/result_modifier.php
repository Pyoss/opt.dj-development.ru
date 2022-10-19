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
foreach ($arParams as $item360name => $item360){
    if (strpos($item360name, 'SECTION_360') === false){
        continue;
    }
    $size_array =  array('width' => 800, 'height' => 800);
    $background_img = ImgRef::optimizeImg(getFileId($item360), $size_array);
    $arResult[$item360name] = $background_img['auto'];
}

if($is_mobile){
    $size_array =  array('width' => 1460, 'height' => 1460);
} else {
    $size_array =  array('width' => 3820, 'height' => 3820);
}
if ($is_mobile){
    $background_img = ImgRef::optimizeImg(getFileId($arParams['SECTION_BACKGROUND_MOBILE']), $size_array);
} else {
    $background_img = ImgRef::optimizeImg(getFileId($arParams['SECTION_BACKGROUND']), $size_array);
}
$arResult['background_img'] = $background_img['auto'];