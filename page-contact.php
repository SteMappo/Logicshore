<?php get_header('internal'); ?>
<div class="contact-page">
	<div class="container-fluid">
		<div class="form">
		   <div class="row">
				<div class="col-md-6" id="form-responsive">
			    	<div class="form-introduction">
			    		<div class="introduction">
			    		    <h3>Get in touch!</h3>
			    		    <div class="underline"></div>
			    	        <h4>Are you wondering how custom software can transform your business?<br> Are you looking for a development team to create your app?<br>We would love to hear from you and discuss how we can help.</h4>
			    	        
			    		</div>
			    	</div>
			    </div>
				<div class="col-md-6">
					<form action="">
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label for="">First Name</label>
									<input type="text" class="form-control" placeholder="First name">
								</div>
								<div class="col">
									<label for="">Last Name</label>
									<input type="text" class="form-control" placeholder="Last name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label for="">Email</label>
									<input type="text" class="form-control" placeholder="Email">
								</div>
								<div class="col">
									<label for="">Company</label>
									<input type="text" class="form-control" placeholder="Company">
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
	<div class="container-fluid">
		<div class="contact-info">
			<div class="row">
				<?php $loop = 0;?>
				<?php if(have_rows('contact_information')): ?>
				    <?php while(have_rows('contact_information')): the_row();$loop++;?>
						<?php $coutry = get_sub_field('country'); ?>
			            <?php $phoneNumber = get_sub_field('phone_number') ;?>
			            <?php $office = get_sub_field('office');?>
			            <?php $address = get_sub_field('address'); ?>
			            <?php $posts = get_sub_field('section');?>
			            <?php foreach( $posts as $post ):?>
			            	<?php if($post == 'uk'):?>
			                <div class="col-md-3" id="contact-uk">
								<div class="title">
									<h3><?php echo $coutry;?></h3>
									<div class="underline"></div>
				            		<h4><i class="fa fa-phone fa-x2"></i> <?php echo $phoneNumber;?></h4>
				            	</div>
								<div class="contact">
								    <h3><?php echo $office?></h3>
								    <p><?php echo $address?></p>
								</div>
							</div>
			                <?php elseif($post == 'india'):?>
			                	<?php if($loop == 2):?>
				                	<div class="col-md-8">
										<div class="title">
											<h3><?php echo $coutry ;?></h3> 
											<div class="underline"></div>
											<h4><i class="fa fa-phone fa-x2"></i> <?php echo $phoneNumber ;?></h4>
										</div>
										<div class="row">
								<?php endif ;?>
											<div class="col-md-4">
												<div class="contact">
													 <h3><?php echo $office?></h3>
												    <p><?php echo $address?></p>
												</div>
											</div>
								    <?php if($loop == 4):?>
										</div>
									</div>
			                        <?php endif ;?>
			                <?php endif ;?>
							<?php if($loop == 1):?>
		                        <div class="col-md-1">
						            <div class="splitter"></div>
					            </div>
							<?php endif ;?>
						<?php endforeach?>
		            <?php endwhile; ?>
	            <?php endif; ?>
			</div>
	    </div>
	</div>
</div>
<?php get_footer(); ?> 