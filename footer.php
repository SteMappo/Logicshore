<div class="footer clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="our-mission">
					<div class="mission-title">
						<h5>Our Mission</h5>
					</div>
					<div class="mission-description">
						<p>Logicshore’s mission is to support start-ups to build and scale their products from idea to
MVP and launch  with a unique UK-India delivery model.</p>
					</div>
				</div>		
			</div>
			<div class="col-md-4">

				<div class="footer-menu">
					<div class="title-menu">
						<h5>Navagation</h5>
					</div>
					<div class="menu">
					    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '' )) ?>
					</div>
			    </div>
			</div>
			<div class="col-md-4">
				<div class="logo">
					<div class="logo-inner">
						<a href="<?php bloginfo('wpurl')?>">
							<img src="<?php echo get_field('logo','options');?>" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>new WOW().init();</script>
</body>
</html>