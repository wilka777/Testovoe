<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

// ссылка на первую страницу
$firstPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $firstPageUrl = $firstPageUrl.'?'.$arResult['NavQueryString'];
}
// ссылка на последнюю страницу
$lastPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $lastPageUrl = $lastPageUrl.'?'.$arResult['NavQueryString']
        .'&amp;PAGEN_'.$arResult['NavNum'].'='.$arResult['NavPageCount'];
} else {
    $lastPageUrl = $lastPageUrl.'?PAGEN_'.$arResult['NavNum'].'='.$arResult['NavPageCount'];
}
?>
    <!-- Стрелочка левая -->
    <ul class="pagination pagination--with-navigation data-js-content-preloader-pagination">
        <li class="pagination__item">
            <?php if ($arResult["NavPageNomer"] > 1) { ?>
            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
               class="pagination__link pagination__link--prev">
                <?php } else { ?>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>" class="pagination__link pagination__link--prev pagination__link--disabled">
                <?php } ?>
                <svg class="i-icon">
                    <use xlink:href="#icon-arrow--left"></use>
                </svg>
            </a>
        </li>

        <!-- Вывод основного блока цифр -->
        <?php for ($i = $arResult['nStartPage']; $i <= $arResult['nEndPage']; $i++) { ?>
            <?php
            // ссылка на очередную страницу
            $pageUrl = $arResult['sUrlPath'];
            if (!empty($arResult['NavQueryString'])) {
                $pageUrl = $pageUrl.'?'.$arResult['NavQueryString'].'&amp;PAGEN_'.$arResult['NavNum'].'='.$i;
            } else {
                $pageUrl = $pageUrl.'?PAGEN_'.$arResult['NavNum'].'='.$i;
            }
            ?>

            <?php if ($arResult['NavPageNomer'] == $i){ /* если это текущая страница */ ?>
                <li class="pagination__item"><span class="pagination__link pagination__link--current"><?= $i; ?></span></li>
            <?php } else { ?>
                <li class="pagination__item"><a href="<?= $pageUrl; ?>" class="pagination__link"><?= $i; ?></a></li>
            <?php } ?>
        <?php } ?>


        <!-- Стрелочка правая -->
        <li class="pagination__item">
            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
               class="pagination__link pagination__link--next<? if ($arResult["NavPageNomer"] == $arResult["NavPageCount"]) { ?> pagination__link--disabled<? } ?>">
                <svg class="i-icon">
                    <use xlink:href="#icon-arrow--right"></use>
                </svg>
            </a>
        </li>
    </ul>




