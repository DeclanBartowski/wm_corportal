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
list($firstBlock, $secondBlock, $thirdBlock) = [
    array_filter(array_slice($arResult['ITEMS'], 0, 2)),
    array_filter(array_slice($arResult['ITEMS'], 2, 1)),
    array_filter(array_slice($arResult['ITEMS'], 3, 2)),
];
?>
<div class="quality-section section">
    <div class="container">
        <div class="row main-row">
            <div class="col-md-5">
                <span class="unified-section_subtitle fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".2s"><?=$arParams['TITLE_MAIN']?> <span
                            class="min"><?=$arParams['TITLE_SPAN']?></span></span>
                <div class="section-title fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".4s"><?=$arParams['SUBTITLE_MAIN']?> <span
                            class="min"><?=$arParams['SUBTITLE_SPAN']?></span> <?=$arParams['SUBTITLE_AFTER_SPAN']?>
                </div>
            </div>
            <div class="col-md-7">
                <div class="quality-section_header">
                    <div class="row quality-row">
                        <?
                        $wowDelay = ['.4s', '.6s'];
                        foreach ($firstBlock as $key => $arItem):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="col-sm-6 fadeInUp wow" data-wow-duration=".8s"
                                 data-wow-delay="<?= $wowDelay[$key] ?>">
                                <div class="quality-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <div class="quality-item_title">
                                        <? if (!empty($arItem["PROPERTIES"]['SVG']['VALUE'])): ?>
                                            <span class="item-icon">
                                            <img data-src="<?= CFile::GetPath($arItem["PROPERTIES"]['SVG']['VALUE']) ?>"
                                                 alt="alt">
                                        </span>
                                        <? endif; ?>
                                        <?= (!empty($arItem['PREVIEW_TEXT'])) ? $arItem['PREVIEW_TEXT'] : $arItem['NAME'] ?>
                                    </div>
                                    <p>
                                        <?= $arItem['DETAIL_TEXT'] ?>
                                    </p>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
            <? if (!empty($secondBlock)): ?>
                <div class="col-md-5 fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".2s">
                    <?
                    foreach ($secondBlock as $key => $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="quality-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="quality-item_title">
                                <? if (!empty($arItem["PROPERTIES"]['SVG']['VALUE'])): ?>
                                    <span class="item-icon">
                                            <img data-src="<?= CFile::GetPath($arItem["PROPERTIES"]['SVG']['VALUE']) ?>"
                                                 alt="alt">
                                        </span>
                                <? endif; ?>
                                <?= (!empty($arItem['PREVIEW_TEXT'])) ? $arItem['PREVIEW_TEXT'] : $arItem['NAME'] ?>
                            </div>
                            <p>
                                <?= $arItem['DETAIL_TEXT'] ?>
                            </p>
                        </div>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
            <? if (!empty($thirdBlock)): ?>
                <div class="col-md-7">
                    <div class="row quality-row">
                        <?
                        $wowDelay = ['.4s', '.6s'];
                        foreach ($thirdBlock as $key => $arItem):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="col-sm-6 fadeInUp wow" data-wow-duration=".8s"
                                 data-wow-delay="<?= $wowDelay[$key] ?>">
                                <div class="quality-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <div class="quality-item_title">
                                        <? if (!empty($arItem["PROPERTIES"]['SVG']['VALUE'])): ?>
                                            <span class="item-icon">
                                            <img data-src="<?= CFile::GetPath($arItem["PROPERTIES"]['SVG']['VALUE']) ?>"
                                                 alt="alt">
                                        </span>
                                        <? endif; ?>
                                        <?= (!empty($arItem['PREVIEW_TEXT'])) ? $arItem['PREVIEW_TEXT'] : $arItem['NAME'] ?>
                                    </div>
                                    <p>
                                        <?= $arItem['DETAIL_TEXT'] ?>
                                    </p>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
</div>
