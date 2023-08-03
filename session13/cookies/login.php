<?php
$usernamedb = "mohamed";
$passworddb = 123;

if(isset($_POST['username'])){

    if($usernamedb == $_POST['username'] && $passworddb = $_POST['password']){
        setcookie('username',$_POST['username'],time() + 60*60*24, "/");
        header("location: home.php");
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>