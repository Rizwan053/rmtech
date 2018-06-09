<?php  require_once('admin/classes/init.php') ?>



<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>RM Tech World</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="./assets/common-css/bootstrap.css" rel="stylesheet">

	<link href="./assets/common-css/swiper.css" rel="stylesheet">

	<link href="./assets/common-css/ionicons.css" rel="stylesheet">


	<link href="./assets/front-page-category/css/styles.css" rel="stylesheet">

	<link href="./assets/front-page-category/css/responsive.css" rel="stylesheet">

	<link href="./assets/single-post-2/css/styles.css" rel="stylesheet">

	<link href="./assets/single-post-2/css/responsive.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="/" class="logo"><b>RM Tech World</b></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="/">Home</a></li>
				
			</ul><!-- main-menu -->
			

			<div class="src-area">
				<form action="/search.php" method='post'>
					<button class="src-btn" name="src" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" name="search" type="text" placeholder="Type of search">
				</form>
			</div>


			

		</div><!-- conatiner -->
	</header>