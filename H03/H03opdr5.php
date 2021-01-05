<?php
$age = 19;
$price = 10;
if ($age > 65) {
    $price /= 2;
}
elseif ($age <= 12) {
    if ($age < 3) {
        $price = 0;
    }
    else {
        $price /= 2;
    }
}

echo $price." euros";