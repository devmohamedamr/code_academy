<?php
require "lib/category.php";
session_start();
if(empty($_SESSION['user'])){
    header("location: login.php");
}

$data = show();

echo "<pre>";
print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>