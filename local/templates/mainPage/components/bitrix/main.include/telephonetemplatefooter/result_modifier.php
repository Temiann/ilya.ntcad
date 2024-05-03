<?
$filePath = $arResult["FILE"];
$contactNumber = file_get_contents($filePath, false, null);
$arr = str_split($contactNumber);
$number = '';
foreach ($arr as $value){
    if(is_numeric($value) || $value === '+'){
        $number = $number . $value;
    }
}
$arResult['textNumber'] = $contactNumber;
$arResult['number'] = $number;

?>