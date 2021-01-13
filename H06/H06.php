<?php
$user = 'school2user';
$pass = 'qTR5X6dr';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school2;port=3306', $user, $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}