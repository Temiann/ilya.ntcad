<?
$filePath = $arResult["FILE"];
$mail = file_get_contents($filePath, false, null);
if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $arResult['mail'] = $mail;
} else {
    $arResult['mail'] = "Incorrect email";
}
?>