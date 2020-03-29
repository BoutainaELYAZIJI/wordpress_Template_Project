
<?php

 function load_Stylesheets()
{
    wp_register_style('font', get_template_directory_uri() . '/css/font-awesome.min.css',array(),1,'all');
    wp_enqueue_style('font');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(),1,'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('carousel', get_template_directory_uri(). '/css/owl.carousel.css',array(),1,'all' );
    wp_enqueue_style('carousel');
    wp_register_style('favicons', get_template_directory_uri() . '/img/favicon.ico',array(),1,'all');
    wp_enqueue_style('favicons');
    wp_register_style('animate',   get_stylesheet_directory_uri() . '/css/animate.css',array(),1,'all' );
    wp_enqueue_style('animate');
    wp_register_style('style', get_template_directory_uri() . '/css/style.css' ,array(),1,'all' );
    wp_enqueue_style('style');
    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' ,array(),1,'all' );
    wp_enqueue_style('magnific-popup');
    wp_register_style('themify-icons', get_template_directory_uri() . '/css/themify-icons.css' ,array(),1,'all' );
    wp_enqueue_style('themify-icons');
}
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





?>

