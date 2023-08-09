<?php
session_start();
require "lib/category.php";
if(empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
    header("location: login.php");
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $user_id = $_SESSION['user']['id'];

    $res = add($name,$user_id);
    if($res){
        echo "<h1>category inserted</h1>";
        header("location: index.php");
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
        <input type="submit" value="add new category">
    </form>

</body>
</html>