<?php

// class user {
//     public $name;

//     public function getData(){
//         echo "hi ".$this->name;
//     }
// }


// $x = new user;
// $x->name = "mohamed";
// $x->getData();
// print_r($x);


// class calc {
//     public $x;
//     public $y;
//     public $z;

//     public function add(){
//         $this->z = $this->x + $this->y;
//         echo $this->z;
//     }
//     public function mult(){
//         $this->z = $this->x * $this->y;
//         echo $this->z;
//     }
//     public function sub(){
//         $this->z = $this->x - $this->y;
//         echo $this->z;
//     }
//     public function div(){
//         $this->z = $this->x / $this->y;
//         echo $this->z;
//     }
// }

// $calc = new calc;
// $calc->x = 10;
// $calc->y = 20;
// $calc->div();




// class person {
//     public $x;

//     public function move(){
//         echo "move";
//     }
// }



// class user extends person{

// }

// $u = new user;
// $u->move();



// class super{
//     private $x = "mohamed";
// }

// $t = new super;
// echo $t->x;


// class child extends super{
//     public function go(){
//         echo $this->x;
//     }
// }

// $c = new child;
// $c->go();




// class user  {
//     const PI =22/7;
//     public static $name = "ahmed";
//     public static function getUsers(){
//         echo "users ".self::PI;
//     }
// }


// user::getUsers();




// class calc {
//     public $x;
//     public $y;
//     public $res;

//     public function add (){
//         $this->res = $this->x + $this->y;
//         return $this;
//     }

//     public function mult (){
//         $this->res = $this->x * $this->y;
//         return $this;
//     }
//     public function print(){
//         echo $this->res;
//     }
// }




// $c = new calc;
// $c->x = 20;
// $c->y = 30;
// $c->mult()->print();

// select("users")->all()
// delete("users)->where("id",1)->excute()


require "db.php";

$db = new db("localhost","root","","codeacademy_crud");
$array = [
    "name"=>"ahmed",
    "user_id"=>1
];
$res = $db->insert("categories",$array);
// $res = $db->select("users","*")->all();
// $res = $db->delete("users",4);
// echo "<pre>";
// print_r($res);


// echo 'hi mohamed';
// echo "hi mohamed";


// $name = "mohamed";
// $name .= "amr";
// $name .= "eslam";

// echo $name;