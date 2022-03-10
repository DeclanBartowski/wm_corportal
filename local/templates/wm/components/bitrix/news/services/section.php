<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//todo Сделать страницу разделы услуги
$result = [];
$rsSections = CIBlockSection::GetList([],
    ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'CODE' => $arResult["VARIABLES"]["SECTION_CODE"]], false,
    array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME", "DESCRIPTION", "UF_*"));
if ($arSection = $rsSections->GetNext()) {
    $result = $arSection;
}
?>
<div class="privacy-section">
    <div class="container">
        <?=$result['~UF_DESCRIPTION']?>
    </div>
</div>