<?php require_once('includes/admin_header.php') ?>
<?php 

if (empty($_GET['id'])) {
    header('loction:categories.php');
} else {

    if (isset($_POST['submit'])) {
        $categories = new Category();
        $categories->id = $_GET['id'];
        $categories->name = $_POST['name'];

        $categories->update();

    // header('location:posts.php');
        echo "<script>alert('Category Updated Succesfully');document.location='categories.php'</script>";


    }
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

$category = Category::find_by_id($_GET['id']);

?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="text-info ">Edit Category:</h4>
                                    <form class="form-inline" action="" method="post">
                                        <div class="img-thumbnail form-group"><input type="text" name="name" class="form-control" value="<?php echo $category->name?>"></div>
                                        <div class="form-group"><input type="submit" value="Edit" name="submit" class="btn btn-info"></div>
                                    </form>

                                
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                

                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>

<?php require_once('includes/admin_footer.php') ?>
        
