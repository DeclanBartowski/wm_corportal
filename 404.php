<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

    <div class="error-section">
        <div class="container">
            <div class="error-number"></div>
            <div class="section-title">Ошибка</div>
            <p>Извините, такой страницы нет</p>
            <a href="/" class="red-btn">
                <span class="red-btn_inner"><span class="red-btn_icon"></span>Перейти на главную</span>
            </a>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>