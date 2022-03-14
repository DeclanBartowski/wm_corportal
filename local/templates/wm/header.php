<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Config\Option;
use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html class="no-js" lang="<?= LANGUAGE_ID ?>">
<head>
    <style>body {
            opacity: 0;
        }</style>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?php
    $APPLICATION->ShowHead();
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
    Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.ico" rel="icon" type="image/png" />');
    Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/img/favicon.png" rel="icon" type="image/png" />');
    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="122x70" href="' . SITE_TEMPLATE_PATH . '/img/apple-touch-icon.png" />');

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/custom.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/custom.js');

    ?>


</head>
<body>
<?php
$APPLICATION->ShowPanel();
?>
<!--[if lt IE 10]>
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
    Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
    отображения сайтов.</p>
<![endif]-->

<div class="global-wrapper">
    <div class="wrapper-loader">
        <div class="logo-loader_content">
            <div class="logo-loader"></div>
        </div>
        <div class="wrapper_loader-text">
            <span class="loader-text">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "PATH" => SITE_TEMPLATE_PATH . "/include/header/digital.php",
                        'AREA_FILE_SHOW' => 'file'
                    )
                ); ?>
            </span>
        </div>
    </div>

 <?if(ERROR_404 != 'Y'):?>
    <div class="callback-content callback-content_mod callback-content_fixed">
        <div class="callback-content_header">
            <span class="callback-content_close-btn"></span>
        </div>

        <?$APPLICATION->IncludeComponent(
            "sp:main.feedback",
            "modal",
            Array(
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "COMPONENT_TEMPLATE" => "modal",
                "EMAIL_TO" => "admin@admin.admin",
                "EVENT_MESSAGE_ID" => array(0=>"12",),
                "FILE_SEND" => "N",
                "INFOBLOCKADD" => "Y",
                "INFOBLOCKID" => "12",
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "REQUIRED_FIELDS" => array(0=>"NONE",),
                "USE_CAPTCHA" => "N"
            )
        );?>


    </div>
    <header class="ui-header">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu_header",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "COMPONENT_TEMPLATE" => "menu_header",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "header_visible",
                    "USE_EXT" => "N"
                )
            );?>
        <div class="dropdown-box">
            <div class="container">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "multilvl_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "COMPONENT_TEMPLATE" => "vertical_multilevel",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => "",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "modal_menu",
                        "USE_EXT" => "Y"
                    )
                );?>
                <div class="dropdown-box_footer">
                    <div class="row">
                        <div class="col-md-5 right-column order-md-2">
                            <?$APPLICATION->IncludeComponent(
                                "sp:header.block",
                                ".default",
                                []
                            );?>
                        </div>
                        <div class="col-md-7">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "social",
                                array(
                                    "CLASS_UL" => 'dropdown_social-network',
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main-content">
<?endif;?>