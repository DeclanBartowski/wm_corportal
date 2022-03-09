<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<?$APPLICATION->IncludeComponent(
    "sp:main.block",
    ".default",
    Array(
        "COMPONENT_TEMPLATE" => ".default",
        "LINK_MAIN_BLOCK" => "/project/",
        "SUBTEXT_MAIN_BLOCK" => "Создаём и продвигаем сайты для бизнеса",
        "TEXT_LINK_MAIN_BLOCK" => "Обсудить проект",
        "TITLE_MAIN_BLOCK" => "Мы покоряем любые вершины!"
    )
);?>


    <section class="main-section section">
        <div class="main-section_bg" data-parallaxify-range-x="100" data-parallaxify-range-y="100"><div class="main-section_bg-inner" data-depth="0.6"></div></div>
        <div class="section-inner main_section-inner">
            <div class="container">
                <span class="unified-section_subtitle  fadeInLeft wow" data-wow-duration=".8s" data-wow-delay=".8s">Мы покоряем любые вершины!</span>
                <h1 class="main-section_title  fadeInLeft wow" data-wow-duration=".8s" data-wow-delay="1s">Создаём и продвигаем сайты для бизнеса</h1>
                <a href="" class="red-btn js_discuss-project  fadeInLeft wow" data-wow-duration=".8s" data-wow-delay="1.2s">
                    <span class="red-btn_inner"><span class="red-btn_icon"></span>Обсудить проект</span>
                </a>
            </div>
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
        <span class="arrow-next_btn"></span>
    </section>
    <!-- end main-section -->
    <div class="services-section white-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 service_left-column">
                    <span class="unified-section_subtitle  fadeInDown wow" data-wow-duration=".8s" data-wow-delay=".2s">Услуги</span>
                    <h2 class="fadeInDown wow" data-wow-duration=".8s" data-wow-delay=".2s">Мы digital-агентство полного цикла — <span class="min">создаем, продвигаем</span> и поддерживаем <span class="min">сайты</span></h2>
                    <a href="" class="black-btn tablet-small_hidden fadeInDown wow" data-wow-duration=".8s" data-wow-delay=".6s">
                        <span class="black-btn_inner"><span class="black-btn_icon"></span>Все услуги</span>
                    </a>
                </div>
                <div class="col-md-6 service_right-column">
                    <ul class="services-list">
                        <li class="service-item fadeInLeft wow" data-wow-duration=".8s" data-wow-delay=".4s">
                            <span class="service-menu_title"><span class="item-number">01</span> Web разработка</span>
                            <ul class="service_sub-menu">
                                <li><a href="">Интернет магазины</a></li>
                                <li><a href="">Корпоративные сайты</a></li>
                                <li><a href="">Сайты- каталоги</a></li>
                                <li><a href="">landing page</a></li>
                                <li><a href="">В2В порталы</a></li>
                                <li><a href="">Индивидуальные web проекты</a></li>
                            </ul>
                        </li>
                        <li class="service-item fadeInLeft wow" data-wow-duration=".8s" data-wow-delay=".6s">
                            <span class="service-menu_title"><span class="item-number">02</span><span class="text">Продвижение <span class="min">и реклама</span></span></span>
                            <ul class="service_sub-menu">
                                <li><a href="">SEO аудит</a></li>
                                <li><a href="">SEO-оптимизация</a></li>
                                <li><a href="">Комплексное продвижение</a></li>
                                <li><a href="">Контекстная реклама </a></li>
                                <li><a href="">SMM  продвижение</a></li>
                                <li><a href="">Таргетированная реклама</a></li>
                            </ul>
                        </li>
                        <li class="service-item fadeInLeft wow" data-wow-duration=".8s" data-wow-delay=".8s">
                            <span class="service-menu_title"><span class="item-number">03</span>Автоматизация</span>
                            <ul class="service_sub-menu">
                                <li><a href="">Внедрение Битрикс 24</a></li>
                                <li><a href="">Корпоративные сайты</a></li>
                                <li><a href="">Сайты- каталоги</a></li>
                                <li><a href="">landing page</a></li>
                                <li><a href="">В2В порталы</a></li>
                                <li><a href="">Индивидуальные web проекты</a></li>
                            </ul>
                        </li>
                        <li class="service-item fadeInLeft wow" data-wow-duration=".8s" data-wow-delay="1s">
                            <span class="service-menu_title"><span class="item-number">04</span><span class="text">Обслуживание <span class="min">и развитие</span></span></span>
                            <ul class="service_sub-menu">
                                <li><a href="">Интернет магазины</a></li>
                                <li><a href="">Корпоративные сайты</a></li>
                                <li><a href="">Сайты- каталоги</a></li>
                                <li><a href="">landing page</a></li>
                                <li><a href="">В2В порталы</a></li>
                                <li><a href="">Индивидуальные web проекты</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tablet-small_visible">
                        <a href="" class="black-btn fadeInDown wow" data-wow-duration=".8s" data-wow-delay=".6s">
                            <span class="black-btn_inner"><span class="black-btn_icon"></span>Все услуги</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end services-section -->
    <div class="case-section section">
        <div class="case-section_left-column">
            <div class="wrapper_case-section_content">
                <div class="case-slide">
                    <div class="case-section_content">
                        <span class="unified-section_subtitle">кейсы</span>
                        <div class="section-title">Мы верим, что творческий подход и нестандартное мышление это мощный инструмент способный изменить мир</div>
                        <div class="case-item_content">
                            <span class="case-item_number"><span class="white-digit">01</span> &#8212; 34</span>
                            <div class="right-cell">
                                <span class="case-item_name">Barbara</span>
                                <span class="case-item_site-type">Интернет-магазин профессиональной косметики</span>
                                <a href="" class="red-btn">
                                    <span class="red-btn_inner"><span class="red-btn_icon"></span>Смотреть</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="case-item_bg-mobile" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case-mobile/01.jpg)"></div>
                </div>
                <div class="case-slide">
                    <div class="case-section_content">
                        <div class="case-item_content">
                            <span class="case-item_number"><span class="white-digit">02</span> &#8212; 34</span>
                            <div class="right-cell">
                                <span class="case-item_name">Архитектура мебели</span>
                                <span class="case-item_site-type">Интернет-магазин мебели</span>
                                <a href="" class="red-btn">
                                    <span class="red-btn_inner"><span class="red-btn_icon"></span>Смотреть</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="case-item_bg-mobile" style="background-color: #000">
                        <span class="item-img"><img data-src="img/static/load.png" alt="alt"></span>
                    </div>
                </div>
                <div class="case-slide">
                    <div class="case-section_content">
                        <div class="case-item_content">
                            <span class="case-item_number"><span class="white-digit">03</span> &#8212; 34</span>
                            <div class="right-cell">
                                <span class="case-item_name">Завод Янтарь</span>
                                <span class="case-item_site-type">Продажа и аренда самолетов</span>
                                <a href="" class="red-btn">
                                    <span class="red-btn_inner"><span class="red-btn_icon"></span>Смотреть</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="case-item_bg-mobile" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case-mobile/03.jpg)"></div>
                </div>
                <div class="case-slide">
                    <div class="case-section_content">
                        <div class="case-item_content">
                            <span class="case-item_number"><span class="white-digit">04</span> &#8212; 34</span>
                            <div class="right-cell">
                                <span class="case-item_name">Solvemen</span>
                                <span class="case-item_site-type">Сonsulting company</span>
                                <a href="" class="red-btn">
                                    <span class="red-btn_inner"><span class="red-btn_icon"></span>Смотреть</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="case-item_bg-mobile" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case-mobile/04.jpg)"></div>
                </div>
                <div class="case-slide">
                    <div class="case-section_content">
                        <div class="case-item_content">
                            <span class="case-item_number"><span class="white-digit">05</span> &#8212; 34</span>
                            <div class="right-cell">
                                <span class="case-item_name">Рулонные шторы</span>
                                <span class="case-item_site-type">B2B личный кабинет </span>
                                <a href="" class="red-btn">
                                    <span class="red-btn_inner"><span class="red-btn_icon"></span>Смотреть</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="case-item_bg-mobile" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case-mobile/05.jpg)"></div>
                </div>
            </div>
        </div>
        <div class="case-section_right-column">
            <div class="сase-item_bg">
                <ul class="case-item_bg-content">
                    <div class="case-item_bg-item" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case/01.jpg)"></div>
                    <div class="case-item_bg-item" style="background-color: #000">
                        <span class="item-img"><img data-src="img/static/load.png" alt="alt"></span>
                    </div>
                    <div class="case-item_bg-item" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case/03.jpg)"></div>
                    <div class="case-item_bg-item" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case/04.jpg)"></div>
                    <div class="case-item_bg-item" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/bg/case/05.jpg)"></div>
                </ul>
            </div>
        </div>
    </div>


