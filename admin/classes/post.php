<?php 

class Post extends Db_object
{
    protected static $db_table = 'posts';
    protected static $db_table_field = array('id','category_id', 'title', 'body', 'url', 'image');
    public $id;
    public $category_id;
    public $title;
    public $url;
    public $body;
    public $image;
    public $tmp_path;
    public $upload_directory = 'images';

    public function uploads($file){
		if(empty($file) || !$file || !is_array($file)) {
        return "No File for Upload! Try Again";
        }else{
            $this->image = basename($file['name']);
            $this->tmp_path = $file['tmp_name'];
        }
        
    }

    public function path(){
        return $this->upload_directory.'/'.$this->image;
    }

    public static function search($query){
        // global $database;
        $sql = "SELECT * FROM posts WHERE title LIKE '%$query%' ORDER BY id DESC ";
        return self::find_by_query($sql);
        
        
    }

    public function cascade_delete(){
        global $database;
        if($this->delete()){
            $sql = "DELETE FROM comments WHERE post_id=$this->id";
            $database->query($sql);
        }else{
            return false;
        }
    }
    public function find_by_category($id){
        global $database;
        $sql = "SELECT * FROM posts WHERE category_id=$id";
        return self::find_by_query($sql);
    }

}//endOfclass

    

?>