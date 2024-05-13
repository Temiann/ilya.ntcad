<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult["NEWS_ITEMS"] = [];
foreach ($arResult["ITEMS"] as $key => $item){
    $arResult["NEWS_ITEMS"][$key] = [];
    foreach ($item as $key1 => $value){
        if($key1 === "PREVIEW_TEXT"){
            $arResult["NEWS_ITEMS"][$key]["DESCRIPTION"] = $value;
        }
        if($key1 === "DISPLAY_ACTIVE_FROM"){
            $arResult["NEWS_ITEMS"][$key]["DATA"] = $value;
        }
        if($key1 === "IBLOCK_SECTION_ID"){
            $db_res = CIBlockSection::GetByID($value);
            $ar_res = $db_res->GetNext();
            $section_name = $ar_res["NAME"];
            $arResult["NEWS_ITEMS"][$key]["SECTION_NAME"] = $section_name;
        }
        if($key1 === "PROPERTIES"){
            $arResult["NEWS_ITEMS"][$key]["DETAIL_SRC"] = $value["detail_src"]["VALUE"];
        }
    }
}
foreach ($arResult["ITEMS"] as $key => $value){
    if(!empty($value["PREVIEW_PICTURE"]["SRC"])){
        $arResult["NEWS_ITEMS"][$key]["IMG"] = $value["PREVIEW_PICTURE"]["SRC"];
    }
}

?>
<?//$APPLICATION->restartBuffer(); ?>
<!--        <pre>--><?php //=var_dump($arResult);?><!--</pre>-->
<?php //die();?>