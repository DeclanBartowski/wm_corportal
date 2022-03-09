<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


?>


</main>
<!-- end main-content -->
<footer class="main-footer">
    <div class="container">
        <div class="main-footer_content">
            <span class="unified-section_subtitle">Давайте Начнем уже сейчас !</span>
            <div class="main-footer_title-row">
                <div class="section-title">
                    Расскажите о вашем <span class="min">проекте</span>
                </div>
                <a href="" class="red-btn">
                    <span class="red-btn_inner"><span class="red-btn_icon"></span>Заполнить бриф</span>
                </a>
            </div>
            <ul class="main-footer_contact">
                <li><a href="tel:+74012400512" class="phone-number">+7 (4012) 400-512</a></li>
                <li>г. Калининград, Парковый переулок,7, <br>корпус 1, офис 2</li>
                <li><a href="mailto:Info@webmedia39.ru" class="footer-email">Info@webmedia39.ru</a></li>
            </ul>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "social",
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
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0=>"",1=>"",),
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
                "PROPERTY_CODE" => array(0=>"",1=>"",),
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
        );?>
    </div>
</footer>
<!-- end main-footer -->
<div class="scroll-to-top"></div>
</div>

</body>
</html>
