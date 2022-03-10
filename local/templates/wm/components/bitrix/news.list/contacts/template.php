<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\PhoneNumber\Format;
use Bitrix\Main\PhoneNumber\Parser;

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
<div class="team-box fadeInUp wow" data-wow-duration=".8s" data-wow-delay="2.4s">
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="team-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <span class="team-item-title"><?= $arItem['NAME'] ?></span>
        <span class="team-item_name"><?= $arItem['PROPERTIES']['NAME']['VALUE'] ?></span>
        <? if (!empty($arItem['PROPERTIES']['EMAIL']['VALUE']) || !empty($arItem['PROPERTIES']['PHONE']['VALUE'])): ?>
            <ul class="team-item_contact">
                <? if (!empty($arItem['PROPERTIES']['EMAIL']['VALUE'])): ?>
                    <li><a href="mailto:<?= $arItem['PROPERTIES']['EMAIL']['VALUE'] ?>"
                           class="team-email"><?= $arItem['PROPERTIES']['EMAIL']['VALUE'] ?></a></li>
                <? endif; ?>
                <? if (!empty($arItem['PROPERTIES']['PHONE']['VALUE'])): ?>
                    <?
                    $parsedPhone = Parser::getInstance()->parse($arItem['PROPERTIES']['PHONE']['VALUE']);
                    ?>
                    <? if ($parsedPhone->getNumberType() == 'mobile'): ?>
                        <li><a href="tel:<?= $parsedPhone->format(Format::E164) ?>"
                               class="team-phone"><?= $arItem['PROPERTIES']['PHONE']['VALUE'] ?></a></li>
                    <? else: ?>
                        <li><?= $arItem['PROPERTIES']['PHONE']['VALUE'] ?></li>
                    <? endif; ?>
                <? endif; ?>
            </ul>
        <? endif; ?>
        <? if (!empty($arItem['PROPERTIES']['EMAIL']['VALUE'])): ?>
            <a href="mailto:<?= $arItem['PROPERTIES']['EMAIL']['VALUE'] ?>" class="team-item_write-btn"><?=GetMessage('CONTACT_MSG')?></a>
        <? endif; ?>
    </div>
<? endforeach; ?>
</div>