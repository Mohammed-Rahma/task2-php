<?php

echo('---------Example4-----------<br><br>');

function factorial($number) {
    if ($number < 0) {
        return "Error: Factorial is undefined for negative numbers.";
    }
    
    $result = 1;
    for ($i = 2; $i <= $number; $i++) {
        $result *= $i;
    }
    
    return $result;
}

var_dump(factorial(3));