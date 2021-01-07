<?php
$clubs = array ("De Spartelaars" => 25,"De Waterbuffels" => 32,"Plonsmerin" => 11,"Bommetje" => 23);
$swimImgs = "";
foreach ($clubs as $key => $value){
    $numberOfPictures = floor($value / 5);
    for ($i = 0; $i < $numberOfPictures; $i++) {
        $swimImgs = $swimImgs."<img src='../img/swim.jpg' alt='swim'>";
    }
    echo $key . " " . $value . "$swimImgs" . "<br>";
    $swimImgs = "";
}