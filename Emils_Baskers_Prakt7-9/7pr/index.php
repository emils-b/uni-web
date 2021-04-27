<?php
session_start();
include "Db.php";
include "session-fn.php";

 if(isset($_SESSION['loggedIn']))
 {
     $_SESSION['loggedIn'] = false;
 }

$canLogIn = false;
$db = new Db();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $canLogIn = isAuthorised($username, $password, $db);

    if($canLogIn) {
        setIsAuthorised();
        header("Location: main.php");
        exit();
    }
}

function isAuthorised(string $username, string $password, Db $db): bool
{
    $sql = "SELECT * FROM users WHERE username = ? and password = ?";
    $stmt = $db->connect()->prepare($sql);
    $stmt->execute([$username, $password]);
    $task = $stmt->fetch();
    return (bool)$task;
}

?>
<html lang="lv" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>JS Prog</title>
</head>
<body
<div class="container">
    <div class="d-flex justify-content-center">
        <form action="" method="post">
            <div class="form-group col-2 p-3">
                <label for="username">Lietotājvārds </label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group col-2 p-3">
                <label for="password">Parole</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary" name="submit">Pieslēgties</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>