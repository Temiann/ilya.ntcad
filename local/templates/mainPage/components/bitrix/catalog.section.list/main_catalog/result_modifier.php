<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arResult["CATALOG_ITEMS"] = [];
foreach ($arResult["SECTIONS"] as $key => $value){
    if(!empty($value["UF_CATALOG_MAIN_IMG"])){
        $picture = CFile::ResizeImageGet($value["UF_CATALOG_MAIN_IMG"],[1200,1200],BX_RESIZE_IMAGE_EXACT);
    }
    $arResult["CATALOG_ITEMS"][$key]["IMG_SRC_DESK"] = $picture;
    if($key === 0 || $key === 1){
        if(!empty($value["UF_MAIN_MOBILE_IMG"])){
            $picture = CFile::ResizeImageGet($value["UF_MAIN_MOBILE_IMG"],[324,460],BX_RESIZE_IMAGE_EXACT);
        }
    } else {
        if(!empty($value["UF_MAIN_MOBILE_IMG"])){
            $picture = CFile::ResizeImageGet($value["UF_MAIN_MOBILE_IMG"],[670,240],BX_RESIZE_IMAGE_EXACT);
        }
    }

    $arResult["CATALOG_ITEMS"][$key]["IMG_SRC_MOB"] = $picture;

    $arResult["CATALOG_ITEMS"][$key]["NAME_SECTION"] = $value["NAME"];
    $arResult["CATALOG_ITEMS"][$key]["ID"] = $value["ID"];

    if(!empty($value["UF_WHITE"])){
        $arResult["CATALOG_ITEMS"][$key]["WHITE"] = $value["UF_WHITE"];
    }
    if(!empty($value["UF_BLUE"])){
        $arResult["CATALOG_ITEMS"][$key]["BLUE"] = $value["UF_BLUE"];
    }
}


?>
<?//$APPLICATION->restartBuffer(); ?>
<!--    <pre>--><?php //=var_dump($arResult);?><!--</pre>-->
<?php //die();?>
