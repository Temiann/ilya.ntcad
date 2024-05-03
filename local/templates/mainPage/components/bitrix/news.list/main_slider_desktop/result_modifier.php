<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
foreach ($arResult["ITEMS"] as $value){
    $newArray = array();
    foreach ($value as $key => $item){
        if($key === "PREVIEW_TEXT"){
            $newArray["DESCRIPTION"] = $item;
        } else if($key === "NAME") {
            $newArray["NAME"] = $item;
        }
    }
    $newArray["STICKER"] = $value["PROPERTIES"]["STICKER_SLIDER"]["VALUE"];
    $arResult["SLIDER_ITEMS"][] = $newArray;
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
