<?php

echo('---------Example2-----------<br><br>');

$longest = ['Ali' , 'Ahmed' , 'Mohammed'];

$max='';

foreach ($longest as $value) {

    if(strlen($value) > strlen($max)){
        $max = $value;
    }
}
echo (" longest text in array is <b>$max <b>");
