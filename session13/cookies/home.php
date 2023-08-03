<?php

if(empty($_COOKIE['username'])){
    header("location: login.php");
}



echo "hello";