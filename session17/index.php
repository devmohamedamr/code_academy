<?php
require "lib/category.php";
session_start();
if(empty($_SESSION['user'])){
    header("location: login.php");
}

$data = show();


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
    <div>
        <a href="add.php">create new category</a>
    </div>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        <?php foreach($data as $value): ?>
        <tr>
            <td> <?= $value['id']; ?></td>
            <td> <?= $value['name']; ?></td>
            <td><a href="delete.php?id=<?= $value['id']; ?>">delete</a></td>
            <td><a href="edit.php?id=<?= $value['id']; ?>">edit</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>