<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdr1</title>
</head>
<body>
<?php
$cats = array();
for($i = 0 ; $i <9 ; $i++) {
    $cats[$i] = "<img src='../img/cat".$i.".jpg'>";
    echo $cats[$i];
}
?>
</body>
</html>