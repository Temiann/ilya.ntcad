<?
$filePath = $arResult["FILE"];
$privacy = file_get_contents($filePath, false, null);
$arResult['privacy'] = $privacy;
?>