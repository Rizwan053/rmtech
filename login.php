<?php include('includes/header.php') ?>

<?php
if(isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if(!$username && !$password){
        echo " <div class=' row justify-content-center '>
                    <div class=' col-4 '>
                    <h4  class='alert alert-danger text-center ' >Must Filled All Required Field ! Case Sensitive</h4>
                    </div>
                    </div> ";
    }else{
        $session->login($username, $password);
        
    }
}




?>


	<div class="s">
<br>


	</div>
	<!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row justify-content-md-center">

				<div class="col-lg-4 col-md-8  img-thumbnail">

				<form class='' action="" method="post">
                <h3>Log In</h3>
                <p>Fill All Required Field:</p>
                <hr>
                    <div class="form-group"><label for="username">Username:</label><input type="text" name="username" class="form-control"></div>
                    <div class="form-group"><label for="password">Password:</label><input type="password" name="password" class="form-control"></div>
                    <div class="form-group"><input type="submit" name="submit" value="Log In" class="btn btn-success"></div>
                </form>
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->


	


<?php include('includes/footer.php') ?>
	
