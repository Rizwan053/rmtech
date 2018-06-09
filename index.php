<?php include('includes/header.php')?>
<?php 
$posts = Post::find_all();

?>

<?php 


$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;


$items_per_page = 12;


$items_total_count = Post::count_all();



$paginate = new Paginate($page, $items_per_page, $items_total_count);


$sql = "SELECT * FROM posts ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";
$posts = Post::find_by_query($sql);





?>

	<div class="main-slider">
<?php include('includes/categories.php') ?>
		

	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">
<?php if ($posts) : ?>
<?php foreach($posts as $post) : ?>

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
	
						<div class="single-post post-style-1">

							<div class="blog-image"><img class="img-thumbnail" src="<?php echo $post->image ? 'admin/' . $post->path() : "http://via.placeholder.com/400x400" ?>" alt="blog-image"></div>

							<!-- <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a> -->

							<div class="blog-info">

								<h4 class="title"><a href="/post.php?id=<?php echo $post->id ?>"><b><?php echo $post->title;?>
								</b></a></h4>
<?php $comments = Comment::find_by_post($post->id);?>
<?php $category = Category::find_by_id($post->category_id);?>
								<ul class="post-footer">

									<li><a href="/post.php?id=<?php echo $post->id ?>"><i class="ion-pricetags"></i><?php echo $category->name ?></a></li>
									<li><a href="/post.php?id=<?php echo $post->id ?>"><i class="ion-chatbubble"></i><?php echo count($comments) ?></a></li>
									<li><a href="/post.php?id=<?php echo $post->id ?>"><i class="ion-eye"></i><?php echo rand(0,100); ?></a></li>
								</ul>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
<?php endforeach; ?>
<?php endif; ?>				

			</div><!-- row -->

<div class="row">


<ul class="-btn pagination">

<?php 


if ($paginate->page_total() > 1) {
	if ($paginate->has_previous()) {

		echo "<li class=' previous page-item '><a class='page-link' href='index.php?page={$paginate->previous()}'>Previous</a></li>";


	}






for ($i = 1; $i <= $paginate->page_total(); $i++) {


if ($i == $paginate->current_page) {


echo "<li class='active page-item '><a class='more-comment page-link' href='index.php?page={$i}'>{$i}</a></li>";



} else {

echo "<li class=' page-item '><a class='page-link' href='index.php?page={$i}'>{$i}</a></li>";


}

}

	if ($paginate->has_next()) {

		echo "<li class='next page-item '><a class='page-link' href='index.php?page={$paginate->next()}'>Next</a></li>";


	}




}


?>


</ul>




</div>

		</div><!-- container -->
	</section><!-- section -->


<?php require_once('includes/footer.php')?>
