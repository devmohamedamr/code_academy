<?php

// array 
// superglobals var

// $numbers = [1,23,123];

// associative array 

// $user = ["name" => "mohamed","age" =>  28];

// print_r($user);
// echo $user;


// $user = ["name"=>"mohamed","address"=>"cairo","age"=>28,"city"=>"october"];


// $user = [
//     "name"=>"mohamed",
//     "age"=>28,
//     "address"=>"cairo"
// ];

// $user2 = [
//     "name"=>"youssif",
//     "age"=>28,
//     "address"=>"alex"
// ];


// foreach($user as $key => $value){
//     echo $key." : ".$value."<br>";
// }




// $users = [
//     ["name"=>"ahmed","age"=>20],
//     ["name"=>"eslam","age"=>30]
// ];

// foreach($users as $value){
//     foreach($value as $k => $v){
//         echo $k." : ".$v."<br>";
//     }
//     echo "<hr>";
// }
// name: ahmed
// age : 20
// --------------------
// name : eslam
// age : 30


// $_POST


// echo "username is :".$_POST['username']."<br>";
// echo "password is :".$_POST['password']."<br>";

// if(empty($_POST['x']) || empty($_POST['y'])){
//     echo "this faild is empty";
// }else{
//     echo "result is  : ".$_POST['x'] + $_POST['y'];
// }



// print_r($_GET);

// print_r($_POST);


// print_r($_REQUEST);


// echo "<pre>";
// print_r($_FILES['img']['type']);
// $ext =  explode("/",$_FILES['img']['type']);
// $tmp = $_FILES['img']['tmp_name'];
// $name = $_POST['name'];
// move_uploaded_file($tmp,"img/".$name.".".$ext[1]);




