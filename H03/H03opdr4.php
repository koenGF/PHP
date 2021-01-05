<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdr4</title>
    <style>
        * {
            text-align: center;
        }
        img.red {
            border: solid red 5px;
        }
        img.green {
            border: solid green 5px;
        }
    </style>
</head>
<body>
<?php
$cats = array();
for($i = 0 ; $i <9 ; $i++) {
    if ($i % 2 !== 0) {
        $class = "class=red ";
    }
    else {
        $class = "class=green ";
    }
    $cats[$i] = "<img ".$class. "src='../img/cat".$i.".jpg'>";

    echo $cats[$i];
}
?>
</body>
</html>