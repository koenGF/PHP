<?php
JSC($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bakkerij Wim Vlecht</title>
    <style>
        form ul {
            list-style-type: none;
            padding: 0;
        }
        form ul li {
            padding: 8px;
        }
        form ul li input {
            position: absolute;
            left: 150px;
        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <ul>
        <li>
            Nieuw broodje/Edit broodje:
        </li>
        <li>
            <label for="bread">Naam:</label>
            <input type="text" name="bread" id="bread"> <br>
        </li>
        <li>
            <label for="flour">Meel:</label>
            <input type="text" name="flour" id="flour"> <br>
        </li>
        <li>
            <label for="shape">Vorm:</label>
            <input type="text" name="shape" id="shape"> <br>
        </li>
        <li>
            <label for="weight">Gewicht:</label>
            <input type="text" name="weight" id="weight"> <br>
        </li>
        <li>
            <input type="submit" name="button">
        </li>
    </ul>
</form>
</body>
</html>

<?php
$user = 'school2user';
$pass = 'qTR5X6dr';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=bakkerij;port=3306', $user, $pass);
    foreach ($dbh->query('SELECT * from broodjes') as $row) {
        JSC($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

if(isset($_POST['button'])) {
    $naam = $_POST['bread'];
    $meel = $_POST['flour'];
    $vorm = $_POST['shape'];
    $gewicht = $_POST['weight'];
    $sql = "INSERT INTO broodjes (naam,meel,vorm,gewicht)
     VALUES ('$naam','$meel','$vorm','$gewicht')";
    if ($dbh->query($sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error!";
    }
$dbh->close();
}
?>