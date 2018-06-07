<?php require_once('includes/admin_header.php') ?>


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

$posts = Post::find_all();

?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <a class="btn btn-success pull-right" href="create_post.php">Add New Post</a>
                                
                                <h4 class="title">Posts</h4>
                                <p class="category">All Published Post on this Application</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    	<th>ID</th>
                                    	<th>Title</th>
                                    	<th>Category</th>
                                    	<th>URL</th>
                                    	<th>Body</th>
                                    	<th>Edit</th>
                                    	<th>Delete</th>
                                    </thead>
                                    <tbody>
<?php foreach ($posts as $post): ?>

                                    <tr>
                                        	<td><?php echo $post->id ? $post->id : "Not Available" ?></td>
                                    
                                        	<td><?php echo $post->title ? $post->title : "Not Available"?></td>
                                        	
                                            <?php $category = Category::find_by_id($post->category_id) ?>
                                            <td><?php echo $category->name ? $category->name : "Not Available" ?></td>
                                        	<td><?php echo $post->url ? $post->url : "Not Available"?></td>
                                        	<td><?php echo $post->body ? $post->body : "Not Available"?></td>
                                        	<td><a class="btn btn-info" href="edit_post.php?id=<?php echo $post->id?>">Edit</a></td>
                                        	<td><a onclick="return confirm('Do You Sure to Delete This Post')"class="btn btn-danger" href="delete_post.php?id=<?php echo $post->id?>">Delete</a></td>
                                        	
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
        
