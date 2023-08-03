<?php
session_start();

if(empty($_SESSION['username'])){
    // redirect 
    header("location: login.php");
}


echo "hello";

echo "<a href='logout.php'>logout</a>";