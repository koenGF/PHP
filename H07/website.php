<?php
session_start();
if (isset ($_SESSION['user'])) {
    echo "welcome, ". $_SESSION['user'] ['username'];
    echo "<br>".'<a href="login.php?logout">logout</a>';
} else {
    header('location: login.php');
}