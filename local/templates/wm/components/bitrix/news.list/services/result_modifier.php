<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

$arResult['SECTIONS'] = \Bitrix\Iblock\SectionTable::getList(array(
    'filter' => array(
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    ),
    'select' => array('ID', 'NAME', 'DESCRIPTION'),
    'order' => ['SORT' => 'ASC']

))->fetchAll();


foreach ($arResult['ITEMS'] as $arItem) {
    $arResult['SECTION_ITEMS'][$arItem['IBLOCK_SECTION_ID']][] = $arItem;
}
