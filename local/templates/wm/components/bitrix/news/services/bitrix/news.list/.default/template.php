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
?>
<span class="unified-section_subtitle fadeInLeft wow" data-wow-duration=".8s"
      data-wow-delay=".8s"><?= GetMessage('TITLE_SERVICES') ?></span>
<h1 class="fadeInLeft wow" data-wow-duration=".8s" data-wow-delay="1s">
    <?= GetMessage('SUB_TITLE') ?>
    <span class="min"><?= GetMessage('SUB_TITLE_SPAN') ?></span>
</h1>
<div class="row service-row  fadeInUp wow" data-wow-duration=".8s" data-wow-delay="1.2s">
    <? foreach ($arResult['SECTIONS'] as $keySection => $arSection): ?>
        <div class="col-md-6">
            <div class="service-mod_item">
                <span class="service-mod_item-title">
                    <span class="item-number"><?= str_pad(++$keySection, 2, '0', STR_PAD_LEFT) ?></span>
                            <span class="text">
                                 <?= (!empty($arSection['DESCRIPTION']) ? $arSection['DESCRIPTION'] : $arSection['NAME']) ?>
                            </span>
                </span>
                <ul class="service-mod_menu">
                    <? foreach ($arResult['SECTION_ITEMS'][$arSection['ID']] as $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <?= $arItem['NAME'] ?>
                        </li>
                    <? endforeach; ?>
                </ul>
                <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="black-btn">
                    <span class="black-btn_inner"><span class="black-btn_icon"></span>Подробнее</span>
                </a>
            </div>
        </div>
    <? endforeach; ?>
</div>
