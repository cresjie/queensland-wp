<?php

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary' => __( 'Primary Menu',      'queensland' ),
	'secondary'  => __( 'Secondary Menu', 'queensland' ),
) );


function queensland_scripts()
{
	
	$dependencies = array(
			'jquery',
			'jquery-ui-sortable',
			'jquery-ui-datepicker',
			'wp-util'
		);
	

	if(!is_admin()) {
		wp_deregister_script('tp-hotel-booking');
		wp_register_script( 'tp-hotel-booking', get_template_directory_uri() . '/hotel-booking-asset/js/hotel-booking.js', $dependencies );
		wp_localize_script( 'tp-hotel-booking', 'hotel_booking_i18n', hb_i18n() );


		wp_deregister_script('tp-hb-extra-js');
		wp_register_script( 'tp-hb-extra-js', get_template_directory_uri() . '/hotel-booking-asset/js/site.js', array(), HB_VERSION, true );
		wp_localize_script( 'tp-hb-extra-js', 'TPHB_Extra_Lang', apply_filters( 'hb_extra_l10n', array() ) );
        wp_enqueue_script( 'tp-hb-extra-js' );
	}
	
	
	//wp_register_script('jquery', get_template_directory_uri() .'/js/jquery/jquery-3.1.1.min.js', []);
	wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', ['jquery']);


	wp_register_script('lightslider', get_template_directory_uri()  . '/js/lightslider/js/lightslider.min.js', ['jquery'], true);
	wp_register_script('featherlight', get_template_directory_uri()  . '/js/featherlight/featherlight.min.js', ['jquery'], true);
	wp_register_script('scrollbar', get_template_directory_uri() . '/js/jquery.scrollbar/jquery.scrollbar.min.js', ['jquery'], true);
	
	wp_register_script('script', get_template_directory_uri() . '/js/contentjs/script.js', ['jquery'], true);

	wp_enqueue_script(['jquery', 'bootstrap', 'lightslider', 'featherlight', 'scrollbar', 'script']);
}




add_action( 'wp_enqueue_scripts', 'queensland_scripts' );


add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


if( class_exists('TP_Hotel_Booking_Room_Extenstion') ) {
	add_action('single_add_button', array(TP_Hotel_Booking_Room_Extenstion::instance(),'single_add_button'));
}



function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}

function ql_get_attachment_image_src( $post_id ) {
    $args = array(
        'posts_per_page' => 1,
        'order'          => 'ASC',
        'post_mime_type' => 'image',
        'post_parent'    => $post_id,
        'post_status'    => null,
        'post_type'      => 'attachment',
    );
 
    $attachments = get_children( $args );
 	
 	var_dump($attachments);
    if ( $attachments ) {
        return  wp_get_attachment_thumb_url( $attachments[0]->ID ); //echo '<img src="' . wp_get_attachment_thumb_url( $attachments[0]->ID ) . '" class="current">';
    }
}
