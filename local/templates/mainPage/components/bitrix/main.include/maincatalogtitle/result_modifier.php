<?
$filePath = $arResult["FILE"];
$arResult["TITLE_TEXT"] = file_get_contents($filePath, false, null);
