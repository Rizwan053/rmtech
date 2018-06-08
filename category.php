<?php include('includes/header.php') ?>
<?php 
if (empty($_GET['id'])) {
    header('location:/');
}
$category = Category::find_by_id($_GET['id']);

if ($_GET['id'] !== $category->id) {
    header('location:/');
}

$posts = Post::find_by_category($_GET['id']);


?>





	<div class="main-slider">
<?php include('includes/categories.php') ?>
		

	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">
        
<?php if ($posts) { ?>
  <div class=' container-fluid  '>
                    <?php $category = Category::find_by_id($_GET['id']); ?>
<h4  class='alert alert-success text-center '>These Posts Belongs To <?php echo $category->name ?></h4>

</div>

			<div class="row">

		
<?php foreach ($posts as $post) : ?>
		<div class="col-lg-4 col-md-6">
					<div class="card h-100">
	
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="/admin/<?php echo $post->path(); ?>" alt="Blog Image"></div>

							<!-- <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a> -->

							<div class="blog-info">

								<h4 class="title"><a href="/post.php?id=<?php echo $post->id ?>"><b><?php echo $post->title; ?>
								</b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
<?php endforeach; ?>
</div>
<?php 
} else {
    echo " <div class=' row justify-content-center '>
                    <div class=' container-fluid col-12 '>
                    <h4  class='alert alert-danger text-center ' >No Post Available Now! Try other Categories</h4>
                    </div>
                    </div> ";
}
?>		







			<a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

		</div><!-- container -->
	</section><!-- section -->


<?php require_once('includes/footer.php') ?>