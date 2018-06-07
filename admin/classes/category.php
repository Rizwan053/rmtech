<?php 

class Category extends Db_object
{
    protected static $db_table= "categories";
    protected static $db_table_field = array('id', 'name');    
    public $id;
    public $name;

    public function cascade_delete()
    {
        global $database;
        
            // self::find_by_id($id);
            if($this->delete()){
                $sql = "DELETE FROM posts WHERE category_id=$this->id";
                $database->query($sql);
            }else{
                return "Error";
            }
            
            
    }
}//endOfclass


?>