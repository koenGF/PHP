<?php
session_start();
if (isset ($_SESSION['user']) && $_SESSION['user'] ['role'] == "administrator") {
    echo "welcome to the secret admin website, ". $_SESSION['user'] ['username'];
    echo "<br>".'<a href="login.php?logout">logout</a>';
} else {
    header('location: login.php?logout');
}