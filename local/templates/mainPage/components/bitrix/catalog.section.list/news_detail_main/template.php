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
<?if (is_array($arResult["SECTIONARR"]) && count($arResult["SECTIONARR"]) > 1): ?>
    <div class="news-content__categories" data-aos="fade-up">
        <div class="news-content__categories-wrapper">
            <?foreach ($arResult["SECTIONARR"] as $item):?>
                <a class="news-content__categories-item active btn-hover_parent no-scale" href="<?=$item["URL"] ?>">
                    <div class="btn-hover_circle white"></div><span><?=$item["NAME"] ?></span>
                </a>
            <?endforeach; ?>
        </div>
    </div>
<?endif;?>
