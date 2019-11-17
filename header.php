<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Logic Shore</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
							<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '')) ;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>