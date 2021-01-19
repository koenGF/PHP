<?php
include_once('Radioprogramma.php');
$ditProgramma = new Radioprogramma();

$ditProgramma->setProgrammanaam("CJLO 1690 am");
$ditProgramma->setOmschrijving("Formed in 1998 as a merger between CRSG and CFLI, two former stations, CJLO is Concordia University's one and only radio station. 100% non-profit, and run almost entirely by volunteers, the station is located in the heart of the Loyola campus in the NDG borough of Montreal.");
$ditProgramma->setLiedjes([
    "artist" => "song",
    "artist2" => "song2",
    "artist3" => "song3"
]);

foreach ($ditProgramma->getProgramma() as $p) {
    echo $p."<br>"."<br>";
}

foreach($ditProgramma->getLiedjes() as $artist => $song) {
    echo $artist." - ".$song."<br>";
}