<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arResult["SLIDER_ITEMS"] = [];
foreach ($arResult["ITEMS"] as $key1 => $value){
    $arResult["SLIDER_ITEMS"][$key1] = [];
    foreach ($value as $key2 => $item){
        if($key2 === "PREVIEW_TEXT"){
            $arResult["SLIDER_ITEMS"][$key1]["DESCRIPTION"] = $item;
        } else if($key2 === "NAME") {
            $arResult["SLIDER_ITEMS"][$key1]["NAME"] = $item;
        }
    }
    $arResult["SLIDER_ITEMS"][$key1]["STICKER"] = $value["PROPERTIES"]["STICKER_SLIDER"]["VALUE"];
    $arResult["SLIDER_ITEMS"][$key1]["ABOUT"] = $value["PROPERTIES"]["ABOUT_BUTTON"]["VALUE"];
    $arResult["SLIDER_ITEMS"][$key1]["HREF_STR"] = $value["PROPERTIES"]["HREF_STR"]["VALUE"];

}
foreach ($arResult["ITEMS"] as $key => $value){
    if(!empty($value["PREVIEW_PICTURE"])){
        $picture = CFile::ResizeImageGet($value["PREVIEW_PICTURE"]["ID"],[1840,760],BX_RESIZE_IMAGE_EXACT);
    }
    $arResult["SLIDER_ITEMS"][$key]["PREVIEW_PICTURE"] = $picture;
}?>
<?//$APPLICATION->restartBuffer(); ?>
<!--    <pre>--><?//var_dump($arResult);?><!--</pre>-->
<?php //die();?>
