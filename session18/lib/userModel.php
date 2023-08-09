<?php

class user  {
    public $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect("localhost","root","","codeacademy_crud");
    }
    public function login($email,$password){
        $sql = "SELECT * FROM `users` where `email` = '$email' AND `password` = '$password'";
        $query = mysqli_query($this->connect,$sql);
        return  mysqli_fetch_assoc($query);
    }

    public function register($name,$email,$password){
        $sql = "INSERT INTO `users` (`name`,`email`,`password`,`admin`) VALUES ('$name','$email','$password',0)";
        mysqli_query($this->connect,$sql);
        return mysqli_affected_rows($this->connect);
    }
}