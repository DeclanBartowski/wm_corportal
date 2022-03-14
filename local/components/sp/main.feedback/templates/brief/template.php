<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$phoneFormat = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_format");
$phone = COption::GetOptionString("tq.tools", "tq_module_param_obshchie_nastroyki_phone_original");
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	?>

    <script>
        $.fancybox.open($('#letter-2'));
    </script>
    <?php
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
    <script>
        $.fancybox.open($('#letter'));
        $('input[type="tel"]').inputmask("+7 (999) 999 99 99", {
            "clearIncomplete": true,
            showMaskOnHover: false,
        });
        $('.form-mod_control').each(function(i) {
            $(this).val('');
        });
        $('.form-group').removeClass('focus');
        lazyLoad($('body'));
    </script>
    <?
}
?>

<div class="brief-section">
    <div class="container">
        <div class="brief-section_header">
            <div class="row">
                <div class="col-md-5"><div class="section-title"><?=GetMessage('TITLE')?></div></div>
                <div class="col-md-7"><?=GetMessage('SUBTITLE')?><a href="tel:<?=$phone?>"><?=$phoneFormat?></a>
                </div>
            </div>
        </div>
        <form class="row" action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data">
            <?=bitrix_sessid_post()?>
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <div class="col-lg-5 brief_right-column">
                <div class="brief-item">
                    <div class="brief-section_subtitle"><?=GetMessage('Услуги')?></div>
                    <ul class="brief-select_options-list js_brief-list">
                        <?foreach ($arResult['PROPERTY']['SERVICES'] as $item):?>
                            <li>
                                <label class="unified-checkbox">
                                    <input  type="checkbox" name="SERVICES[]" value="<?=$item['ID']?>">
                                    <span class="text"><?=$item['VALUE']?></span>
                                </label>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
                <div class="brief-item">
                    <div class="brief-section_subtitle"><?=GetMessage('PRICE')?></div>
                    <ul class="brief-select_options-list js_brief-list_2">
                        <?foreach ($arResult['PROPERTY']['PRICE'] as $item):?>
                            <li>
                                <label class="unified-radio">
                                    <input  type="radio" name="PRICE" value="<?=$item['ID']?>">
                                    <span class="text"><?=$item['VALUE']?></span>
                                </label>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
                <div class="brief-item">
                    <div class="brief-section_subtitle"><?=GetMessage('SOURCE')?></div>
                    <ul class="brief-select_options-list js_brief-list">
                        <?foreach ($arResult['PROPERTY']['SOURCE'] as $item):?>
                            <li>
                                <label class="unified-checkbox">
                                    <input  type="checkbox" name="SOURCE[]" value="<?=$item['ID']?>">
                                    <span class="text"><?=$item['VALUE']?></span>
                                </label>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div  class="brief-form">
                    <div class="brief-section_subtitle subtitle-mod"><?=GetMessage('TASK_TITLE')?></div>
                    <div class="form-mod_group form-mod_group-task form-group_textarea">
                        <label class="form-label"><?=GetMessage('TASK')?></label>
                        <input type="text" class="form-mod_control" name="TEXT">
                    </div>
                    <div class="brief-form_file-box">
                        <label class="input-file input-file_mod">
		                  <span class="button">
		                    <input type="file" class="upload-file" name="file">
		                  </span><input class="input-file-text" placeholder="<?=GetMessage('FILE')?>">
                        </label>
                        <div class="upload-message_box"><span class="ico-check"></span><span class="upload-message_text"></span></div>
                    </div>
                    <div class="brief-section_subtitle subtitle-mod"><?=GetMessage('CONTACT_DATA')?></div>
                    <div class="form-mod_group">
                        <label class="form-label"><?=GetMessage('NAME')?></label>
                        <input type="text" name="NAME" class="form-mod_control" required>
                    </div>
                    <div class="form-mod_group">
                        <label class="form-label"><?=GetMessage('EMAIL')?></label>
                        <input type="email" name="EMAIL" class="form-mod_control" required>
                    </div>
                    <div class="form-mod_group">
                        <label class="form-label"><?=GetMessage('COMPANY')?></label>
                        <input type="text" name="COMPANY" class="form-mod_control">
                    </div>
                    <div class="form-mod_group">
                        <label class="form-label"><?=GetMessage('PHONE')?></label>
                        <input type="tel" name="PHONE" class="form-mod_control" required>
                    </div>
                    <div class="brief-form_footer">
                        <span class="form-policy">
                            <?=GetMessage("RULES", Array ("#PERSONAL#" => "/personal/", '#POLITIC#' => '/politic/'))?>
                        </span>
                        <div class="wrapper_brief-form_submit red-btn red-btn_mod">
                            <span class="red-btn_icon"></span>
                            <input type="submit" name="submit" class="brief-form_submit-btn" value="<?=GetMessage('SUBMIT')?>">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



