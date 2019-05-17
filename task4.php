<?php
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
       return $max_number;
}
$arr = array(1,3,5,7,9);
echo max_array($arr);



