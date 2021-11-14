<?php

for ($i = 1; $i <= 100; $i++) {
    echo fizzBuzzCheck($i) . "<br>";
}

function fizzBuzzCheck(int $i) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        return "fizzbuzz";
    } elseif ($i % 3 == 0) {
        return "fizz";
    } elseif ($i % 5 == 0) {
        return "buzz";
    } else {
        return $i;
    }
}