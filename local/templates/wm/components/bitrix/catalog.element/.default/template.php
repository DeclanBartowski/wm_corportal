<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$color = $arResult['PROPERTIES']["COLOR"]['VALUE'];
$reviewTab = [
    'POSITION',
    'FIO',
    'TEXT_REVIEW',
    'IMG_REVIEW'
];
$aboutProjectTab = ['CUSTOMER', 'ABOUT_PROJECT', 'TASK', 'SOLUTION', 'DETAIL_PROJECY', 'WEBSITE'];
$resultProjectTab = [
    'RESULTAT_2_BLOCK',
    'RESULTAT_3_BLOCK',
    'RESULTAT_4_BLOCK',
    'RESULTAT_5_BLOCK',
    'RESULTAT_1_BLOCK'
];
$reviewTabStatus = false;
$aboutTabStatus = false;
$resultTabStatus = false;

foreach ($reviewTab as $item) {
    $property = $arResult['PROPERTIES'][$item];
    if ($property['PROPERTY_TYPE'] == 'F' && !empty($property['VALUE']['TEXT'])) {
        $reviewTabStatus = true;
    }
    if (!empty($property['VALUE'])) {
        $reviewTabStatus = true;
    }
}


foreach ($aboutProjectTab as $item) {
    $property = $arResult['PROPERTIES'][$item];
    if ($property['PROPERTY_TYPE'] == 'F' && !empty($property['VALUE']['TEXT'])) {
        $aboutTabStatus = true;
    }
    if (!empty($property['VALUE'])) {
        $aboutTabStatus = true;
    }
}

$active = false;
$isVisible = false;


foreach ($resultProjectTab as $item) {
    $property = $arResult['PROPERTIES'][$item]['VALUE'];
    foreach ($property as $prop) {
        if (!empty($prop)) {
            $resultTabStatus = true;
        }
    }
}

if (!empty($arResult['PROPERTIES']["RESULTAT_6_BLOCK"]["VALUE"]['TEXT'])) {
    $resultTabStatus = true;
}
?>

