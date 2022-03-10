<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$aMenuLinksExt =  $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    Array(
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DEPTH_LEVEL" => "1",
        "DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_ID#",
        "IBLOCK_ID" => "3",
        "IBLOCK_TYPE" => "content",
        "ID" => $_REQUEST["ID"],
        "IS_SEF" => "N",
        "SECTION_PAGE_URL" => "#SECTION_CODE#/",
        "SECTION_URL" => "",
        "SEF_BASE_URL" => "/services/"
    )
);
$aMenuLinks = array_merge([], $aMenuLinksExt);
