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
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
    <script>
        alert('<?=$arResult['OK_MESSAGE']?>');
    </script>
    <?
}
?>

<div class="contact-form_box">
    <div class="container">
        <div class="row">
            <div class="col-md-5 left-column">
                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/static/power.png" alt="alt">
            </div>
            <div class="col-md-7">
                <span class="unified-section_subtitle"><?=GetMessage('TITLE')?></span>
                <div class="section-title"><?=GetMessage('SUBTITLE')?></div>
                <form action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data" class="contact-form">
                    <?=bitrix_sessid_post()?>
                    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                    <div class="form-mod_group">
                        <label class="form-label"><?=GetMessage('NAME')?></label>
                        <input type="text" name="NAME" required class="form-mod_control">
                    </div>
                    <div class="form-mod_group">
                        <label class="form-label"><?=GetMessage('EMAIL')?></label>
                        <input type="email" name="EMAIL" required class="form-mod_control">
                    </div>
                    <div class="form-mod_group">
                        <label class="form-label"><?=GetMessage('PHONE')?></label>
                        <input type="tel" name="PHONE" required class="form-mod_control">
                    </div>
                    <div class="form-mod_group form-group_textarea form-mod_group-file">
                        <label class="form-label"><?=GetMessage('TASK')?></label>
                        <textarea name="TEXT" required class="form-mod_control form-mod_textarea"></textarea>
                        <div class="contact-form_file">
                            <label class="input-file">
				                  <span class="button">
				                    <input type="file" class="upload-file" name="file">
				                  </span><input class="input-file-text" placeholder="<?=GetMessage('FILE')?>">
                            </label>
                            <div class="upload-message_box"><span class="ico-check"></span><span class="upload-message_text"></span></div>
                        </div>
                    </div>

                    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
                        <div class="mf-captcha">
                            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                            <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
                        </div>
                    <?endif;?>

                    <div class="contact-form_footer">
                        <span class="form-policy"><?=GetMessage('PRIVACY')?></span>
                        <div class="wrapper_contact-form_submit red-btn">
                            <span class="red-btn_icon"></span>
                            <input type="submit" name="submit" class="contact-form_submit-btn" value="<?=GetMessage('SUBMIT')?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


