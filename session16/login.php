<?php
session_start();
require "lib/users.php";
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = login($email,$password);

    $_SESSION['user'] = $res;
   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>

</body>
</html>