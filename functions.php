<?php
//custum image 
add_image_size('product_image small',300,300,false);
add_image_size('product_image_large',700,700,false);
add_theme_support('post-thumbnails');
register_sidebar( array(
	'name' => '404 Page',
	'id' => '404',
	'description'  => __( 'Content for your 404 error page goes here.' ),
	'before_widget' => '<div id="error-box">',
	'after_widget' => '</div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>'
  ) );
function html5_search_form( $form ) { 
	$form = '
	<form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
	<div class="input-append span12">
	<label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
	<input type="search" class="search-query" value="' . get_search_query() . '" name="s" id="s" placeholder="Recherche" >
	<button type="submit" id="searchsubmit"  class="btn" value="'. esc_attr__('', 'domain') .'"><i class="fa fa-search"></i></button>
	</div>
	</form>';
	return $form;
}
<<<<<<< HEAD
add_action( 'wp_enqueue_scripts','load_Stylesheets');



function addjs()
{
   wp_register_script('jquery',get_template_directory_uri().'/js/jquery-3.2.1.min.js',array(),1,1,1);
wp_enqueue_scripts('jquery');

 wp_register_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array(),1,1,1);
wp_enqueue_scripts('carousel');

 wp_register_script('countdown',get_template_directory_uri().'/js/jquery.countdown.js',array(),1,1,1);
wp_enqueue_scripts('countdown');

 wp_register_script('masonry',get_template_directory_uri().'/js/masonry.pkgd.min.js',array(),1,1,1);
wp_enqueue_scripts('jquery');

 wp_register_script('magnific-popup',get_template_directory_uri().'/js/magnific-popup.min.js',array(),1,1,1);
wp_enqueue_scripts('magnific-popup');


 wp_register_script('main',get_template_directory_uri().'/js/main.js',array(),1,1,1);
wp_enqueue_scripts('main');


}add_action( 'wp_enqueue_scripts','addjs');


=======
add_filter( 'get_search_form', 'html5_search_form' );
>>>>>>> 0c802bca3088b39d5e5663680bd719cfcc65f261
?>
