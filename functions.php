<?php

//Enable Post Thumbnail - Featured Image
add_theme_support( 'post-thumbnails'); 

// Enable Generated feed links
add_theme_support( 'automatic-feed-links' );

// Enable title tag for generate page title
add_theme_support( 'title-tag' );

/**
 * Change readmore post cut
 */

function new_excerpt_more($more) {
	global $post;
	return ' ... ';
}

add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 30;
}

add_filter('excerpt_length', 'new_excerpt_length');

/**
 * Load Theme Style and Script
 */

function load_theme_scripts() {

	//Load fonts
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap' );
	wp_enqueue_style( 'pt-sans', 'https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap' ); 
	
	// Add Bootstrap, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css', array(), '3.3' );

	// Load our main stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), rand(111,9999));

	// Add FontAweasome, used in the main stylesheet.
	wp_enqueue_style( 'font-aweasome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5' );

	// Load Javascript
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js', array(), '3.3', true );
}

add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );

function move_enqueue_scripts() {
    wp_scripts()->add_data( 'jquery', 'group', 1 );
    wp_scripts()->add_data( 'jquery-core', 'group', 1 );
    wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'move_enqueue_scripts' );

/**
 * Register Widget Area
 */

function blog_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'hijau-kekinian' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'hijau-responsive' ),
		'before_widget' => '<div class="widget-contents">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>'
	) );
}

add_action('widgets_init','blog_widgets_init');

?>