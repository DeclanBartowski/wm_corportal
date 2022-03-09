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
$firstObject[] = array_shift($arResult['ITEMS']);
?>
<div class="about-us_section">
    <div class="container">
        <div class="about-us_header">
            <div class="row">
                <div class="col-md-5">
                    <span class="unified-section_subtitle fadeInLeft wow" data-wow-duration=".8s"
                          data-wow-delay=".7s"><?= $arParams['TITLE_ABOUT'] ?></span>
                    <div class="section-title fadeInLeft wow" data-wow-duration=".8s" data-wow-delay="1s">
                        <?= $arParams['SUBTITLE_ABOUT'] ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="right-column fadeInRight wow" data-wow-duration=".8s" data-wow-delay=".7s">
                        <p><?= $arParams['DESCRIPTION_ABOUT'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us_advantages">
            <div class="row">
                <div class="col-md-5">
                    <? foreach ($firstObject as $key => $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="advatage-mod_item advatage-mod_item-main"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <span class="advatage-mod_item-number"><span
                                        class="advatage-digit"><?= $arItem['NAME'] ?></span> </span>
                            <?= $arItem['PREVIEW_TEXT'] ?>
                        </div>
                    <? endforeach; ?>
                </div>

                <div class="col-md-7 right-column">
                    <div class="row">
                        <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="<?= ($key % 2 == 0) ? 'col-md-7 col-6' : 'col-md-5 col-6' ?>">
                                <div class="advatage-mod_item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <span class="advatage-mod_item-number"><span
                                                class="advatage-digit"><?= $arItem['NAME'] ?></span> </span>
                                    <?= $arItem['PREVIEW_TEXT'] ?>
                                </div>
                            </div>
                        <? endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="about-us_add">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-title"><?= $arParams['ABOUT_TITLE_FOOTER'] ?></div>
                </div>
                <div class="col-md-7">
                    <div class="right-column">
                        <p>
                            <?= $arParams['ABOUT_DESCRIPTION_FOOTER'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

