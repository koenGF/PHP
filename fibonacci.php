<?php

$fibonacci = [1,2];

for ($i = 2; $i <= 40; $i++) {
    $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
}

foreach ($fibonacci as $value) {
    echo $value . "<br>";
}