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


if (\Bitrix\Main\Loader::includeModule('iblock')) {
    //Собираем элементы каталога
    $rsElements = \Bitrix\Iblock\SectionTable::getList(
        array('select' => ['NAME', 'PICTURE', 'CODE'],
            'filter' => array("IBLOCK_ID" => 4, "ACTIVE" => "Y")));
    while ($arElement = $rsElements->fetch()) {
        $arElement['PICTURE_PATH'] = CFile::GetPath($arElement['PICTURE']);
        $arResult['ELEMENTS'][] = $arElement;
    }

    // Собираем Бренды
    $brandsElements = \Bitrix\Iblock\ElementTable::getList(
        array('select' => ['NAME', 'PREVIEW_PICTURE'],
            'filter' => array("IBLOCK_ID" => 5, "ACTIVE" => "Y")));
    while ($arElement = $brandsElements->fetch()) {
        $arElement['PICTURE_PATH'] = CFile::GetPath($arElement['PREVIEW_PICTURE']);
        $arResult['BRANDS'][] = $arElement;
    }
}
