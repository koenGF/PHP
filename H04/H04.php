<?php
echo celToFahr(30)."<br>";
if (dividableByThree(9)) {
    echo ":)"."<br>";
} else {
    echo ":("."<br>";
}
echo reverseString("reversed text wooo scary");

function celToFahr($cel) {
    return $cel * 1.8 + 32;
}
function dividableByThree($x) {
    if ($x % 3 == 0) {
        return true;
    } else {
        return false;
    }
}
function reverseString($str) {
    return strrev($str);
}