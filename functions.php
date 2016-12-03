<?php

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary' => __( 'Primary Menu',      'queensland' ),
	'secondary'  => __( 'Secondary Menu', 'queensland' ),
) );


function queensland_scripts()
{
	
	//wp_register_script('jquery', get_template_directory_uri() .'/js/jquery/jquery-3.1.1.min.js', []);
	wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', ['jquery']);

	wp_register_script('lightslider', get_template_directory_uri()  . '/js/lightslider/js/lightslider.min.js', ['jquery'], true);
	wp_register_script('featherlight', get_template_directory_uri()  . '/js/featherlight/featherlight.min.js', ['jquery'], true);
	wp_register_script('scrollbar', get_template_directory_uri() . '/js/jquery.scrollbar/jquery.scrollbar.min.js', ['jquery'], true);
	
	wp_register_script('script', get_template_directory_uri() . '/js/contentjs/script.js', ['jquery'], true);

	wp_enqueue_script(['jquery', 'bootstrap', 'lightslider', 'featherlight', 'scrollbar']);
}




add_action( 'wp_enqueue_scripts', 'queensland_scripts' );


add_theme_support( 'post-thumbnails' );
