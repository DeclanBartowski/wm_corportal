<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<?php
$phoneFormat = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_format");
$phone = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_original");
?>
<div class="container">
<div class="head-logo">
    <a href="/">
        <img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/logo.svg" class="head_first-img" alt="alt">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/logo-icon.svg" class="head_second-img" alt="alt">
    </a>
</div>
<? if (!empty($arResult)): ?>
    <div class="head_center-column">
        <div class="hamburger hamburger--spring">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
        <?
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) {
                continue;
            }
            ?>
            <a href="<?= $arItem["LINK"] ?>" class="head_projects-btn"><?= $arItem["TEXT"] ?></a>
        <? endforeach ?>

    </div>
<? endif ?>
<a href="tel:<?= $phone ?>" class="head_phone-number"><?= $phoneFormat ?></a>

</div>