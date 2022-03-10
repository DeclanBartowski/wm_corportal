<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
$email = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_email");
$phoneFormat = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_format");
$phone = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_original");
?>

<a href="tel:<?= $phone ?>" class="dropdown_phone-number"><?= $phoneFormat ?></a> <br>
<a href="mailto:<?= $email ?>" class="dropdown-email"><?= $email ?></a>
