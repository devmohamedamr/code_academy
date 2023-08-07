<?php


function add($name,$user_id){
   $connect = mysqli_connect("localhost","root","","codeacademy_crud");
   $sql = "INSERT INTO `categories` (`name`,`user_id`) VALUES ('$name',$user_id)";
   mysqli_query($connect,$sql);
   return mysqli_affected_rows($connect);
} 

function show(){
   $connect = mysqli_connect("localhost","root","","codeacademy_crud");
   $sql = "SELECT * FROM `categories`";
   $query = mysqli_query($connect,$sql);
   return mysqli_fetch_all($query,MYSQLI_ASSOC);
}