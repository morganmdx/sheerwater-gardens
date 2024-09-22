<?php

add_theme_support( 'title-tag' ); // Adds dynamic <title> tag support.
add_theme_support( 'post-thumbnails' ); // Enables featured image support for posts.
add_theme_support( 'custom-logo' ); // Allows adding a custom logo to the site.
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) ); // Support for HTML5 markup.



add_action( 'after_setup_theme', 'sheerwater_gardens_setup' );

function sheerwater_gardens_setup() {
	add_theme_support( 'wp-block-styles' );

    // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
				'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
			)
		);
}

