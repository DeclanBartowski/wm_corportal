<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
echo '<div class="contact-section">';
?>

<?$APPLICATION->IncludeComponent(
    "sp:main.block",
    "contact",
    Array(
        "SUBTEXT_MAIN_BLOCK" => "Обращайтесь к нам!",
        "TITLE_MAIN_BLOCK" => "Контакты"
    )
);?>

<?$APPLICATION->IncludeComponent(
    "sp:main.feedback",
    "contacts",
    Array(
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "COMPONENT_TEMPLATE" => "contacts",
        "EMAIL_TO" => "admin@admin.admin",
        "EVENT_MESSAGE_ID" => array(0=>"11",),
        "FILE_SEND" => "Y",
        "INFOBLOCKADD" => "Y",
        "INFOBLOCKID" => "10",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "REQUIRED_FIELDS" => array(0=>"NONE",),
        "USE_CAPTCHA" => "N"
    )
);?>


<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "PATH" => SITE_TEMPLATE_PATH . "/include/contacts/map.php",
        'AREA_FILE_SHOW' => 'file'
    )
); ?>








<?
echo '</div>';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>