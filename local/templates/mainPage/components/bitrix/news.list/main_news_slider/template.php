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
$this->setFrameMode(true);
?>
<div class="main-news__slider">
    <div class="main-news__slider-wrapper">
        <div class="swiper main-news__swiper">
            <div class="swiper-wrapper">
                <?foreach ($arResult["NEWS_ITEMS"] as $item):?>
                <a class="swiper-slide main-news__card" href="<?=$item["DETAIL_SRC"]?>">
                    <div class="main-news__card-img">
                        <picture class="picture">
                            <img class="picture__img" src="<?=$item["IMG"]?>">
                        </picture>
                        <span class="main-news__card-plug"><?=$item["SECTION_NAME"]?></span>
                    </div>
                    <p class="main-news__card-date"><?=$item["DATA"]?></p>
                    <p class="main-news__card-title"><?=$item["DESCRIPTION"]?></p>
                </a>
                <?endforeach;?>
            </div>
        </div>
    </div>
    <div class="slider-btn btn-hover_parent main-news__button_left">
        <div class="white-circle">
            <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
            </svg>
        </div>
    </div>
    <div class="slider-btn btn-hover_parent main-news__button_right">
        <div class="white-circle right">
            <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
            </svg>
        </div>
    </div>
</div>
