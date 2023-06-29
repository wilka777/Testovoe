<?php
if (!empty($arResult['ITEMS'])) {
    $arElementsIds = [];
    foreach ($arResult['ITEMS'] as $arItem) {
        if (isset($arResult['ID'])) {
            $arElementsIds = $arItem['ID'];  // Собираем все ID элементов
        }
    }
    $dbSections = CIBlockElement::GetElementGroups($arElementsIds); // Возвращает список всех привязок элементов к разделам
    $arSections = [];
    while ($el = $dbSections->Fetch()){ // Преобразовываем всё в массив
        $arSections[] = $el;
    }
    foreach ($arResult['ITEMS'] as $itemKey => $arItem) {
        // Получение названия основного раздела
        if (isset($arItem['IBLOCK_SECTION_ID'])) {
            $searchSectId = $arItem['IBLOCK_SECTION_ID'];

            foreach ($arSections as $section) {
                if ($section['ID'] === $searchSectId) {
                    $arResult['ITEMS'][$itemKey]['SECTION_NAME'] = $section['NAME'];
                }
            }
        }
        // Получение кодов разделов для элемента
        if (isset($arItem['ID'])) {
            $arElementSectionsCodes = [];
            foreach ($arSection as $section) {
                if ($arItem['ID'] == $section['IBLOCK_ELEMENT_ID']) {
                    $arElementSectionsCodes[] = $section['CODE'];
                }
            }
            $arResult['ITEMS'][$itemKey]['SECTIONS_CODES'] = implode(' ', $arElementSectionsCodes);
        } else {
            $arResult['ITEMS'][$itemKey]['SECTIONS_CODES'] = '';
        }
    }
}

?>