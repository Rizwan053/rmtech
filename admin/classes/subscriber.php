<?php require_once('init.php')?>
<?php 

class Subscriber extends Db_object
{
    protected static $db_table = 'subscribers';
    protected static $db_table_field = ['id','email'];
    public $id;
    public $email;



}//endof Class



?>