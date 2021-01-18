<?php
session_start();
$users = [
    "user1" => ['password' => "1234", 'role' => 'user'],
    "user2" => ['password' => "4321", 'role' => 'user'],
    "admin1" => ['password' => "0", 'role' => 'administrator']
];

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_destroy();
}
if (isset($_POST['button'])
    && isset($users[$_POST['username']])
    && $users[$_POST['username']] ['password'] == $_POST['password']) {
    $_SESSION['user'] = [
        'username' => $_POST['username'],
        'password' => $users[$_POST['username']] ['password'],
        'role' => $users[$_POST['username']] ['role']
    ];
    $message = "logged in: ".$_SESSION['user'] ['username']." | ".$_SESSION['user'] ['role'];
}
else {
    $message = "not logged in";
}
print_r($_SESSION);
echo "<br>"."<br>";
foreach ($users as $user => $contents) {
    echo $user.": ";
    print_r($contents);
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>
        form ul {
            list-style-type: none;
            padding: 0;
        }
        form ul li {
            padding: 10px;
        }
        form ul li input {
            position: absolute;
            left: 150px;
        }
    </style>
</head>
<body>
<h1><?php echo $message ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <ul>
        <li>
            * required fields
        </li>
        <li>
            <label for="username">* Username:</label>
            <input type="text" name="username" id="username"> <br>
        </li>
        <li>
            <label for="password">* Password:</label>
            <input type="password" name="password" id="password"> <br>
        </li>
        <li>
            <input type="submit" name="button">
        </li>
    </ul>
</form>
<a href="website.php">go to website</a> <br>
<a href="admin.php">go to admin website</a> <br>
<a href="login.php?logout">logout</a>
</body>
</html>