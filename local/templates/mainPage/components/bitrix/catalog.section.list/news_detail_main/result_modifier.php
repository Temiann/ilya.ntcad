<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
 $newarr["SECTIONARR"] = [];
 $arResult["SECTIONARR"][0]["NAME"] = "Все";
 $arResult["SECTIONARR"][0]["URL"] = "/";
 foreach ($arResult["SECTIONS"] as $key1 => $item){
     $newarr["SECTIONARR"][$key1] = [];
     foreach ($item as $key2 => $value){
        if($key2 === "NAME"){
            $arResult["SECTIONARR"][$key1+1]["NAME"] = $value;
        }
        if($key2 === "UF_URL"){
            $arResult["SECTIONARR"][$key1+1]["URL"] = $value;
        }
     }
 }
 unset($newarr);
?>
<?//$APPLICATION->restartBuffer(); ?>
<!--        <pre>--><?php //=var_dump($arResult);?><!--</pre>-->
<?php //die();?>