<?php require_once('includes/admin_header.php')?>

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
$categories =Category::find_all();
$comments = Comment::find_all();
$subscribers = Subscriber::find_all();
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-layout-list-post"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Posts</p>
                                           
                                            <?php echo count($posts);?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <a href="posts.php">View All Posts</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-tag"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Categories</p>
                                            <?php echo count($categories); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <a href="categories.php">View All Categories</a>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-comments"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Comments</p>
                                            <?php echo count($comments); ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <a href="comments.php">View All Comments</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Subscribers</p>
                                        <?php echo count($subscribers); ?>
                                    </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr >
                                    <div class="stats">
                                        <a href="subscribers.php">View All Subscribers</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                                <div class="ct-chart ct-perfect-fourth"></div>
                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Posts
                                        <i class="fa fa-circle text-warning"></i> Categories
                                        
                                        <i class="fa fa-circle text-danger"></i> Comments
                                        <i class="fa fa-circle text-success"></i> Subscribers
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <a href=""><i class="ti-reload"></i> Refresh </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
<?php require_once('includes/admin_footer.php')?>