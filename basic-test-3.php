<?php
function minMaxSumFunction($hours){
    $result = '';
    // Get hours
    $h1 = substr($arr,0,2);
    $h2 = substr($arr,3,2);
    $h3 = substr($arr,6,2);
    $h4 = substr($arr,8,2);
    
    if($h4 == 'AM' || $h4 == 'am'){
        if ($h1 == 12)
        {
            (int)$h1 -= 12;
            (string)$h1 = "00";
        }
     
    }else if($h4 == 'PM' || $h4 == 'pm'){
        if ($h1 < 12){
            (int)$h1 +=12;
        }
    }
    $result = $h1.':'.$h2.':'.$h3;
    return $result;
};

    echo minMaxSumFunction("12:01:00PM")
?>