<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>School of Mechanics</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Sourav">

	<!-- css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<header id="site-header">
			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand page-scroll" href="<?= base_url() ?>">
							Home
						</a>
					</div>
					<div class="collapse navbar-collapse navbar-left navbar-main-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?= base_url('posts') ?>">Posts</a></li>
						</ul>
					</div>
					<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
						<ul class="nav navbar-nav">
							<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
								<li><a href="<?= base_url('logout') ?>">Logout</a></li>
							<?php else : ?>
								<li><a href="<?= base_url('register') ?>">Register</a></li>
								<li><a href="<?= base_url('login') ?>">Login</a></li>
							<?php endif; ?>
						</ul>
					</div><!-- .navbar-collapse -->
				</div><!-- .container-fluid -->
			</nav><!-- .navbar -->
		</header><!-- #site-header -->

		<main id="site-content" role="main">
			
			
