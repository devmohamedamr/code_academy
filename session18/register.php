<?php
// require "lib/users.php";
require "lib/userModel.php";
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new user;
    $res =  $user->register($name,$email,$password);
//    $res = register($name,$email,$password);
   if($res){
        echo "<h1>user inserted</h1>";
   }
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
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="register">
    </form>



</body>
</html>