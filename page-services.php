<?php get_header('internal'); ?>
<div class="services-page">
	<div class="unqiue-uk-india clearfix">
		<div class="container">
			<div class="title">
				<?php $uniqueModelTitle = get_field('unique_uk_india');?>
				<?php if($uniqueModelTitle):?>
					<h3><?php echo $uniqueModelTitle;?></h3>
				<?php endif;?>
				
			    <div class="underline"></div>

			    <?php $uniqueModelSub = get_field('unique_model_sub') ;?>
			    <?php if($uniqueModelSub) :?>
			        <h5><?php echo $uniqueModelSub ;?></h5>
			    <?php endif ;?>
			</div>
			<div class="models">
				<div class="row">
					<?php $rows_unique = get_field('unique');?>
					<?php if($rows_unique) :?>
						<?php foreach ($rows_unique as $row_unique) :?>
							<?php $icon = $row_unique['icon'];?>
							<?php $modelStep = $row_unique['model_step'] ;?>
							<?php $modelTitle = $row_unique['model_title'];?>
							<div class="col-md-6">
							    <div class="model transition">
									<div class="model-icon">
										<div class="icon">
											<img src="<?php echo $icon;?>" alt="">
										</div>
									</div>
									<div class="model-title">
										<h5><?php echo $modelTitle;?></h5>
									</div>
									<div class="model-info">
										<p><?php echo $modelStep; ?></p>
									</div>
								</div>
							</div>
						<?php endforeach ;?>
					<?php endif ;?>
				</div>
			</div>
	    </div>
    </div>
    <div class="tech-capabilites">
    	<div class="container">
			<div class="title">
				<h3>Technical Capabilites</h3>
				<div class="underline"></div>
				<h5>Our experienced team covers frontend, backend as well as mobile development including the below languages and frameworks:</h5>
			</div>
			<div class="capabilites">
				<div class="row">

					<div class="col-md-6">
						<div class="hexagon left"></div>
					</div>
					<div class="col-md-6">
						<div class="hexagon left"></div>
					</div>
					<div class="col-md-6">
						<div class="hexagon right"></div>
					</div>
					<div class="col-md-6 no-margin">
						<div class="hexagon right"></div>
					</div>
				</div>
			</div>
			<div class="capabilites-info">
				<p>In addition to the above we offer comprehensive analytics and reporting capabilities.</p>
			</div>
		</div>
	</div>
	<div class="start-up-service-model">
		<div class="container">
			<div class="title">
				<?php $startUpTitle = get_field('start_up_service_title');?>
				<?php if($startUpTitle):?>
					<h3><?php echo $startUpTitle;?></h3>
				<?php endif;?>

				<div class="underline"></div>

				<?php $startUpSub = get_field('start_up_service_sub_title');?>
				<?php if($startUpSub):?>
					<h5><?php echo $startUpSub;?></h5>
				<?php endif;?>
            </div>
			<div class="service-models">
				<div class="row">
					<?php $rows_start = get_field('start');?>
					<?php if($rows_start) :?>
						<?php foreach($rows_start as $row_start) :?>
							<?php $image = $row_start['image'];?>
							<?php $name = $row_start['model_name'];?>
							<?php $description = $row_start['description'];?>
							<?php $price = $row_start['price'];?>
							<div class="col-md-4">
								<div class="service-model transition hvr-float-shadow">
									<div class="service">
										<div class="service-banner">
											<div class="service-banner-image" style="background:url(<?php if($image){ echo $image;}?>)no-repeat center center;background-size: cover;"></div>
										</div>
										<div class="overlay"></div>
										<div class="name">										   
											<h5><?php echo $name; ?></h5>
										</div>
									</div>
									<div class="description">
										<p><?php echo $description ;?></p>
									</div>
									<div class="price">
										<h6><?php echo $price ;?></h6>
									</div>
								</div>
							</div>
						<?php endforeach?>
					<?php endif ;?>
				</div>
			</div>
			<div class="call-to-action">
				<div class="action hvr-grow">
					<a href="<?php echo get_template_directory_uri(); ?>/page-contact/ ?>/">Make A Query   <i class="fa fa-angle-double-right " aria-hidden="true"></i></a>
				</div>
			</div>
        </div>
	</div>
	<div class="team clearfix">
		<div class="title">
			<?php $teamTitle = get_field('team_title');?>
			<?php if($teamTitle) :?>
				<h3><?php echo $teamTitle;?></h3>
			<?php endif ;?>

			<div class="underline"></div>

			<?php $teamSubTitle = get_field('team_sub_title');?>
			<?php if($teamSubTitle) :?>
				<h5><?php echo $teamSubTitle;?></h5>
			<?php endif ;?>
		</div>
		<div class="team-members clearfix">
			<div class="row">
				<div class="col-md-3">
					<div class="team-member">
						<div class="team-member-banner">
							<div class="team-member-image">
							</div>
						</div>
						<div class="overlay transition"></div>
						<div class="team-member-info transition">
							<div class="team-member-info-inner">
								<div class="name">
									<p>Stephen Mappouridis</p>
								</div>
								<div class="postion">
									<p>Rock Star Developer</p>
								</div>
								<div class="description">
									<p>Stephen has been working in the tech industry for 3 years and has never looked back since. His favourite movie is Shrek</p>
								</div>
							</div>
						</div>
				   </div>
				</div>
				<div class="col-md-3">
					<div class="team-member">
						<div class="team-member-banner">
							<div class="team-member-image">
							</div>
						</div>
						<div class="overlay transition"></div>
						<div class="team-member-info transition">
							<div class="team-member-info-inner">
								<div class="name">
									<p>Stephen Mappouridis</p>
								</div>
								<div class="postion">
									<p>Rock Star Developer</p>
								</div>
								<div class="description">
									<p>Stephen has been working in the tech industry for 3 years and has never looked back since. His favourite movie is Shrek</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-member">
						<div class="team-member-banner">
							<div class="team-member-image">
							</div>
						</div>
						<div class="overlay transition"></div>
						<div class="team-member-info transition">
							<div class="team-member-info-inner">
								<div class="name">
									<p>Stephen Mappouridis</p>
								</div>
								<div class="postion">
									<p>Rock Star Developer</p>
								</div>
								<div class="description">
									<p>Stephen has been working in the tech industry for 3 years and has never looked back since. His favourite movie is Shrek</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-member">
						<div class="team-member-banner">
							<div class="team-member-image">
							</div>
						</div>
						<div class="overlay transition"></div>
						<div class="team-member-info transition">
							<div class="team-member-info-inner">
								<div class="name">
									<p>Stephen Mappouridis</p>
								</div>
								<div class="postion">
									<p>Rock Star Developer</p>
								</div>
								<div class="description">
									<p>Stephen has been working in the tech industry for 3 years and has never looked back since. His favourite movie is Shrek</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-form">
		<div class="title">
			<div class="container">
			    <h3>Contact Us</h3>
			    <div class="underline"></div>
			    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
		    </div>
		</div>
		<div class="page-banner-background">
			<div class="page-banner-image"></div>
		</div>
		<div class="overlay"></div>
		<div class="form">
			<div class="container">
				<form action="">
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label for="">Full Name</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col">
								<label for="">Email</label>
								<input type="text" class="form-control">
							</div>
							<div class="col">
								<label for="">Company</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					 <div class="form-group">
					  	<label for="exampleFormControlSelect1">Select Office</label>
					    <select class="form-control classic" id="exampleFormControlSelect1">
					      <option>London</option>
					      <option>Hyderabad</option>
					      <option>Delhi</option>
					      <option>Vizag</option>
					    </select>
					</div>
					  <div class="form-group">
					  	<label for="exampleFormControlTextarea1">Message</label>
					  	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
