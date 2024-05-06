<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$filePath = $arResult["FILE"];
$arResult["TITLE_TEXT"] = file_get_contents($filePath, false, null);
unset($filePath);
