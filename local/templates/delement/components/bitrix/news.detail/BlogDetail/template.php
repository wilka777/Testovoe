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
$APPLICATION->SetPageProperty("PAGE_CLASS", 'page-article page-article--new');
$resElement = CIBlockElement::GetByID($arResult['ID'])->GetNext();

if (iconv_strlen($arResult['NAME']) < 30) {
    $APPLICATION->SetPageProperty("mytitle", $arResult['NAME']." - ".$arResult['PROPERTIES']['author']['VALUE'].", ". strstr($arResult['DATE_ACTIVE_FROM'], ' ', true));
} else {
    $APPLICATION->SetPageProperty("mytitle", $arResult['NAME']);
}

?>

    <section class="section page--post page--post-new">
        <div class="section__body page-article__wrap">

            <article class="post-layout tile user-free-content">

                <div class="post-layout__wrap">
                    <header class="post-layout__header article-summary">
                        <ul class="post-layout__header-item article-summary__hashtag-list">
                            <? foreach ($arResult['PROPERTIES']['teg']['VALUE'] as $arTegs) { ?>
                                <li class="article-summary__hashtag-item">
                                    <a href="#" class="article-summary__hashtag-link"><?= $arTegs ?></a>
                                </li>
                            <? } ?>
                        </ul>
                        <div class="article-summary__post-info">
                    <span class="article-summary__author">
                        <?= $arResult['PROPERTIES']['author']['VALUE'] ?>
                    </span>
                            <time datetime="2019-05-28"
                                  class="post-layout__header-item post-layout__time article-summary__info-text">
                                <?= strstr($arResult['DATE_ACTIVE_FROM'], ' ', true); ?>
                            </time>
                        </div>
                        <span class="post-layout__header-item post-layout__time-to-read article-summary__info-text">
                  <?= $arResult['PROPERTIES']['ReadingTime']['VALUE'] ?> на чтение
                            <!-- Как определяется время на чтение -->
                </span>
                        <div class="pull-right article-summary__info-text article-summary__info-text--with-icon">
                            <?= $resElement["SHOW_COUNTER"]; ?> <!-- Реализовать просмотры -->
                            <span class="article-summary__info-icon article-summary__info-icon--eye">
                        <svg width="22" height="22">
                          <use href="#icon-eye-3"></use>
                        </svg>
                      </span>
                        </div>
                    </header>

                    <div class="post-layout__content">
                        <!-- Заголовок Статьи -->
                        <h2><?= $arResult['NAME']; ?></h2>
                        <!-- Заголовок Статьи -->

                        <!-- Основной контент на странице-->
                        <?= $arResult['DETAIL_TEXT']; ?>
                        <!-- Основной контент на странице-->

                        <!-- Слайдер -->
                        <div class="post-layout__slider blog-gallery">
                            <div class="swiper-container">
                                <div class="swiper-wrapper" data-js-gallery-container>
                                    <?php foreach ($arResult['PROPERTIES']['photos'] as $photo) { ?>
                                        <div class="swiper-slide">
                                            <img src="<?= $photo['src'] ?>"
                                                 alt="" class="blog-gallery__img" data-js-zoom>
                                        </div>
                                    <?php } ?>


                                </div>

                                <div class="blog-gallery__navigation">
                                    <button class="blog-gallery__btn blog-gallery__btn--prev slider-btn-rounded-blue">
                                        <svg width="13" height="16" class="i-icon">
                                            <use xlink:href="#icon-arrow--left"></use>
                                        </svg>
                                    </button>
                                    <button class="blog-gallery__btn blog-gallery__btn--next slider-btn-rounded-blue">
                                        <svg width="13" height="16" class="i-icon">
                                            <use xlink:href="#icon-arrow--right"></use>
                                        </svg>
                                    </button>
                                </div>

                                <div class="blog-gallery__pagination"></div>

                            </div>
                        </div>

                        <!-- Слайдер -->


                    </div>

                    <footer class="post-layout__footer">
                        <div class="blog-bottom">
                            <div class="blog-bottom__aux">
                                <a class="back-list-article link-with-arrow link-with-arrow--back"
                                   href="<?= $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"] ?>">Вернуться
                                    к
                                    списку
                                    статей</a>
                            </div>
                        </div>
                    </footer>

                </div>

            </article>

            <aside class="page-article__aside">
                <div class="topics">
                    Читайте также
                    <div class="topics__content">

                        <div class="topics__tab">

                            <ul class="topics__tab-list">
                                <li class="topics__tab-item">
                                    <div class="topics__tab-item-top">
                                        <a class="link" href="#" target="_blank">Интернет-маркетинг</a>
                                        <time>30.янв.2022</time>
                                    </div>

                                    <a class="topics__tab-item-title only-2-lines" href="#" target="_blank">Как
                                        бесплатно
                                        продвинуть мобильное приложение</a>
                                </li>
                                <li class="topics__tab-item">
                                    <div class="topics__tab-item-top">
                                        <a class="link" href="#" target="_blank">Интернет-маркетинг</a>
                                        <time>30.янв.2022</time>
                                    </div>

                                    <a class="topics__tab-item-title only-2-lines" href="#" target="_blank">Отличия
                                        контекстной
                                        и таргетированной рекламы</a>
                                </li>
                                <li class="topics__tab-item">
                                    <div class="topics__tab-item-top">
                                        <a class="link" href="#" target="_blank">Интернет-маркетинг</a>
                                        <time>30.янв.2022</time>
                                    </div>

                                    <a class="topics__tab-item-title only-2-lines" href="#" target="_blank">Как
                                        бесплатно
                                        продвинуть мобильное приложение</a>
                                </li>
                            </ul>

                            <a class="link-with-arrow" href="#" target="_blank">Все статьи</a>
                        </div>

                    </div>
                </div>

                <div class="promotions promotions--sticky-position">
                    <a class="promotions__link" href="" target="_blank">Выгодные предложения и акции</a>

                    <ul class="promotions__list">
                        <li class="promotions__item">
                            <div class="promotions__item-img">
                                <img src="/local/templates/delement/frontend/assets/images/post/promotion.jpg"
                                     width="146"
                                     height="140" alt="">
                            </div>
                            <a class="promotions__item-link" href="">Круглый год! Установка и год обслуживания
                                SSL-сертификат в
                                подарок</a>
                        </li>

                        <li class="promotions__item">
                            <div class="promotions__item-img">
                                <img src="/local/templates/delement/frontend/assets/images/post/promotion.jpg"
                                     width="146"
                                     height="140" alt="">
                            </div>
                            <a class="promotions__item-link" href="">Круглый год! Установка и год обслуживания
                                SSL-сертификат в
                                подарок</a>
                        </li>

                        <li class="promotions__item">
                            <div class="promotions__item-img">
                                <img src="/local/templates/delement/frontend/assets/images/post/promotion.jpg"
                                     width="146"
                                     height="140" alt="">
                            </div>
                            <a class="promotions__item-link" href="">Круглый год! Установка и год обслуживания
                                SSL-сертификат в
                                подарок</a>
                        </li>
                    </ul>

                </div>
            </aside>

        </div>

    </section>

<?php

echo '<pre>';

//echo print_r($arResult['DETAIL_TEXT']);
echo '</pre>';
?>