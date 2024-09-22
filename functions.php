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
				'primary'   => __( 'Top primary menu', 'sheerwater_gardens' ),
				'secondary' => __( 'Secondary menu in left sidebar', 'sheerwater_gardens' ),
			)
		);
}

/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 */
function sheerwater_gardens_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Primary Sidebar', 'sheerwater_gardens' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Main sidebar that appears on the left.', 'sheerwater_gardens' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Content Sidebar', 'sheerwater_gardens' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Additional sidebar that appears on the right.', 'sheerwater_gardens' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Widget Area', 'sheerwater_gardens' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears in the footer section of the site.', 'sheerwater_gardens' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action( 'widgets_init', 'sheerwater_gardens_widgets_init' );


/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function sheerwater_gardens_scripts() {
wp_enqueue_script(
    'sheerwater_gardens-script',
    get_template_directory_uri() . '/js/functions.js',
    array( 'jquery' ),
    '20221101',
    array(
        'in_footer' => false, // Because involves header.
        'strategy'  => 'defer',
    )
);
wp_localize_script(
    'sheerwater_gardens-script',
    'screenReaderText',
    array(
        /* translators: Hidden accessibility text. */
        'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'sheerwater_gardens' ) . '</span>',
        /* translators: Hidden accessibility text. */
        'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'sheerwater_gardens' ) . '</span>',
    )
);
wp_enqueue_style( 'main_css', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'sheerwater_gardens_scripts' );