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

$size_array =  array('width' => 1460, 'height' => 1460);
use DJScripts\ImgRef;


    $background_img_1 = ImgRef::optimizeImg(getFileId($arParams['BOX']), array('width' => 560, 'height' => 560));

    $background_img_2 = ImgRef::optimizeImg(getFileId($arParams['BOX_2']), array('width' => 350, 'height' => 350));

    $background_img_3 = ImgRef::optimizeImg(getFileId($arParams['BOX_3']), array('width' => 350, 'height' => 350));

$arResult['background_img_1'] = $background_img_1['auto'];
$arResult['background_img_2'] = $background_img_2['auto'];
$arResult['background_img_3'] = $background_img_3['auto'];