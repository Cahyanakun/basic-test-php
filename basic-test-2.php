<?php
function plusMinusFunction($arr){
    $result = array();
    $min = 0;
    $zero = 0;
    $plus = 0;
    
    for($j=0;$j<count($arr);$j++) {
        if($arr[$j] > 0){
            $plus += 1;
        }else if($arr[$j] < 0){
            $min += 1;
        }else{
            $zero += 1;
        }
    }

    $negative = $min / count($arr);
    $postive = $plus / count($arr);
    $zeros = $zero / count($arr);
    
    array_push($result, number_format($postive, 6),number_format($negative, 6) , number_format($zeros, 6));
    return $result;
};

    echo implode( ", ", plusMinusFunction(array(-1,-2,-3,0,5,6)) )
?>