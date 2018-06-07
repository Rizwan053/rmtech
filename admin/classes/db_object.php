<?php

class Db_object
{

    function __construct(){

    }

    public static function find_all(){
        global $database;

        $sql = "SELECT * FROM " . static::$db_table. ' ';
        return $database->query($sql); 
    }

    public static function find_by_id($id){
        global $database;
        $sql = "SELECT * FROM " .$db_table. " WHERE id= $id LIMIT 1" ; 
        return $databse->query($sql);
    }

    

}


?>