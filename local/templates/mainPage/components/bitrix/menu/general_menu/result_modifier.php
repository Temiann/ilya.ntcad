<?
    $newArr = [];
    $c5 = 5;
    $crntIndex = 0;
    foreach($arResult as $index => $item){
        if($index % $c5 === 0){
            $crntIndex++;
        }
        $newArr[$crntIndex][] = $item;
    };
    $arResult['NAV'] = $newArr;
?>