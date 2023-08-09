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
        <?php if($_SESSION['user']['admin'] == 1): ?>
        <a href="add.php">create new category</a>
        <?php endif; ?>
    </div>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <?php if($_SESSION['user']['admin'] == 1): ?>
            <th>delete</th>
            <th>update</th>
            <?php endif; ?>
        </tr>
        <?php foreach($data as $value): ?>
        <tr>
            <td> <?= $value['id']; ?></td>
            <td> <?= $value['name']; ?></td>
            <?php if($_SESSION['user']['admin'] == 1): ?>
            <td><a href="delete.php?id=<?= $value['id']; ?>">delete</a></td>
            <td><a href="edit.php?id=<?= $value['id']; ?>">edit</a></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>