<?php
function theme_styles()  
{ 

		// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	// Conditionally load the FlexSlider CSS on the homepage
	if(is_page('home')) {
		wp_enqueue_style('flexslider');
	}

}
add_action('wp_enqueue_scripts', 'theme_styles');
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
add_filter( 'get_search_form', 'html5_search_form' );
?>
