<?php include('includes/admin_header.php')?>

<?php 
if(isset($_GET['id'])){
    $post = Post::find_by_id($_GET['id']);
    // $post->id = $_GET['id'];
    unlink($post->path());
    $post->delete();
    header('location:posts.php');
}
?>
