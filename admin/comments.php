<?php require_once('includes/admin_header.php') ?>
<?php 


?>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

<?php require_once('includes/admin_sidebar.php') ?>
    	
    </div>

    <div class="main-panel">
<?php require_once('includes/admin_nav.php') ?>
		
<?php 

$comments = Comment::find_all();

?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <h4 class="title">Comments</h4>
                                <p class="comment">All Comment on this Application</p>
                                
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    	<th>ID</th>
                                    	<th>On Post</th>
                                    	<th>Name</th>
                                    	<th>Email</th>
                                    	<th>Body</th>
                                    	<th>Delete</th>
                                    </thead>
                                    <tbody>
<?php foreach ($comments as $comment) : ?>

                                    <tr>
                                        	<td><?php echo $comment->id ? $comment->id : "Not Available" ?></td>
                                        	<td>
<?php $post = Post::find_by_id($comment->post_id) ; ?>
                                            
<a href="/post.php?id=<?php echo $post->id ?>"><?php echo $post->title ? $post->title : "Not Available" ?></a></td>
                                        	<td><?php echo $comment->name ? $comment->name : "Not Available" ?></td>
                                        	<td><?php echo $comment->email ? $comment->email : "Not Available" ?></td>
                                        	<td><?php echo $comment->body ? $comment->body : "Not Available" ?></td>


                                        	<td><a onclick="return confirm('Do You Sure to Delete This comment')"class="btn btn-danger" href="delete_comment.php?id=<?php echo $comment->id ?>">Delete</a></td>
                                        	
                                        </tr>
                                       
<?php endforeach; ?>                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>

<?php require_once('includes/admin_footer.php') ?>
        
