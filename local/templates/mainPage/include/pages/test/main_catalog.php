<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<section class="main-catalog container" data-aos="fade-up" data-aos-duration="1500">
    <?$APPLICATION->IncludeComponent("bitrix:main.include", "maincatalogtitle", Array(
	"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
        "PATH" => "/local/templates/mainPage/include/template/main_catalog_title.php",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "main_catalog", Array(
	"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
		"VIEW_MODE" => "TEXT",	// Вид списка подразделов
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"IBLOCK_TYPE" => "catalog_zdorprod",	// Тип инфоблока
		"IBLOCK_ID" => "5",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => "",	// Поля разделов
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "UF_CATALOG_MAIN_IMG",
			2 => "UF_WHITE",
			3 => "UF_BLUE",
            4 => "UF_MAIN_MOBILE_IMG",
            5 => "UF_FLAG_WHITE"
		),
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	),
	false
);?>
</section>
