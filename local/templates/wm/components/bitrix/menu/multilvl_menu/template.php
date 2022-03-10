<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<div class="dropdown-box_header">
    <a href="javascript:void(0);" class="dropdown-box_discuss-project js_discuss-project_2 "><?=GetMessage('PROJECT_BTN')?></a>
</div>

<? if (!empty($arResult)): ?>
<ul class="dropdown-menu" id="vertical-multilevel-menu">
    <?
    $previousLevel = 0;
    $count = 1;
    foreach ($arResult  as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li <? if ($arItem["SELECTED"]): ?> class="active" <?endif;?>>
        <a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?>">
            <span class="menu-number"> <?= str_pad($count, 2, '0', STR_PAD_LEFT) ?></span>
            <span class="menu-text"><?= $arItem["TEXT"] ?></span>
            <? $count++; ?>
        </a>
        <ul class="dropdown-submenu">
            <? else: ?>
            <li>
                <a href="<?= $arItem["LINK"] ?>" class="parent<? if ($arItem["SELECTED"]): ?> item-selected<? endif ?>">2<?= $arItem["TEXT"] ?></a>
                <ul>
                    <? endif ?>

                    <? else: ?>

                        <? if ($arItem["PERMISSION"] > "D"): ?>

                            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                <li <? if ($arItem["SELECTED"]): ?> class="active" <?endif;?>><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?>">
                                        <span class="menu-number"> <?= str_pad($count, 2, '0', STR_PAD_LEFT) ?></span>
                                        <span class="menu-text"><?= $arItem["TEXT"] ?></span>
                                        <? $count++; ?>
                                    </a>
                                </li>
                            <? else: ?>
                                <li>
                                    <a href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]): ?> class="item-selected"<? endif ?>><?= $arItem["TEXT"] ?></a>
                                </li>
                            <? endif ?>
                        <? endif ?>
                    <?
                    endif ?>
                    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
                    <?endforeach ?>
                    <? if ($previousLevel > 1)://close last item tags?>
                        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                    <? endif ?>
                </ul>
                <? endif ?>

                <div class="tablet-small_visible">
                    <a href="javascript:void(0)" class="red-btn js_discuss-project_2">
                        <span class="red-btn_inner"><span class="red-btn_icon"></span><?=GetMessage('PROJECT_BTN')?></span>
                    </a>
                </div>
