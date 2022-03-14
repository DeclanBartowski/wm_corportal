<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бриф");
?>

<?$APPLICATION->IncludeComponent(
    "sp:main.feedback",
    "brief",
    Array(
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "COMPONENT_TEMPLATE" => "brief",
        "EMAIL_TO" => "admin@admin.admin",
        "EVENT_MESSAGE_ID" => array(0=>"13",),
        "FILE_SEND" => "N",
        "INFOBLOCKADD" => "Y",
        "INFOBLOCKID" => "8",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "REQUIRED_FIELDS" => array(0=>"NONE",),
        "USE_CAPTCHA" => "N"
    )
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>