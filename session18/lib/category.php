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

function getCategory($id){
   $connect = mysqli_connect("localhost","root","","codeacademy_crud");
   $sql = "SELECT * FROM `categories` WHERE `id` = $id";
   $query = mysqli_query($connect,$sql);
   return mysqli_fetch_assoc($query);
}


function delete($id){
   $connect = mysqli_connect("localhost","root","","codeacademy_crud");
   $sql = "DELETE FROM `categories` WHERE `id` = $id";
   $query = mysqli_query($connect,$sql);
   return mysqli_affected_rows($connect);
}


function update($name,$id){
   $connect = mysqli_connect("localhost","root","","codeacademy_crud");
   $sql = "UPDATE `categories` SET `name` = '$name' WHERE `id` = $id";
   mysqli_query($connect,$sql);
   return mysqli_affected_rows($connect);
} 