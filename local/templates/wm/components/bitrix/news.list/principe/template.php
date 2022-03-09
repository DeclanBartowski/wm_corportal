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
<div class="principles-section white-section section">
    <div class="container">
        <span class="unified-section_subtitle fadeInUp wow" data-wow-duration=".8s"
              data-wow-delay=".2s"><?= $arParams['TITLE_BLOCK'] ?></span>
        <div class="section-title fadeInUp wow" data-wow-duration=".8s"
             data-wow-delay=".4s"><?= $arParams['SUBTITLE_BLOCK'] ?></div>
        <div class="principles-section_content">
            <div class="row">
                <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="col-md-6 fadeInUp wow"
                         data-wow-duration=".8s"
                         data-wow-delay=".<? if ($key % 2 == 0): ?>2<? else: ?>4<? endif; ?>s"
                    >
                        <div class="principle-item">
                            <div class="principle-item_title"><span class="item-number"><?= str_pad(++$key, 2, '0',
                                        STR_PAD_LEFT) ?></span><?= $arItem['NAME'] ?></div>
                            <p>
                                <?= $arItem['PREVIEW_TEXT'] ?>
                            </p>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
            <div class="text-center fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".6s">
                <a href="<?= $arResult["LIST_PAGE_URL"] ?>" class="black-btn">
                    <span class="black-btn_inner"><span
                                class="black-btn_icon"></span><?= GetMessage('LINK_NAME') ?></span>
                </a>
            </div>
        </div>
    </div>
</div>
