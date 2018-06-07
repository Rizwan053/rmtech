<?php require_once('includes/admin_header.php') ?>
<?php 

if(isset($_POST['submit'])){
    $category = new Category();
    $category->name = $_POST['name'];

    $category->create();
    echo "<script>alert('Category Added Succesfully');document.location='categories.php'</script>";
    
}
if(isset($_GET['id'])){
    $category = Category::find_by_id($_GET['id']);
    $category->cascade_delete();
    header('location:categories.php');
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
		
<?php 

$categories = Category::find_all();

?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="text-success ">Add New Category:</h4>
                                    <form class="form-inline" action="" method="post">
                                        <div class="img-thumbnail form-group"><input type="text" name="name" class="form-control"></div>
                                        <div class="form-group"><input type="submit" value="Add" name="submit" class="btn btn-success"></div>
                                    </form>

                                   <hr> 
                                <h4 class="title">Categories</h4>
                                <p class="category">All Category on this Application</p>
                                
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    	<th>ID</th>
                                    	<th>Name</th>
                                    	<th>Edit</th>
                                    	<th>Delete</th>
                                    </thead>
                                    <tbody>
<?php foreach ($categories as $category) : ?>

                                    <tr>
                                        	<td><?php echo $category->id ? $category->id : "Not Available" ?></td>
                                        	<td><?php echo $category->name ? $category->name : "Not Available" ?></td>
                                            <td><a class="btn btn-info" href="edit_category.php?id=<?php echo $category->id ?>">Edit</a></td>
                                            <!-- <td> -->
<!-- <form class="form-inline" action="" method="post"> -->
<!-- <div class="img-thumbnail form-group"><input type="text" name="name" class="form-control" value="<?php $category->name?>"></div> -->
<!-- <div class="form-group"><input type="submit" value="Edit" name="submit" class="btn btn-success"></div> -->
<!-- </form> -->

                                            <!-- </td> -->
                                        	<td><a onclick="return confirm('Do You Sure to Delete This category')"class="btn btn-danger" href="categories.php?id=<?php echo $category->id ?>">Delete</a></td>
                                        	
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
        
