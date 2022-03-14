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

<div class="section-title"><?=GetMessage('TITLE')?></div>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="callback-form">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="<?=GetMessage('NAME')?>" required name="NAME">
    </div>
    <div class="form-group">
        <input type="tel" class="form-control" placeholder="<?=GetMessage('PHONE')?>" required name="PHONE">
    </div>
    <div class="form-group">
        <textarea class="form-control form-textarea" placeholder="<?=GetMessage('MESSAGE')?>" name="TEXT"></textarea>
    </div>
    <div class="wrapper_callback-form_submit red-btn red-btn_mod">
        <input type="submit" name="submit" class="callback-form_submit-btn" value="<?=GetMessage('SUBMIT')?>">
        <span class="red-btn_icon"></span>
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
    <div class="form-policy"><?=GetMessage('PRIVACY')?></div>
</form>
