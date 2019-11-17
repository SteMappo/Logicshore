<?php get_header()?>
<?php if(have_post()):?>
	<?php while(have_post()):the_post();?>

		<?php the_title(); ?>
	<?php endif?>
<?php endwhile?>
<?php get_footer()?>