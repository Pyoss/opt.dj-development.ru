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
    $resSection = \Bitrix\Iblock\SectionTable::getList(
        ['filter' => ['CODE' => $arParams['CATEGORY_CODE']], 'select' => ['ID']]
    );
    while ($arSection = $resSection->fetch()) {
        $resElements = \Bitrix\Iblock\SectionElementTable::getList(
            ['filter' => ['IBLOCK_SECTION_ID' => $arSection['ID']],
                'select' => [
                    'ID' => 'IBLOCK_ELEMENT_ID',
                    'ELEMENT_TEXT' => 'ELEMENT.DETAIL_TEXT',
                    'ELEMENT_NAME' => 'ELEMENT.NAME',
                    'ELEMENT_PICTURE' => 'ELEMENT.DETAIL_PICTURE'],
                'runtime' => [
                    'ELEMENT' => array(
                        'data_type' => '\Bitrix\Iblock\ElementTable',
                        'reference' => array('this.IBLOCK_ELEMENT_ID' => 'ref.ID'),
                        'join_type' => 'left'
                    )
                ]]
        );
        while ($arElement = $resElements->fetch()) {
            $arElement['PICTURE_PATH'] = CFile::GetPath($arElement['ELEMENT_PICTURE']);
            $arResult['ELEMENTS'][] = $arElement;
        }
    }
}
