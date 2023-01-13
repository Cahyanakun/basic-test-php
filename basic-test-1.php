<?php
function minMaxSumFunction($arr){
    $result = array();
    $min = 0;
    $max = 0;
    for($j=0;$j<count($arr);$j++) {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
             if($arr[$j] != $arr[$i]){
                $sum += $arr[$i];    
             }
        }
        if($j == 0){
            $min = $sum;
            $max = $sum;
        }else{
            if($min>$sum){
                $min=$sum;
            }
            
            if($max<$sum){
                $max=$sum;
            }
        }
    }
    array_push($result, $min, $max);
    return $result;
};

    echo implode( ", ", minMaxSumFunction(array(1,2,3,4,5)) )
?>