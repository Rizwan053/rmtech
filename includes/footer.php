	<footer>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<a class="logo" href="#"><b>RM Tech World</b></a>
						<p class="copyright">RM Tech World @ 2017-2018. All rights reserved.</p>
						<p class="copyright">Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						<ul class="icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
						<div class="footer-section">
						<h4 class="title"><b>CATAGORIES</b></h4>
<?php $categories = Category::find_all();
if ($categories) {
?>
<?php foreach ($categories as $category) : ?>
						<ul>
							<li><a href="category.php?id=<?php echo $category->id; ?>"><?php echo $category->id ? $category->name : 'Not Available'?></a></li>
						</ul>
						<!-- <ul>
							<li><a href="#"><?php echo $category->name ?></a></li>
						</ul> -->
						
<?php endforeach; ?>
<?php 
} ?>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">
<?php 
if (isset($_POST['subs'])) {

	if (!$_POST['email'] ) {
			echo " 
                    <h4  class='alert alert-danger text-center ' >Must Filled Valid Email</h4>
                     ";
	} else {
		$subscriber = new Subscriber();
		$subscriber->email = $_POST['email'];
		$subscriber->create();
		echo "<script>alert('Subscribed Succesfully');document.location='/'</script>";
		

	}

	// header('location:/');

}
?> 
						<h4 class="title"><b>SUBSCRIBE</b></h4>
						<div class="input-area">
							<form method="post">
								<input class="email-input" name="email" type="email" placeholder="Enter your email" reuired>
								<button class="submit-btn" name="subs" type="submit"><i class="icon ion-ios-email-outline"></i></button>
							</form>
						</div>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="./assets/js/jquery-3.1.1.min.js"></script>

	<script src="./assets/common-js/tether.min.js"></script>

	<script src="./assets/common-js/bootstrap.js"></script>

	<script src="./assets/common-js/swiper.js"></script>

	<script src="./assets/common-js/scripts.js"></script>
	<script>
	$('.alert').delay(5000).slideUp(500);
	
	</script>

</body>
</html>