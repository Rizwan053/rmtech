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

							<div class="blog-image"><img class="img-thumbnail" src="<?php echo $post->image ? 'admin/' . $post->path() : "http://via.placeholder.com/400x400" ?>" alt="blog-image"></div>

							<!-- <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a> -->

							<div class="blog-info">

								<h4 class="title"><a href="/post.php?id=<?php echo $post->id ?>"><b><?php echo $post->title; ?>
								</b></a></h4>
<?php $comments = Comment::find_by_post($post->id); ?>
<?php $category = Category::find_by_id($post->category_id); ?>

								<ul class="post-footer">
									<li><a href="/post.php?id=<?php echo $post->id ?>"><i class="ion-pricetags"></i><?php echo $category->name ?></a></li>
									<li><a href="/post.php?id=<?php echo $post->id ?>"><i class="ion-chatbubble"></i><?php echo count($comments) ?></a></li>
									<li><a href="/post.php?id=<?php echo $post->id ?>"><i class="ion-eye"></i><?php echo rand(0, 100); ?></a></li>

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







			

		</div><!-- container -->
	</section><!-- section -->


<?php require_once('includes/footer.php') ?>
