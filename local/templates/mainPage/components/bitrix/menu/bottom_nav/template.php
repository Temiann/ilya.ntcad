<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <nav class="footer-content__nav">
        <ul class="footer-content__nav-list">
            <?foreach($arResult as $arItem):?>
                <li class="footer-nav__list-item"><a class="footer-content__nav-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?endforeach?>
        </ul>
    </nav>
<?endif?>