<section class="project-detailed_section">
    <div class="project-detailed_header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left-column">
                    <span class="unified-section_subtitle fadeInLeft wow" data-wow-duration=".8s"
                          data-wow-delay=".5s"><?= $arResult['PROPERTIES']['TYPE']['VALUE'] ?></span>
                    <h1 class="project-detailed_title fadeInLeft wow" data-wow-duration=".8s"
                        data-wow-delay=".8s"><?= $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"] ?></h1>
                    <p class="fadeInLeft wow" data-wow-duration=".8s"
                       data-wow-delay="1s"><?= $arResult['DETAIL_TEXT'] ?></p>
                </div>
                <? if (!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
                    <div class="col-md-6 right-column">
                        <img data-src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"
                             alt="<?= $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"] ?>">
                    </div>
                <? endif; ?>
            </div>
        </div>
    </div>
    <? if ($aboutTabStatus || $resultTabStatus || $reviewTabStatus): ?>
        <div class="project-detailed_body tab-container">
            <div class="container">
                <div class="wrapper-project_tab-names">
                    <ul class="project_tab-names">
                        <? if ($aboutTabStatus): ?>
                            <li class="tab <? if (!$active): ?>active<? $active = true;endif; ?>"><?= GetMessage('ABOUT_PROJECT') ?>
                                <span class="plus-icon">&#43;</span></li>
                        <? endif; ?>
                        <? if ($resultTabStatus): ?>
                            <li class="tab <? if (!$active): ?>active<? $active = true;endif; ?>"><?= GetMessage('RESULT_PROJECT') ?>
                                <span class="plus-icon">&#43;</span></li>
                        <? endif; ?>

                        <? if ($reviewTabStatus): ?>
                            <li class="tab <? if (!$active): ?>active<? $active = true;endif; ?>"><?= GetMessage('REVIEW_PROJECT') ?>
                                <span class="plus-icon">&#43;</span></li>
                        <? endif; ?>
                    </ul>
                </div>
            </div>
            <? if ($aboutTabStatus): ?>
                <div class="tab-item <? if (!$isVisible): ?>is-visible<? $isVisible = true;endif; ?>">
                    <div class="container">
                        <?

                        $aboutProject = ['CUSTOMER', 'ABOUT_PROJECT', 'TASK', 'SOLUTION', 'DETAIL_PROJECY', 'WEBSITE'];
                        ?>
                        <table class="about-project-table">
                            <? if (!empty($arResult['PROPERTIES']['CUSTOMER']['VALUE'])): ?>
                                <tr>
                                    <td><?= $arResult['PROPERTIES']['CUSTOMER']['NAME'] ?></td>
                                    <td><?= $arResult['PROPERTIES']['CUSTOMER']['VALUE'] ?></td>
                                </tr>
                            <? endif; ?>

                            <? if (!empty($arResult['PROPERTIES']['ABOUT_PROJECT']['VALUE']["TEXT"])): ?>
                                <tr>
                                    <td><?= $arResult['PROPERTIES']['ABOUT_PROJECT']['NAME'] ?></td>
                                    <td><?= $arResult['PROPERTIES']['ABOUT_PROJECT']['VALUE']["TEXT"] ?></td>
                                </tr>
                            <? endif; ?>

                            <? if (!empty($arResult['PROPERTIES']['TASK']['VALUE'])): ?>
                                <tr>
                                    <td><?= $arResult['PROPERTIES']['TASK']['NAME'] ?></td>
                                    <td>
                                        <ul>
                                            <? foreach ($arResult['PROPERTIES']['TASK']['VALUE'] as $item): ?>
                                                <li><?= $item ?></li>
                                            <? endforeach; ?>
                                        </ul>
                                    </td>
                                </tr>
                            <? endif; ?>

                            <? if (!empty($arResult['PROPERTIES']['SOLUTION']['VALUE'])): ?>
                                <tr>
                                    <td><?= $arResult['PROPERTIES']['SOLUTION']['NAME'] ?></td>
                                    <td>
                                        <ol class="numbered-list">
                                            <? foreach ($arResult['PROPERTIES']['SOLUTION']['VALUE'] as $item): ?>
                                                <li><?= $item ?></li>
                                            <? endforeach; ?>
                                        </ol>
                                    </td>
                                </tr>
                            <? endif; ?>
                            <? if (!empty($arResult['PROPERTIES']['DETAIL_PROJECY']['VALUE'])): ?>
                                <tr>
                                    <td><?= $arResult['PROPERTIES']['DETAIL_PROJECY']['NAME'] ?></td>
                                    <td><?= $arResult['PROPERTIES']['DETAIL_PROJECY']['VALUE'] ?></td>
                                </tr>
                            <? endif; ?>

                            <? if (!empty($arResult['PROPERTIES']['WEBSITE']['VALUE'])): ?>
                                <tr>
                                    <td><?= $arResult['PROPERTIES']['WEBSITE']['NAME'] ?></td>
                                    <td><a href="//<?= $arResult['PROPERTIES']['WEBSITE']['VALUE'] ?>" class="site-link"
                                           target="_blank"><?= $arResult['PROPERTIES']['WEBSITE']['VALUE'] ?></a></td>
                                </tr>
                            <? endif; ?>
                        </table>
                    </div>
                </div>
            <? endif; ?>

            <? if ($resultTabStatus): ?>
                <div class="tab-item <? if (!$isVisible): ?>is-visible<? $isVisible = true;endif; ?>">
                    <? if (
                        !empty($arResult['PROPERTIES']["RESULTAT_1_BLOCK"]['VALUE']['TITLE']) ||
                        !empty($arResult['PROPERTIES']["RESULTAT_1_BLOCK"]['VALUE']['TEXT']) ||
                        !empty($arResult['PROPERTIES']["RESULTAT_1_BLOCK"]['VALUE']['PICTURE'])
                    ): ?>


                        <div class="container">
                            <div class="project_head-row">
                                <div class="row">
                                    <div class="col-md-5 left-column"><?= $arResult['PROPERTIES']["RESULTAT_1_BLOCK"]['VALUE']['TITLE'] ?></div>
                                    <div class="col-md-7">
                                        <p><?= $arResult['PROPERTIES']["RESULTAT_1_BLOCK"]['VALUE']['TEXT'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <? if (!empty($arResult['PROPERTIES']["RESULTAT_1_BLOCK"]['VALUE']['PICTURE'])): ?>
                                <div class="project-detailed_main-page fadeInUp wow" data-wow-duration=".8s"
                                     data-wow-delay=".3s">
                                    <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_1_BLOCK"]['VALUE']['PICTURE']) ?>"
                                         alt="alt">
                                </div>
                            <? endif; ?>
                        </div>
                    <? endif; ?>


                    <div class="project-detailed_catalog-section" style="background-color: #F9F9F9">
                        <? if (
                            !empty($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['TITLE']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['TEXT']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['PICTURE_RIGHT']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['PICTURE_LEFT'])
                        ): ?>
                            <div class="container">
                                <div class="project_head-row">
                                    <div class="row">
                                        <div class="col-md-5 left-column"><?= $arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['TITLE'] ?></div>
                                        <div class="col-md-7">
                                            <p><?= $arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['TEXT'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-detailed_catalog-content">
                                <? if (!empty($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['PICTURE_LEFT'])): ?>
                                    <div class="first-img fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".3s">
                                        <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['PICTURE_LEFT']) ?>"
                                             alt="alt">
                                    </div>
                                <? endif; ?>
                                <? if (!empty($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['PICTURE_LEFT'])): ?>
                                    <div class="second-img fadeInUp wow" data-wow-duration=".8s" data-wow-delay=".6s">
                                        <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_2_BLOCK"]['VALUE']['PICTURE_RIGHT']) ?>"
                                             alt="alt">
                                    </div>
                                <? endif; ?>
                            </div>
                        <? endif; ?>

                        <? if (
                            !empty($arResult['PROPERTIES']["RESULTAT_3_BLOCK"]['VALUE']['PICTURE']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_3_BLOCK"]['VALUE']['LOGO'])
                        ): ?>
                            <div class="project-detailed_bg">
                                <div class="project-detailed_bg-color" style="background-color: <?= $color ?>"></div>
                                <div class="row no-gutters">
                                    <? if (!empty($arResult['PROPERTIES']["RESULTAT_3_BLOCK"]['VALUE']['PICTURE'])): ?>
                                        <div class="col-6 left-column fadeInLeft wow" data-wow-duration=".8s"
                                             data-wow-delay=".3s">
                                            <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_3_BLOCK"]['VALUE']['PICTURE']) ?>"
                                                 alt="alt">
                                        </div>
                                    <? endif; ?>
                                    <? if (!empty($arResult['PROPERTIES']["RESULTAT_3_BLOCK"]['VALUE']['LOGO'])): ?>
                                        <div class="col-6 right-column fadeInRight wow" data-wow-duration=".8s"
                                             data-wow-delay=".3s">
                                <span class="project-detailed_logo">
                                    <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_3_BLOCK"]['VALUE']['LOGO']) ?>"
                                         alt="alt">
                                </span>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </div>
                        <? endif; ?>

                        <? if (
                            !empty($arResult['PROPERTIES']["RESULTAT_4_BLOCK"]['VALUE']['TITLE']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_4_BLOCK"]['VALUE']['TEXT']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_4_BLOCK"]['VALUE']['PICTURE'])
                        ): ?>
                            <div class="project-detailed_product">
                                <div class="container">
                                    <div class="project_head-row">
                                        <div class="row">
                                            <div class="col-md-5 left-column"><?= $arResult['PROPERTIES']["RESULTAT_4_BLOCK"]['VALUE']['TITLE'] ?></div>
                                            <div class="col-md-7">
                                                <p><?= $arResult['PROPERTIES']["RESULTAT_4_BLOCK"]['VALUE']['TEXT'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <? if (!empty($arResult['PROPERTIES']["RESULTAT_4_BLOCK"]['VALUE']['PICTURE'])): ?>
                                        <div class="project-detailed_img fadeInUp wow" data-wow-duration=".8s"
                                             data-wow-delay=".3s">
                                            <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_4_BLOCK"]['VALUE']['PICTURE']) ?>"
                                                 alt="alt">
                                        </div>
                                    <? endif; ?>
                                </div>
                            </div>
                        <? endif; ?>

                        <? if (
                            !empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['TITLE']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['TEXT']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_LEFT']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_RIGHT']) ||
                            !empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_CENTER'])
                        ): ?>
                            <div class="project-detailed_mobile-section">
                                <div class="project-detailed_mobile-bg" style="background-color: <?= $color ?>"></div>
                                <div class="container">
                                    <div class="project_head-row">
                                        <div class="row">
                                            <div class="col-md-5 left-column"><?= $arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['~VALUE']['TITLE'] ?></div>
                                            <div class="col-md-7">
                                                <p><?= $arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['TEXT'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-detailed_mobile-row">
                                        <? if (!empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_LEFT'])): ?>

                                            <div class="project-detailed_mobile-img fadeInDown wow"
                                                 data-wow-duration=".8s"
                                                 data-wow-delay=".3s">
                                                <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_LEFT']) ?>"
                                                     alt="alt">
                                            </div>
                                        <? endif; ?>
                                        <? if (!empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_RIGHT'])): ?>

                                            <div class="project-detailed_mobile-img fadeInDown wow"
                                                 data-wow-duration=".8s"
                                                 data-wow-delay=".5s">
                                                <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_RIGHT']) ?>"
                                                     alt="alt">
                                            </div>
                                        <? endif; ?>
                                    </div>
                                    <div class="text-center">
                                        <? if (!empty($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_CENTER'])): ?>

                                            <div class="project-detailed_mobile-img fadeInDown wow"
                                                 data-wow-duration=".8s"
                                                 data-wow-delay=".3s">
                                                <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']["RESULTAT_5_BLOCK"]['VALUE']['PICTURE_CENTER']) ?>"
                                                     alt="alt">
                                            </div>
                                        <? endif; ?>
                                    </div>
                                </div>
                            </div>
                        <? endif; ?>

                        <? if (!empty($arResult['PROPERTIES']["RESULTAT_6_BLOCK"]["VALUE"]['TEXT'])): ?>
                            <div class="container">
                                <div class="project-detailed_footer-text">
                                    <p>
                                        <?= $arResult['PROPERTIES']["RESULTAT_6_BLOCK"]["VALUE"]['TEXT'] ?>
                                    </p>
                                </div>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
            <? endif; ?>

            <? if ($reviewTabStatus): ?>
                <div class="tab-item <? if (!$isVisible): ?>is-visible<? $isVisible = true;endif; ?>">
                    <div class="container">
                        <div class="review-item">
                            <div class="row no-gutters">
                                <div class="col-md-7">
                                    <span class="review-item_position"><?= $arResult['PROPERTIES']["POSITION"]['VALUE'] ?></span>
                                    <span class="review-item_name"><?= $arResult['PROPERTIES']["FIO"]['VALUE'] ?></span>
                                    <p><?= $arResult['PROPERTIES']["TEXT_REVIEW"]['VALUE']['TEXT'] ?></p>
                                </div>
                                <? if ($arResult['PROPERTIES']['IMG_REVIEW']['VALUE']): ?>
                                    <div class="col-md-5">
                                        <div class="review-item_img">
                                            <a href="<?= CFile::GetPath($arResult['PROPERTIES']['IMG_REVIEW']['VALUE']) ?>"
                                               class="fancybox">
                                                <img data-src="<?= CFile::GetPath($arResult['PROPERTIES']['IMG_REVIEW']['VALUE']) ?>"
                                                     alt="alt">
                                            </a>
                                        </div>
                                    </div>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <? endif; ?>

        </div>
    <? endif; ?>

    <div class="project-detailed_footer">
        <? if (is_array($arResult["TOLEFT"])): ?>
            <a href="<?= $arResult["TOLEFT"]["URL"] ?>" class="prev-project">
							<span class="project-btn_inner">
								<span class="project-btn_name"><?= $arResult["TOLEFT"]["NAME"] ?></span>
								<span class="text"><?= GetMessage('PREV_PROJECT') ?></span>
							</span>
            </a>

        <? endif ?>
        <? if (is_array($arResult["TORIGHT"])): ?>
            <a href="<?= $arResult["TORIGHT"]["URL"] ?>" class="next-project">
							<span class="project-btn_inner">
								<span class="project-btn_name"> <?= $arResult["TORIGHT"]["NAME"] ?></span>
								<span class="text"><?= GetMessage('NEXT_PROJECT') ?></span>
							</span>
            </a>
        <? endif ?>
    </div>
</section>