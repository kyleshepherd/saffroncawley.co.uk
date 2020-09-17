<?php

add_theme_support( 'thumbnails' );
add_image_size( 'portrait', 1200, 1600, true );
add_image_size( 'portrait-prev', 750, 1000, true );
add_image_size( 'portrait-small', 360, 475, true );
add_image_size( 'landscape', 1600, 1200, true );
add_image_size( 'landscape-prev', 1000, 750, true );
add_image_size( 'landscape-small', 475, 360, true );

function devherd_register_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/css/magnific.css', array(), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'devherd_register_styles' );

function devherd_register_scripts() {
	wp_enqueue_script(
		'devherd',
		get_template_directory_uri() . '/assets/js/devherd.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);
	wp_enqueue_script(
		'magnific',
		get_template_directory_uri() . '/assets/js/magnific.js',
		array(),
		'1.0.0'
	);
	wp_enqueue_script(
		'masonry',
		get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js',
		array( 'jquery' ),
		'1.0.0'
	);
}

add_action( 'wp_enqueue_scripts', 'devherd_register_scripts' );

function devherd_register_fonts() {
	wp_register_style( 'Muli', 'https://fonts.googleapis.com/css2?family=Muli:wght@300;400;500;700;900&display=swap' );
	wp_enqueue_style( 'Muli' );
}

add_action( 'wp_enqueue_scripts', 'devherd_register_fonts' );

function register_navigation() {
	register_nav_menu( 'header_menu', __( 'Header Menu' ) );
}

add_action( 'init', 'register_navigation' );

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page();

}