<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="top-section">
    <section class="news-content container">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "navigation_main", Array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1",
        ),
            false
        );?>
        <?$APPLICATION->IncludeComponent("bitrix:main.include", "news_detail_main", Array(
            "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                "PATH" => "/local/templates/mainPage/include/template/news_detail_main.php",	// Путь к файлу области
                "COMPONENT_TEMPLATE" => "news_detail_main"
            ),
            false
        );?>
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"news_detail_main", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"VIEW_MODE" => "TEXT",
		"SHOW_PARENT_NAME" => "Y",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "7",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "UF_URL",
			1 => "",
		),
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y",
		"COMPONENT_TEMPLATE" => "news_detail_main",
		"FILTER_NAME" => "sectionsFilter",
		"CACHE_FILTER" => "N"
	),
	false
);?>
<!--        <div class="news-content__categories" data-aos="fade-up">-->
<!--            <div class="news-content__categories-wrapper">-->
<!--                <a class="news-content__categories-item active btn-hover_parent no-scale" href="#">-->
<!--                    <div class="btn-hover_circle white"></div><span>Все</span>-->
<!--                </a><a class="news-content__categories-item btn-hover_parent no-scale" href="#">-->
<!--                    <div class="btn-hover_circle white"></div><span>Новости компании</span>-->
<!--                </a><a class="news-content__categories-item btn-hover_parent no-scale" href="#">-->
<!--                    <div class="btn-hover_circle white"></div><span>Акции</span>-->
<!--                </a><a class="news-content__categories-item btn-hover_parent no-scale" href="#">-->
<!--                    <div class="btn-hover_circle white"></div><span>Выставки и конференции</span>-->
<!--                </a></div>-->
<!--        </div>-->
        <div class="news-content__listing" data-aos="fade-up">
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">выставки и конференции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">акции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">новости компании</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">выставки и конференции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">акции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">новости компании</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">выставки и конференции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">акции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">новости компании</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">выставки и конференции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">акции</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
            <a class="news-card" href="#">
                <div class="news-card__top">
                    <div class="news-card__plug">новости компании</div>
                    <div class="news-card__bg">
                        <picture class="picture">
                            <source type="image/webp" srcset="../../../local/templates/mainPage/images/main-news-card1.webp"><img class="picture__img" src="../../../local/templates/mainPage/images/main-news-card1.png">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date">6 марта 2023</div>
                    <div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
                </div>
            </a>
        </div>
        <div class="news-content__more btn-hover_parent">
            <div class="btn-hover_circle"></div><span>Показать еще</span>
        </div>
    </section>
</section>
