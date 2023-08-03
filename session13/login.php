<?php
session_start();
$usernamedb = "mohamedamr";
$passwordbd = 123;

if(isset($_POST['username'])){
    if($usernamedb == $_POST['username'] && $passwordbd == $_POST['password']){
        $_SESSION['username'] = $_POST['username'];
        header("location: home.php");
    }else{
        echo "error";
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
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>