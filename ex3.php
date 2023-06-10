<?php 

echo('---------Example3-----------<br><br>');


$arr1 = [1,2,3,4,5,6];
$arr2 = [1,2,3,4,5,6];

function multiplyArrays($arr1, $arr2) {
    
    $count = count($arr1) > count($arr2) ? count($arr1) : count($arr2);
    
    for ($i = 0; $i < $count; $i++) {
        $result[] = $arr1[$i] * $arr2[$i];
    }
    
    return $result;
}

$sum = multiplyArrays($arr1 , $arr2);
var_dump($sum);