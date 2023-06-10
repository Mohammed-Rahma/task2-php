<?php

echo('---------Example1-----------<br><br>');

$num = array( 1 , 2, 3 ,4 ,5 ,6 ,7 ,8 ,9);
$x=[];

for ($i=0; $i < count($num) ; $i++) { 
    if($num[$i] % 2 !==0){
        $x[] = $num[$i]; 
    }
}
print_r($x);
echo '<pre>';
var_dump ($x);




