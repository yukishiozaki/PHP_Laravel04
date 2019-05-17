<?php
function product($arr){
    $result = 1;
    foreach ($arr as $new_arr){
        $result = $result * $new_arr;
    }
    return $result;
}
$arr = array(1,3,5,7,9);
echo product($arr);


