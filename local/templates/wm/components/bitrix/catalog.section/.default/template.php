<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);
$bxajaxid = CAjax::GetComponentID($component->__name, $component->__template->__name, $component->arParams['AJAX_OPTION_ADDITIONAL']);

?>
<div class="ajaxUpdate">

    <div class="row projects-row">
<?php
    foreach ($arResult['ITEMS'] as $key => $arItem):
?>
            <div class="col-md-6 fadeInUp wow" data-wow-duration=".8s" data-wow-delay="<?=($key%2 == 0) ? '.5s' : '.7s'?>">
                <div class="project-item" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                        <span class="project-item_header"><?=$arItem['PROPERTIES']["TYPE"]['VALUE']?></span>
                        <div class="project-item_footer">
                            <span class="project-item_name"><?=$arItem['NAME']?></span>
                            <span class="project-item_type"><?=$arItem['PREVIEW_TEXT']?></span>
                        </div>
                    </a>
                </div>
            </div>
<?endforeach;?>
    </div>
        <?if($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer<$arResult["NAV_RESULT"]->nEndPage):?>
        <div class="pagination">
            <div id="btn_<?=$bxajaxid?>" class="text-center">
                <a class="black-btn" data-ajax-id="<?=$bxajaxid?>" href="javascript:void(0)" data-show-more="<?=$arResult["NAV_RESULT"]->NavNum?>" data-next-page="<?=($arResult["NAV_RESULT"]->NavPageNomer + 1)?>" data-max-page="<?=$arResult["NAV_RESULT"]->nEndPage?>">
                    <span class="black-btn_inner"><span class="black-btn_icon"></span><?=GetMessage('CT_BCS_CATALOG_MESS_BTN_LAZY_LOAD')?></span>
                </a>
            </div>
        </div>
        <?endif?>

</div>