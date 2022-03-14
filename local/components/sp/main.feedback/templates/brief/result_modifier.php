<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

CModule::IncludeModule("iblock");


$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$arParams['INFOBLOCKID'], "CODE"=>[
    'SERVICES', 'PRICE', 'SOURCE'
]));
while($enum_fields = $property_enums->GetNext())
{
    $arResult['PROPERTY'][$enum_fields["PROPERTY_CODE"]][] = [
        'ID' => $enum_fields["ID"],
        'VALUE' => $enum_fields["VALUE"],
    ];

}
