<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
$tree = CIBlockSection::GetTreeList(
    $arFilter = array('IBLOCK_ID' => $arParams['IBLOCK_ID']),
    $arSelect = array()
);
while ($section = $tree->GetNext()) {
    $arResult['SECTIONS'][] = $section;
}


foreach ($arResult['ITEMS'] as $arItem) {
    $arResult['SECTION_ITEMS'][$arItem['IBLOCK_SECTION_ID']][] = $arItem;
}
