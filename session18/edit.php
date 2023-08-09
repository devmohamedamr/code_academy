<?php
session_start();
require "lib/category.php";
if(empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
    header("location: login.php");
}




if(isset($_POST['name'])){
    $name =$_POST['name'];
    $id = $_POST['id'];
    $res =  update($name,$id);
    if($res){
        header("location: index.php");
    }
}else {
    $row =  getCategory($_GET['id']);
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
        <input type="text" value="<?=  $row['name']; ?>" name="name">
        <input type="hidden" name="id" value="<?=  $row['id']; ?>" />
        <input type="submit" value="update">
    </form>
</body>
</html>