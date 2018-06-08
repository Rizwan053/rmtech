<?php include('includes/admin_header.php') ?>

<?php 
if (isset($_GET['id'])) {
    $comment = Comment::find_by_id($_GET['id']);
    // $post->id = $_GET['id'];
    $comment->delete();
    header('location:comments.php');
    // echo "<script>alert('Post Added Succesfully');document.location='commentsts.php'</script>";
    
}
?>
