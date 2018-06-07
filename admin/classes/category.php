<?php 

class Category extends Db_object
{
    protected static $db_table= "categories";
    protected static $db_table_field = array('id', 'name');    
    public $id;
    public $name;
}


?>