<?php 

class Session extends DB_Object
{
    public $count;

    function __construct()
    {
        session_start();
        
    }

    public function login($username,$password){

        if ($username === "rizwan" && $password === "rizwan") {

            $_SESSION['username'] = 'rizwan';
            $_SESSION['password'] = 'rizwan';
            
            $_SESSION['user_role'] = true;
            header('location:/admin');
            
        } else {
            $_SESSION['user_role'] = false;
            
            echo "
                    <div class=' row justify-content-center '>
                    <div class=' col-4 '>
                    <h4  class='alert alert-danger text-center ' >Try again! Wrong Username or Password!</h4>
                    </div>
                    </div>
            ";


        }
        
    }

    public function logout(){
            
        
        if($_SESSION['user_role']){
            $_SESSION['username'] = null;
            $_SESSION['password'] = null;
            $_SESSION['user_role']=false;            
            header('location:/');

        } 
    }

    public function check_login(){
        if($_SESSION['user_role']){
            return true;
        }else{
            return false;
        }
    }

    public function visitor_count(){
        if (isset($_SESSION['count'])) {

            return $this->count = $_SESSION['count']++;

        } else {

            return $_SESSION['count'] = 1;


        }
    }



    

    

    
}//endofClass
$session = new Session();

?>