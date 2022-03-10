<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
$address = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_adress");
$address = strip_tags($address);
$tgLink = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_tg");
$email = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_email");
$phoneFormat = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_format");
$phone = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_original");
?>
<div class="container">
    <span class="unified-section_subtitle fadeInLeft wow" data-wow-duration=".8s" data-wow-delay=".8s"><?=$arParams['TITLE_MAIN_BLOCK']?></span>
    <div class="section-title fadeInLeft wow" data-wow-duration=".8s" data-wow-delay="1s"><?=$arParams['SUBTEXT_MAIN_BLOCK']?></div>
    <div class="row contact-row">
        <div class="col-lg-6">
            <a href="tel:<?=$phone?>" class="contact_phone-number fadeInUp wow" data-wow-duration=".8s" data-wow-delay="1.2s"><?=$phoneFormat?></a> <br>
            <a href="javascript:void(0);" class="black-btn js_discuss-project fadeInUp wow" data-wow-duration=".8s" data-wow-delay="1.8s">
                <span class="black-btn_inner"><span class="black-btn_icon"></span>заказать звонок</span>
            </a>
        </div>
        <div class="col-lg-6">
            <div class="row top-row">
                <div class="col-md-7">
                    <span class="contact-adress fadeInUp wow" data-wow-duration=".8s" data-wow-delay="1.4s"><?=$address?></span>
                </div>
                <div class="col-md-5 text-right fadeInUp wow" data-wow-duration=".8s" data-wow-delay="1.6s"><a href="mailto:<?=$email?>" class="contact-email"><?=$email?></a></div>
            </div>
            <div class="row">
                <div class="col-md-5 order-md-2 text-right fadeInUp wow" data-wow-duration=".8s" data-wow-delay="2.2s"><a href="<?=$tgLink?>" class="contact-telegram">Написать в телеграм</a></div>
                <div class="col-md-7 fadeInUp wow" data-wow-duration=".8s" data-wow-delay="2s">

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "social",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(0 => "", 1 => "",),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "services",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(0 => "", 1 => "",),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "CLASS_UL" => 'contact_social-network',

                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "contacts",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => ".default",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0=>"",1=>"",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "999",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0=>"EMAIL",1=>"PHONE",2=>"NAME",3=>"",),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>
</div>
