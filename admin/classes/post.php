<?php 

class Post extends Db_object
{
    protected static $db_table = 'posts';
    protected static $db_table_field = array('id','category_id', 'title', 'body', 'url');
    public $id;
    public $category_id;
    public $title;
    public $url;
    public $body;

    // public static function joins(){
    //     global $database;
    //     $sql = "SELECT categories.name,categories.id FROM categories LEFT JOIN posts ON categories.id = posts.category_id"; 
    //     return self::find_by_query($sql);
        // if($database->query($sql)){
        //     return true;
        // }else{
        //     return false;
        // }

    // }

}//endOfclass

    

?>