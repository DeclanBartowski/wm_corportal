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
    '.8s',
    '1s'
];
?>

<div class="services-section white-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 service_left-column">
                <span class="unified-section_subtitle  fadeInDown wow" data-wow-duration=".8s" data-wow-delay=".2s"><?=$arParams['TITLE_SERVICE_BLOCK']?></span>
                <h2 class="fadeInDown wow" data-wow-duration=".8s" data-wow-delay=".2s"><?=$arParams['SUB_TITLE_1']?>
                    <span class="min"><?=$arParams['SUB_TITLE_2']?></span><?=$arParams['SUB_TITLE_3']?><span class="min"><?=$arParams['SUB_TITLE_4']?></span>
                </h2>
                <a href="<?=$arResult["LIST_PAGE_URL"]?>" class="black-btn tablet-small_hidden fadeInDown wow" data-wow-duration=".8s"
                   data-wow-delay=".6s">
                    <span class="black-btn_inner"><span class="black-btn_icon"></span><?=GetMessage('SERVICE_LINK_NAME')?></span>
                </a>
            </div>
            <div class="col-md-6 service_right-column">
                <ul class="services-list">
                    <? foreach ($arResult['SECTIONS'] as $keySection => $arSection): ?>
                        <li class="service-item fadeInLeft wow" data-wow-duration=".8s"
                            data-wow-delay="<?= $wowDelay[$keySection] ?>">
                        <span class="service-menu_title">
                            <span class="item-number"><?= str_pad(++$keySection, 2, '0', STR_PAD_LEFT) ?></span>
                            <span class="text">
                                 <?= (!empty($arSection['DESCRIPTION']) ? $arSection['DESCRIPTION'] : $arSection['NAME']) ?>
                            </span>
                        </span>
                            <ul class="service_sub-menu">
                                <? foreach ($arResult['SECTION_ITEMS'][$arSection['ID']] as $arItem): ?>
                                    <?
                                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
                                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
                                        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                    ?>
                                    <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                                    </li>
                                <? endforeach; ?>
                            </ul>
                        </li>
                    <? endforeach; ?>
                </ul>
                <div class="tablet-small_visible">
                    <a href="<?=$arResult["LIST_PAGE_URL"]?>" class="black-btn fadeInDown wow" data-wow-duration=".8s" data-wow-delay=".6s">
                        <span class="black-btn_inner"><span class="black-btn_icon"></span><?=GetMessage('SERVICE_LINK_NAME')?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


