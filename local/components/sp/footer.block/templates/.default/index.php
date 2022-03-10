<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
$address = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_adress");
$email = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_email");
$phoneFormat = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_format");
$phone = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_original");
?>
<div class="main-footer_content">
    <span class="unified-section_subtitle"><?=$arParams['TITLE_MAIN_BLOCK']?></span>
    <div class="main-footer_title-row">
        <div class="section-title">
            <?=$arParams['SUBTEXT_MAIN_BLOCK']?><span class="min"><?=$arParams['SUBTEXT_MAIN_BLOCK_SPAN']?></span>
        </div>
        <a href="<?=$arParams['LINK_MAIN_BLOCK']?>" class="red-btn">
            <span class="red-btn_inner"><span class="red-btn_icon"></span><?=$arParams['TEXT_LINK_MAIN_BLOCK']?></span>
        </a>
    </div>
    <ul class="main-footer_contact">
        <li><a href="tel:<?=$phone?>" class="phone-number"><?=$phoneFormat?></a></li>
        <li><?=$address?></li>
        <li><a href="mailto:<?=$email?>" class="footer-email"><?=$email?></a></li>
    </ul>
</div>