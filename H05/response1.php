<?php
$a = false;
$items = ['username','address','email','password'];

foreach ($items as $item) {
    emptyForm($item);
}

if ($a) {
    echo "<a href='H05opdr1.html'>back to form</a>";
} else {
    print_r($_POST);
}

function emptyForm($a) {
    if ($_POST[$a] == "") {
        echo "empty field: " . $a . "<br>";
        global $a;
        $a = true;
    }
}