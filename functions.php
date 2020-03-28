<?php

//Enable Post Thumbnail - Featured Image
add_theme_support( 'post-thumbnails'); 

// Enable Generated feed links
add_theme_support( 'automatic-feed-links' );

// Enable title tag for generate page title
add_theme_support( 'title-tag' );

/**
 * Auto Thumbnail from first Image Post

add_filter('get_post_metadata', function($value, $object_id, $meta_key, $single) {
	if ($meta_key !== '_thumbnail_id' || $value) {
		return $value;
	}

	preg_match('~<img[^>]+wp-image-(\\d+)~', get_post_field('post_content', $object_id), $matches);
	if ($matches) {
		return $matches[1];
	}
	return $value;
}, 10, 4);
*/

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
	// Add Bootstrap, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css', array(), '3.3' );

	// Add Prism, used in the main stylesheet.
	wp_enqueue_style( 'prism', get_template_directory_uri() . '/css/prism.css', array(), '1.15' );

	// Add FontAweasome, used in the main stylesheet.
	wp_enqueue_style( 'FontAweasome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css', array(), '4.5' );

	// Load our main stylesheet.
	wp_enqueue_style( 'hijau-kekinian-style', get_stylesheet_uri(), array(), rand(111,9999));

	// Load Javascript
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.min.js', array(), '3.1', false );
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js', array(), '3.3', false );
	wp_enqueue_script( 'prism-js', get_template_directory_uri() . '/js/prism.js', array(), '1.15', false );
}

add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );

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