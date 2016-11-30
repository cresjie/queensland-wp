<?php

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary' => __( 'Primary Menu',      'queensland' ),
	'secondary'  => __( 'Secondary Menu', 'queensland' ),
) );


function queensland_assets()
{
	$dependencies = array(
			'jquery',
			'jquery-ui-sortable',
			'jquery-ui-datepicker',
			'wp-util'
		);
	wp_deregister_script('tp-hotel-booking');
	wp_register_script( 'tp-hotel-booking', get_template_directory_uri() . '/hotel-booking-asset/js/hotel-booking.js', $dependencies );
	wp_localize_script( 'tp-hotel-booking', 'hotel_booking_i18n', hb_i18n() );
	
}
add_action( 'wp_enqueue_scripts', 'queensland_assets' );

