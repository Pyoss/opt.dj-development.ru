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


$ipropValues = new \Bitrix\Iblock\InheritedProperty\SectionValues($arResult['CATEGORY']['IBLOCK_ID'], $arResult['CATEGORY']['ID']);
$IPROPERTY  = $ipropValues->getValues();
$arResult['CATEGORY']['SEO'] = $IPROPERTY;
$APPLICATION -> setTitle($IPROPERTY['SECTION_META_TITLE']);
$APPLICATION->SetPageProperty("description", $IPROPERTY['SECTION_META_DESCRIPTION']);