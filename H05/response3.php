<?php
$email = $_POST['email'];
$password = $_POST['password'];

if (login($email,$password)) {
    echo "welkom";
} else {echo "geen toegang";}

function login($e, $p): bool {
    if ($e == "piet@worldonline.nl" && $p == "doetje123" ||
        $e == "klaas@carpets.nl" && $p == "snoepje777" ||
        $e == "truushendriks@wegweg.nl" && $p == "arkiearkie201"
    ) {return true;}
    else {return false;}
}