<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<section class="main-section section">
    <div class="main-section_bg" data-parallaxify-range-x="100" data-parallaxify-range-y="100">
        <div class="main-section_bg-inner" data-depth="0.6"></div>
    </div>
    <div class="section-inner main_section-inner">
        <div class="container">
            <span class="unified-section_subtitle  fadeInLeft wow" data-wow-duration=".8s"
                  data-wow-delay=".8s"><?= $arParams['TITLE_MAIN_BLOCK'] ?></span>
            <h1 class="main-section_title  fadeInLeft wow" data-wow-duration=".8s"
                data-wow-delay="1s"><?= $arParams['SUBTEXT_MAIN_BLOCK'] ?></h1>
            <a href="<?= $arParams['LINK_MAIN_BLOCK'] ?>" class="red-btn js_discuss-project  fadeInLeft wow"
               data-wow-duration=".8s" data-wow-delay="1.2s">
                <span class="red-btn_inner"><span
                            class="red-btn_icon"></span><?= $arParams['TEXT_LINK_MAIN_BLOCK'] ?></span>
            </a>
        </div>
    </div>
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
            "STRICT_SECTION_CHECK" => "N"
        )
    ); ?>
    <span class="arrow-next_btn"></span>
</section>