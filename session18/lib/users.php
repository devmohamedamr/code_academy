<?php


function register($name,$email,$password){
  $connect =  mysqli_connect("localhost","root","","codeacademy_crud");
  $sql = "INSERT INTO `users` (`name`,`email`,`password`,`admin`) VALUES ('$name','$email','$password',0)";
  mysqli_query($connect,$sql);
  return mysqli_affected_rows($connect);
}


function login($email,$password){
  $connect =  mysqli_connect("localhost","root","","codeacademy_crud");
  $sql = "SELECT * FROM `users` where `email` = '$email' AND `password` = '$password'";
  $query = mysqli_query($connect,$sql);
  return  mysqli_fetch_assoc($query);
}