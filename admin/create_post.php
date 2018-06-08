<?php require_once('includes/admin_header.php') ?>



<?php 

if(isset($_POST['submit'])){
    $posts = new Post();
        $posts->category_id =  $_POST['category_id'];
        $posts->title = $_POST['title'];
        $posts->url = $_POST['url'];
        $posts->body = $_POST['body'];
        $posts->uploads($_FILES['image']);
        $target = "images/$posts->image";
        move_uploaded_file($posts->tmp_path, $target);

    $posts->create();
    
    
    header('location:posts.php');
    // echo "<script>alert('Post Added Succesfully');document.location='posts.php'</script>";
    

}



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
		


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                
                                <h4 class="title">Add New Post</h4>
                                <p class="category">Fill All Field Required:</p>
                            </div>
                            <div class="content table-responsive ">
                        <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Upload:</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="url">URL</label>                                        
                                        <input type="text" name="url" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Categories Option</label>    
                                        <select class="custom-select" name="category_id" id="inputGroupSelect01">

                                        <option selected>Choose</option>
                                        <?php $categories = Category::find_all() ?>
                                        <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                        <?php endforeach; ?>
                                        </select>     

                                    </div>

                                    <div class="form-group">
                                        <label for="body">Body</label>                                        
                                        <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Create Post" class="btn btn-success">
                                    </div>
                        </form>

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>

<?php require_once('includes/admin_footer.php') ?>
        
