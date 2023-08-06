<?php
if(isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $connect = mysqli_connect("localhost","root","","codeacademy");
    $sql = "INSERT INTO `students`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
    mysqli_query($connect,$sql);
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
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="register">
    </form>
</body>
</html>