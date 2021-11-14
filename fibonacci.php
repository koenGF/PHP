<?php

$fibonacci[0] = 1;
$fibonacci[1] = 2;

for ($i = 2; $i <= 40; $i++) {
    $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
}

displayArray($fibonacci);


function displayArray($arr)
{
    $arrLength = count($arr);
    for ($i = 0; $i < $arrLength; $i++) {
        print($arr[$i] . '<br>');
    }
}