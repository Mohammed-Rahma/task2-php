<?php

echo('---------Example4-----------<br><br>');

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$number = 13;
if (isPrime($number)) {
    echo "$number is prime.";
} else {
    echo "$number is not prime.";
}
