<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
    foreach ($arResult["SECTIONS"] as $key => $value){
        if(!empty($value["UF_IMGHEADERPCPNG"])){
            $arResult["SECTIONS"][$key]["PICTURE_PATH"] = CFile::GetPath($value["UF_IMGHEADERPCPNG"]);
        }
        if(!empty($value["UF_IMG_HEAD_MOBILE"])){
            $arResult["SECTIONS"][$key]["PICTURE_PATH2"] = CFile::GetPath($value["UF_IMG_HEAD_MOBILE"]);
        }
        if(!empty($value["UF_WHITE"])){
            $arResult["SECTIONS"][$key]["WHITE"] = $value["UF_WHITE"];
        }
        if(!empty($value["UF_BLUE"])){
            $arResult["SECTIONS"][$key]["BLUE"] = $value["UF_BLUE"];
        }
    }
?>
<?//$APPLICATION->restartBuffer(); ?>
<!--<pre>--><?//var_dump($arResult);?><!--</pre>-->
<?php //die();?>

