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
            <span class="loader-text">digital-агенство</span>
        </div>
    </div>

 <?if(ERROR_404 != 'Y'):?>
    <div class="callback-content callback-content_fixed">
        <div class="callback-content_header">
            <span class="callback-content_close-btn"></span>
        </div>
        <div class="section-title">Обсудить проект</div>
        <form action="#" class="callback-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Имя">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" placeholder="Телефон">
            </div>
            <div class="form-group">
                <textarea class="form-control form-textarea" placeholder="Сообщение"></textarea>
            </div>
            <div class="wrapper_callback-form_submit red-btn red-btn_mod">
                <input type="submit" class="callback-form_submit-btn" value="Отправить">
                <span class="red-btn_icon"></span>
            </div>
            <div class="form-policy">Нажимая на кнопку, вы даете согласие на обработку персональных данных и
                соглашаетесь с политикой конфиденциальности
            </div>
        </form>
    </div>
    <header class="ui-header">
        <div class="container">
            <div class="head-logo">
                <a href="/">
                    <img data-src="<?= SITE_TEMPLATE_PATH ?>/img/static/logo.svg" class="head_first-img" alt="alt">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/logo-icon.svg" class="head_second-img" alt="alt">
                </a>
            </div>
            <div class="head_center-column">
                <div class="hamburger hamburger--spring">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <a href="" class="head_projects-btn">Проекты</a>
            </div>
            <a href="tel:+74012400512" class="head_phone-number">+7 (4012) 400-512</a>
        </div>
        <div class="dropdown-box">
            <div class="container">
                <div class="dropdown-box_header">
                    <a href="" class="dropdown-box_discuss-project js_discuss-project_2 ">Обсудить проект</a>
                </div>
                <ul class="dropdown-menu">
                    <li>
                        <a href=""><span class="menu-number">01</span><span class="menu-text">Проекты</span></a>
                    </li>
                    <li>
                        <a href=""><span class="menu-number">02</span><span class="menu-text">Услуги</span></a>
                        <ul class="dropdown-submenu">
                            <li><a href="">Разработка сайтов</a></li>
                            <li><a href="">Продвижение и реклама</a></li>
                            <li><a href="">Автоматизация</a></li>
                            <li><a href="">Обслуживание и развитие</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><span class="menu-number">03</span><span class="menu-text">О нас</span></a>
                    </li>
                    <li>
                        <a href=""><span class="menu-number">04</span><span class="menu-text">Контакты</span></a>
                    </li>
                </ul>
                <div class="tablet-small_visible">
                    <a href="" class="red-btn js_discuss-project_2">
                        <span class="red-btn_inner"><span class="red-btn_icon"></span>Обсудить проект</span>
                    </a>
                </div>
                <div class="dropdown-box_footer">
                    <div class="row">
                        <div class="col-md-5 right-column order-md-2">
                            <a href="tel:+74012400512" class="dropdown_phone-number">+7 (4012) 400-512</a> <br>
                            <a href="mailto:Info@webmedia39.ru" class="dropdown-email">Info@webmedia39.ru</a>
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