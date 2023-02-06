<?php
$tt3c_public_dir = trailingslashit( get_stylesheet_directory() ) . 'public';

add_action( 'wp_enqueue_scripts', 'tt3c_enqueue_public_scripts' );
function tt3c_enqueue_public_scripts() {
	global $tt3c_public_dir;
	wp_register_style( 'dual-range-slider-css', $tt3c_public_dir . '/css/dual-range-slider.css', array(), '1.0.0', false );
	wp_register_script( 'dual-range-slider-js', $tt3c_public_dir . '/js/dual-range-slider.js', array(), '1.0.0', true );

}
