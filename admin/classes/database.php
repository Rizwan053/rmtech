<?php 
require_once('config.php');

class Database{

    public $con;

    function __construct(){
    $this->open_db_connection();
    }


    public function open_db_connection(){
        $this->con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($this->con->errno){
            die('Database Connection Failed'. $this->con->errno);
        }

    }

    public function query($sql){
        $result = mysqli_query($this->con, $sql);
        $this->confirm_query($result);
        return $result;
        
    }

    public function confirm_query($result){
        if(!$result){
            die('Query Failed '. $this->con->error);
        }
    }
    
    public function escape_string($string)
    {
        return $this->con->real_escape_string($string);

    }

    public function insert_id(){
        return $this->con->insert_id;
    }




}//endOfClass

$database = new Database();

?>