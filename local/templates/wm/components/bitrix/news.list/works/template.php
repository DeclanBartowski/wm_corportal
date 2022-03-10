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
$wowDelay = [
    '.4s',
    '.6s',
    '.8s'
];
?>
<span class="unified-section_subtitle fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".2s"><?=GetMessage('TITLE_WORKS')?></span>
<div class="section-title fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".4s"><?=GetMessage('SUBTITLE_WORKS')?></div>
<div class="row work-row">
    <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="work-principle_item fadeInUp wow" data-wow-duration=".8s"
                 data-wow-delay="<?= $wowDelay[$key] ?>">
                <? if (!empty($arItem['PROPERTIES']['SVG']['VALUE'])): ?>
                    <span class="item-icon">
                <img data-src="<?= CFile::GetPath($arItem['PROPERTIES']['SVG']['VALUE']) ?>"
                     alt="<?= $arItem['NAME'] ?>">
            </span>
                <? endif; ?>
                <div class="item-desc">
                    <span class="item-title"><?= $arItem['NAME'] ?></span>
                    <p>
                        <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>
