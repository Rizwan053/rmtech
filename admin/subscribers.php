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

$subscribers = Subscriber::find_all();

?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <a class="btn btn-success pull-right" href="create_subscriber.php">Add New subscriber</a>
                                
                                <h4 class="title">Subscribers</h4>
                                <p class="category">All Subscriber of this Application</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    	<th>ID</th>
                                    	<th>Email</th>
                                    	<th>Delete</th>
                                    </thead>
                                    <tbody>
<?php foreach ($subscribers as $subscriber) : ?>

                                    <tr>
                                        	<td><?php echo $subscriber->id ? $subscriber->id : "Not Available" ?></td>
                                        	<td><?php echo $subscriber->email ? $subscriber->email : "Not Available" ?></td>
                                    
                                        	
                                        	<td><a onclick="return confirm('Do You Sure to Delete This subscriber')"class="btn btn-danger" href="delete_subscriber.php?id=<?php echo $subscriber->id ?>">Delete</a></td>
                                        	
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
        
