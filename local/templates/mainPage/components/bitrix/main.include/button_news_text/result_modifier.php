<?
$filePath = $arResult["FILE"];
$name = file_get_contents($filePath, false, null);
$arResult['NAME'] = $name;
$arResult['PATH'] = $arParams["NEWS_SRC_MAIN"];
unset($name);
?>