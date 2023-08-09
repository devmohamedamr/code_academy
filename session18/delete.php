<?php
session_start();
require "lib/category.php";
if(empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
    header("location: login.php");
}

$res = delete($_GET['id']);

if($res) {
    header("location: index.php");
}