<?php
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
if (\Bitrix\Main\Loader::includeModule('iblock'))
{
    $rsElements = \Bitrix\Iblock\SectionTable::getList(
        array('select' => ['NAME', 'DETAIL_PICTURE', 'DESCRIPTION', 'ID', 'IBLOCK_ID'],
            'filter' => array("IBLOCK_ID" => 4, "ACTIVE" => "Y", 'CODE' => $arParams['CATEGORY_CODE'])));
    while ($arElement = $rsElements -> fetch()){
        $arElement['PICTURE_PATH'] = CFile::GetPath($arElement['DETAIL_PICTURE']);
        $arResult['CATEGORY'] = $arElement;
    }
}

$this -> includeComponentTemplate();
