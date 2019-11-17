<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Logic Shore</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <?php wp_head(); ?>	
</head>
<body>
<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="header-left">
					<div class="logo">
						<div class="logo-inner">
							<a href="<?php bloginfo('wpurl')?>">
								<img src="<?php echo get_field('logo','options');?>" alt="">
							</a>
						</div>
					</div>
					<div class="button-menu">
						<a class="btn btn-menu"><i class="fa fa-lg fa-bars"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="header-right">
					<div class="nav">
						<div class="nav-inner">
						    <?php wp_nav_menu(array('theme_location' => 'header-menu','container' => '')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="header-sticky transition">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="header-left">
					<div class="logo">
						<div class="logo-inner">
							<a href="<?php bloginfo('wpurl');?>">
							    <img src="<?php echo get_field('logo','options');?>" alt="">
							</a>
						</div>
					</div>
					<div class="button-menu">
						<a class="btn btn-menu"><i class="fa fa-lg fa-bars"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="header-right">
					<div class="nav">
						<div class="nav-inner">
							<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '')) ;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-banner">
	<?php include TEMPLATEPATH . "/includes/internal-page-banner.php"; ?>
</div>

