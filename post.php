<?php include('includes/header.php') ?>
<?php 

if(empty($_GET['id'])){
	header('location:/');
}
$post = Post::find_by_id($_GET['id']);

if($_GET['id']!==$post->id){
	header('location:/');
	
}


if(isset($_POST['submit'])){
	$comm = new Comment();
	$comm->post_id = $post->id;
	$comm->name = $_POST['name'];
	$comm->email = $_POST['email'];
	$comm->body = $_POST['body'];
	$comm->create();
	echo "<script>alert('Comment Submitted Succesfully');document.location='post.php?id={$post->id}'</script>";
	
}

?>


	<div class="s">
<br>
<br>
<br>
<br>
<br>
<br>

	</div>
	<!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">
<?php if ($post) : ?>

					<div class="main-post">

						<div class="post-top-area">
<?php $category = Category::find_by_id($post->category_id) ?>
							<h5 class="pre-title"><?php echo $category->name?></h5>

							<h3 class="title"><a href="#"><b><?php echo $post->title ?></b></a></h3>

							
							<p class="para"><?php  ?></p>

						</div><!-- post-top-area -->

						<div class="post-image"><img class="img-thumbnail" src="/admin/<?php echo $post->image ? $post->path() : "http://via.placeholder.com/600x600?text=Not Available" ?>" alt="blog-image"></div>

						<div class="post-bottom-area">

							<p class="para"><?php echo $post->body ?></p>

						

							<div class="post-icons-area">
								<ul class="post-icons">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>

								<ul class="icons">
									<li>SHARE : </li>
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
								</ul>
							</div>


						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
<?php endif; ?>				

				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->

<hr>

	<section class="comment-section center-text">
		<div class="container">
			<h4><b>POST COMMENT</b></h4>
			<div class="row">

				<div class="col-lg-2 col-md-0"></div>
				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
						<form method="post">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" name="name" class="form-control"
										placeholder="Enter your name" aria-invalid="true" required >
								</div><!-- col-sm-6 -->
								<div class="col-sm-6">
									<input type="email" aria-required="true" name="email" class="form-control"
										placeholder="Enter your email" aria-invalid="true" required>
								</div><!-- col-sm-6 -->

								<div class="col-sm-12">
									<textarea name="body" rows="2" class="text-area-messge form-control"
										placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
								</div><!-- col-sm-12 -->
								<div class="col-sm-12">
									<button class="submit-btn" type="submit" name="submit" id="form-submit"><b>POST COMMENT</b></button>
								</div><!-- col-sm-12 -->

							</div><!-- row -->
						</form>
					</div><!-- comment-form -->
<?php $comments = Comment::find_all(); ?>

					<h4><b>COMMENTS(<?php echo count($comments)?>)</b></h4>
<?php if ($comments): ?>
<?php foreach ($comments as $comment): ?>

					<div class="commnets-area text-left">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $comment->name;?></b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p><?php echo $comment->body; ?></p>

						</div>


					</div><!-- commnets-area -->
<?php endforeach; ?>
<?php endif;?>
					

					<a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</a>

				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>

<?php include('includes/footer.php') ?>
	
