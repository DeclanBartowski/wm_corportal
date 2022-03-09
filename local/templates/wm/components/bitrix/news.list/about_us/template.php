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
    '.2s',
    '.4s',
    '.6s',
    '.8s'
];
?>
<div class="advantages-section white-section section">
    <div class="container">
        <div class="row advantages-section_header">
            <div class="col-md-5">
                <span class="unified-section_subtitle fadeInUp wow" data-wow-duration=".8s"
                      data-wow-delay=".2s"><?= $arParams['BEFORE_TITLE'] ?></span>
                <div class="section-title fadeInUp wow" data-wow-duration=".8s"
                     data-wow-delay=".4s"><?= $arParams['TITLE_ABOUT'] ?><span
                            class="min"><?= $arParams['TITLE_SPAN_ABOUT'] ?></span></div>
            </div>
            <div class="col-md-7">
                <div class="advantages-section_text fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".4s">
                    <p>
                        <?= $arParams['DESCRIPTION_ABOUT'] ?>
                    </p>
                </div>
            </div>
        </div>
        <ul class="advantages-box">
            <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="advantage-item fadeInUp wow" data-wow-duration=".8s" data-wow-delay="<?= $wowDelay[$key] ?>">
                    <div class="advantage-item_content" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                        <span class="advantage-item_number"><?= $arItem['NAME'] ?></span>
                        <span class="text"><?= $arItem['PREVIEW_TEXT'] ?></span>
                    </div>
                </li>
            <? endforeach; ?>
        </ul>
        <div class="text-center fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".4s">
            <a href="<?= $arResult["LIST_PAGE_URL"] ?>" class="black-btn">
                <span class="black-btn_inner"><span class="black-btn_icon"></span><?= GetMessage('ABOUT_LINK') ?></span>
            </a>
        </div>
    </div>
</div>


