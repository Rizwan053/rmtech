<?php require_once('init.php')?> 
<?php 
class Comment extends Db_object{
    protected static $db_table = 'comments';
    protected static $db_table_field = ['id', 'post_id', 'name', 'email', 'body'];
    public $id;
    public $post_id;
    public $name;
    public $email;
    public $body;



}





?>