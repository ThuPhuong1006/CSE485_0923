<?php
    function converToUppercase($arr){
        $result=array(); //Mảng kết quả

        foreach($arr as $item){
            if(is_string($item)){
                $result[]=strtoupper($item);
            }
            else{
                $result[]=$item;
            }
        }
        return $result;
    }
    $arrs1 = ['1', 'b', 'c', 'd'];
    $arrs2 = ['a', 0, null, false];

    $result1=converToUppercase($arrs1);
    $result2=converToUppercase($arrs2);

    print_r($result1);
    echo '<br><br>';
    print_r($result2)
?>