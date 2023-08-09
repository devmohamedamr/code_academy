<?php

class db {
    public $connection;
    public $query;

    public function __construct($server,$user,$password,$dbname)
    {
        $this->connection = mysqli_connect($server,$user,$password,$dbname);
    }

    public function select($table,$columns){
       $this->query =  mysqli_query($this->connection,"SELECT {$columns} FROM {$table}");
        return $this; 
    }

    public function row(){
        return mysqli_fetch_assoc($this->query); 
    }

    public function all(){
        return mysqli_fetch_all($this->query,MYSQLI_ASSOC); 
    }

    function delete($table,$id){
        mysqli_query($this->connection,"DELETE FROM `{$table}` WHERE `id` = $id");
        return mysqli_affected_rows($this->connection);
    }

    function update($table,$data,$id){
        $text = "";
        foreach($data as $key => $value){
            $text .= "`$key` = '$value',";
        }
        $new = rtrim($text,",");
       
        mysqli_query($this->connection,"UPDATE `$table` SET $new WHERE `id` = $id");
    }

    function insert($table,$data){
        $columns = "";
        $values = "";
        foreach($data as $key => $value){
            $columns .= "`$key`,";
            $values .= "'$value',";
        }
        $newcolumns = rtrim($columns,",");
        $newvalues = rtrim($values,",");
        mysqli_query($this->connection,"INSERT INTO `$table` ($newcolumns) VALUES ($newvalues) ");
    }
}

