<?php 

// Add options button to wp_side
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// Adds menu option to appearance tab
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// WordPress Titles
add_theme_support( 'title-tag' );

//featured thumnail 
add_theme_support( 'post-thumbnails' );

// Add scripts and stylesheets
function theme_scripts() {
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap-grid.min.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main-style.css',false,'v1','all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style('hover', get_template_directory_uri() . '/css/hover.css');
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css' );
    wp_enqueue_style('animate',get_template_directory_uri() . '/css/animate.css');
    // wp_enqueue_style('style',get_template_directory_uri() . '/css/style.css');


}

add_action( 'wp_enqueue_scripts', 'theme_scripts');

// Hover effect on menu item 
function special_nav_class( $classes, $item ){
	
 if( in_array('menu-item', $classes)){

 $classes[] = "hvr-underline-from-left";
 
 }

 if (in_array('current-menu-item', $classes) ){

        $classes[] = 'active ';
}

 return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

add_theme_support( 'post-thumbnails' );
// Add scripts and stylesheets
add_action( 'wp_enqueue_scripts', 'yourtheme_scripts');

function yourtheme_scripts(){
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0',true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
	wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script('wow', get_template_directory_uri() . "/js/wow.min.js", array(),'1.0.0',true);


}


?>