<?php
//print_r($_POST['cats']);
//echo $_POST['cats'];
//echo "<img src='../img/".$_POST['cats'].".jpg'>";
foreach ($_POST['cats'] as $cat) {
    echo "<img src='../img/".$cat.".jpg'>";
}