<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "about_us",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BEFORE_TITLE" => "немного о нас",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "CLASS_UL" => "Y",
        "COMPONENT_TEMPLATE" => "about_us",
        "DESCRIPTION_ABOUT" => "Мы-небольшая, но мощная команда создателей крутых сайтов, по-настоящему любящая свою работу.Мы начинаем каждый день с новых идей, помогаем друг другу расти и учиться друг у друга.Каждый проект должен быть усовершенствован до такой степени, что позволяет нам поддерживать репутацию надежного партнера и поднимать планку наших амбиций все выше и выше",
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
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "content",
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
        "PREVIEW_TEXT" => "клиенты",
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
        "STRICT_SECTION_CHECK" => "N",
        "TITLE_ABOUT" => "Команда - ",
        "TITLE_SPAN_ABOUT" => "это важно!"
    )
);?>

<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "PATH" => SITE_TEMPLATE_PATH . "/include/index/background.php",
        'AREA_FILE_SHOW' => 'file'
    )
); ?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "principe",
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
        "CLASS_UL" => "Y",
        "COMPONENT_TEMPLATE" => "principe",
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
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "6",
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
        "STRICT_SECTION_CHECK" => "N",
        "SUBTITLE_BLOCK" => "Хороший дизайн",
        "TITLE_BLOCK" => "принципы",
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "quality",
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
        "CLASS_UL" => "Y",
        "COMPONENT_TEMPLATE" => "quality",
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
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "content",
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
        "PROPERTY_CODE" => array(0=>"",1=>"SVG",2=>"",),
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
        "SUBTITLE_AFTER_SPAN" => "своей работы!",
        "SUBTITLE_MAIN" => "Мы ручаемся",
        "SUBTITLE_SPAN" => "за качество",
        "TITLE_MAIN" => "Почему вы выигрываете, заказывая",
        "TITLE_SPAN" => "создание сайтов в WebMedia ?"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "clients",
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
        "CLASS_UL" => "Y",
        "COMPONENT_TEMPLATE" => "clients",
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
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "content",
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
        "PREVIEW_TEXT" => "клиенты",
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
        "STRICT_SECTION_CHECK" => "N",
        "TITLE_BLOCK" => "Нам доверяют"
    )
);?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>