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

$is_mobile = isMobile();
if($is_mobile){
    $size_array =  array('width' => 1460, 'height' => 1460);
} else {
    $size_array =  array('width' => 3820, 'height' => 3820);
}

if ($is_mobile){
    $background_img = '/upload/src/braga-mobile.png';
} else {
    $background_img = '/upload/src/braga.png';
}
$arResult['background_img'] = $background_img;