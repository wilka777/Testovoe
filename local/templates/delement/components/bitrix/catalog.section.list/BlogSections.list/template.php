<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<div class="page-blog__ctrl">
<div class="page-blog__collapse-wrapper" data-js-expand='{"visibleItems":"10"}'>
    <div class="page-blog__ctrl-row">
        <div class="page-blog__no-collapse-row">
            <form class="form page-blog__form" action id="search-form" data-js-search-form>
                <div class="form-row">
                    <input class="form-input" type="search" name="q" placeholder="Поиск статей" />
                    <button class="btn" type="submit">
                        <span class="visually-hidden">Найти</span>
                        <svg class="i-icon btn__icon">
                            <use href="#icon-search-2"></use>
                        </svg>
                    </button>
                </div>
            </form>

            <button class="page-blog__collapse-button" data-js-expand-btn>
                <span class="show-more">Ещё тэги</span>
                <svg class="page-blog__collapse-btn-icon show-more" width="15" height="10">
                    <use href="#icon-arrow"></use>
                </svg>

                <span class="show-less">Скрыть тэги</span>
                <svg class="page-blog__collapse-btn-icon show-less" width="15" height="10">
                    <use href="#icon-arrow"></use>
                </svg>
            </button>
        </div>

        <div class="page-blog__collapse-container">
            <div class="tags tags-slider">
                <div class="tags__container swiper-container ">
                    <div class="tags__wrapper swiper-wrapper" data-js-expand-item-container>


                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="yandeks-metrika" class="checkbox__input" form="search-form" type="radio"
                                       value="yandeks-metrika" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                       checked

                                >
                                <span class="checkbox__emulator">Яндекс.Метрика</span>
                            </label>
                        </div>



                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="internet-magazin" class="checkbox__input" form="search-form" type="radio"
                                       value="internet-magazin" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Интернет-магазин</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="sarafannyy-marketing" class="checkbox__input" form="search-form" type="radio"
                                       value="sarafannyy-marketing" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Сарафанный маркетинг</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="digital-marketing" class="checkbox__input" form="search-form" type="radio"
                                       value="digital-marketing" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Digital маркетинг</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="mobilnoe-prilozhenie" class="checkbox__input" form="search-form" type="radio"
                                       value="mobilnoe-prilozhenie" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Мобильное приложение</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="yandeks-direkt" class="checkbox__input" form="search-form" type="radio"
                                       value="yandeks-direkt" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Яндекс.Директ</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="biznes" class="checkbox__input" form="search-form" type="radio"
                                       value="biznes" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Бизнес</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="kontent-marketing" class="checkbox__input" form="search-form" type="radio"
                                       value="kontent-marketing" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Контент-маркетинг</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="smm" class="checkbox__input" form="search-form" type="radio"
                                       value="smm" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">SMM</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="rassylka" class="checkbox__input" form="search-form" type="radio"
                                       value="rassylka" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Рассылка</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="tekstovaya-optimizatsiya" class="checkbox__input" form="search-form" type="radio"
                                       value="tekstovaya-optimizatsiya" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Текстовая оптимизация</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="seo" class="checkbox__input" form="search-form" type="radio"
                                       value="seo" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">SEO</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="instagramm" class="checkbox__input" form="search-form" type="radio"
                                       value="instagramm" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Инстаграмм</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="marketpleys" class="checkbox__input" form="search-form" type="radio"
                                       value="marketpleys" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Маркетплейс</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="kolltreking" class="checkbox__input" form="search-form" type="radio"
                                       value="kolltreking" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Коллтрекинг</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="elektronnaya-kommertsiya" class="checkbox__input" form="search-form" type="radio"
                                       value="elektronnaya-kommertsiya" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Электронная коммерция</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="analiz-konkurentov" class="checkbox__input" form="search-form" type="radio"
                                       value="analiz-konkurentov" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Анализ конкурентов</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="omnikanalnyy-marketing" class="checkbox__input" form="search-form" type="radio"
                                       value="omnikanalnyy-marketing" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Омниканальный маркетинг</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="prodvizhenie" class="checkbox__input" form="search-form" type="radio"
                                       value="prodvizhenie" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Продвижение</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="growth-hacking" class="checkbox__input" form="search-form" type="radio"
                                       value="growth-hacking" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Growth hacking</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="cjm" class="checkbox__input" form="search-form" type="radio"
                                       value="cjm" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">CJM</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="yuzabiliti" class="checkbox__input" form="search-form" type="radio"
                                       value="yuzabiliti" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Юзабилити</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="kontekstnaya-reklama" class="checkbox__input" form="search-form" type="radio"
                                       value="kontekstnaya-reklama" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Контекстная реклама</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="targetirovannaya-reklama" class="checkbox__input" form="search-form" type="radio"
                                       value="targetirovannaya-reklama" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Таргетированная реклама</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="mikrorazmetka" class="checkbox__input" form="search-form" type="radio"
                                       value="mikrorazmetka" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Микроразметка</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="tik-tok" class="checkbox__input" form="search-form" type="radio"
                                       value="tik-tok" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">ТИК ТОК</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="semanticheskoe-yadro" class="checkbox__input" form="search-form" type="radio"
                                       value="semanticheskoe-yadro" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Семантическое ядро</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="b2b" class="checkbox__input" form="search-form" type="radio"
                                       value="b2b" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">B2B</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="e-commerce" class="checkbox__input" form="search-form" type="radio"
                                       value="e-commerce" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Е-Сommerce</span>
                            </label>
                        </div>

                        <div class="tags__item swiper-slide">
                            <label class="checkbox">
                                <input id="yandeks-dzen" class="checkbox__input" form="search-form" type="radio"
                                       value="yandeks-dzen" name="tag" tabindex="-1"
                                       data-input-required="checkbox"

                                >
                                <span class="checkbox__emulator">Яндекс. Дзен</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="h3 hidden">Извините, по вашему запросу ничего не найдено</div>

