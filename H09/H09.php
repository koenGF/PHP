<?php
/* add form to cookie 1
 * if cookie 1 isset, cookie 2
 * fori cookie, add to $broodjes
*/

$cookie = 0;
$broodjes = [
    "broodje1" => ['flour' => "flour1", 'shape' => "shape1", 'weight' => "weight1"],
    "broodje2" => ['flour' => "flour2", 'shape' => "shape2", 'weight' => "weight2"],
    "broodje3" => ['flour' => "flour3", 'shape' => "shape3", 'weight' => "weight3"],
];
JSC($_POST);
//array_push($broodjes, $_POST["bread"]);

if (isset($_POST['button'])) {
//    $broodjes[$_POST["bread"]] = ['flour' => $_POST["flour"], 'shape' => $_POST["shape"], 'weight' => $_POST["weight"]];

    if (isset($_COOKIE[$cookie])) {
        $cookie++;
    }

    for ($i = 0; $i < $cookie; $i++) {
        print_r(unserialize($_COOKIE[$i], ["allowed_classes" => false]));
        echo "<br>";
    }
}

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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <ul>
        <li>
            Nieuw broodje:
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
JSC($broodjes);

function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
?>