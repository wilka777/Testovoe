<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



<?php
if (!empty($arResult['ITEMS'])): ?>
    <div class=" page-blog__cards" xmlns="http://www.w3.org/1999/html">
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <article class="card-post card-post--new card-post--full">
            <div class="card-post__img">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" alt="ТУт название картинки">
            </div>
            <div class="card-post__info ">
                <div class="card-post__summary article-summary">
                    <ul class="article-summary__hashtag-list">
                        <li class="article-summary__hashtag-item">
                            <a href="#"
                               class="article-summary__hashtag-link"><?=$arItem['PROPERTIES']['teg']['VALUE']?></a>
                        </li>
                    </ul>
                </div>
                <a href="" class="card-post__link">
                    <h3 class="card-post__title"><?=($arItem['NAME'])?></h3>
                </a>
                <div class="card-post__preview-text">
                    <p>
                        <?=($arItem['PREVIEW_TEXT'])?>
                    </p>
                </div>
                <div class="card-post__bottom article-summary">
                    <div class="article-summary__info-block">
                  <span class="article-summary__author">
                    <?=$arItem['PROPERTIES']['author']['VALUE']?>
                  </span>
                        <time datetime="2022-01-28" class="article-summary__info-text">
                            <?= strstr($arItem['DATE_ACTIVE_FROM'],' ',true); ?>
                        </time>
                    </div>
                    <div class="pull-right article-summary__info-text article-summary__info-text--with-icon">
                        50
                        <span class="article-summary__info-icon article-summary__info-icon--eye">
                    <svg width="22" height="22">
                      <use href="#icon-eye-3"></use>
                    </svg>
                  </span>
                    </div>
                </div>
        </article>
    <?php endforeach; ?>
</div>
<?php endif; ?>
<?php
echo '<pre>';
print_r($arItem);
echo '</pre>';
?>