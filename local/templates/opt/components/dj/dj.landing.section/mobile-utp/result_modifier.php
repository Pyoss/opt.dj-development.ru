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
    $rsElements = \Bitrix\Iblock\ElementTable::getList(
        array('select' => ['NAME', 'DETAIL_PICTURE'],
            'filter' => array("IBLOCK_ID" => 7, "ACTIVE" => "Y")));
    while ($arElement = $rsElements->fetch()) {
        $arElement['DETAIL_PICTURE_PATH'] = CFile::GetPath($arElement['DETAIL_PICTURE']);
        $arResult['ELEMENTS'][] = $arElement;
    }

}
