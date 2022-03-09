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
$count = count($arResult['ITEMS']);
?>
<? if(!empty($arResult["ITEMS"])):?>

<div class="case-section section">
    <div class="case-section_left-column">
        <div class="wrapper_case-section_content">
            <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                    array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="case-slide">
                    <div class="case-section_content">
                        <? if ($key == 0): ?>
                            <span class="unified-section_subtitle"><?=$arParams['CASES_TITLE']?></span>
                            <div class="section-title"><?=$arParams['CASES_DESCRIPTION']?></div>
                        <? endif; ?>
                        <div class="case-item_content">
                            <span class="case-item_number"><span class="white-digit"><?= str_pad(++$key, 2, '0',
                                        STR_PAD_LEFT) ?></span> &#8212; <?= str_pad($count, 2, '0', STR_PAD_LEFT) ?></span>
                            <div class="right-cell">
                                <span class="case-item_name"
                                      id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?= $arItem['NAME'] ?></span>
                                <span class="case-item_site-type"><?= $arItem['PREVIEW_TEXT'] ?></span>
                                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="red-btn">
                                    <span class="red-btn_inner"><span class="red-btn_icon"></span><?=GetMessage('CASES_DETAIL_PAGE')?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <? if (!empty($arItem['PROPERTIES']['MOBILE_PREVIEW']['VALUE'])): ?>
                        <div class="case-item_bg-mobile"
                             style="background-image:url(<?= CFile::GetPath($arItem['PROPERTIES']['MOBILE_PREVIEW']['VALUE']) ?>)"></div>
                    <? else: ?>
                        <div class="case-item_bg-mobile" style="background-color: #000">
                            <span class="item-img"><img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/load.png"
                                                        alt="alt"></span>
                        </div>
                    <? endif; ?>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <div class="case-section_right-column">
        <div class="сase-item_bg">
            <ul class="case-item_bg-content">
                <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                    <? if (!empty($arItem['PROPERTIES']['BIG_PREVIEW']['VALUE'])): ?>
                        <div class="case-item_bg-item"
                             style="background-image:url(<?= CFile::GetPath($arItem['PROPERTIES']['BIG_PREVIEW']['VALUE']) ?>)"></div>
                    <? else: ?>
                        <div class="case-item_bg-item" style="background-color: #000">
                    <span class="item-img"><img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/load.png"
                                                alt="alt"></span>
                        </div>
                    <? endif; ?>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<?endif;?>