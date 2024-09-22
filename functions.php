<?php

add_theme_support( 'title-tag' ); // Adds dynamic <title> tag support.
add_theme_support( 'post-thumbnails' ); // Enables featured image support for posts.
add_theme_support( 'custom-logo' ); // Allows adding a custom logo to the site.
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) ); // Support for HTML5 markup.


add_action( 'after_setup_theme', 'sheerwater_gardens_setup' );

function sheerwater_gardens_setup() {
	add_theme_support( 'wp-block-styles' );
}

/**
 * Retrieves the URL to the privacy policy page.
 *
 * @since 4.9.6
 *
 * @return string The URL to the privacy policy page. Empty string if it doesn't exist.
 */
function get_privacy_policy_url() {
	$url            = '';
	$policy_page_id = (int) get_option( 'wp_page_for_privacy_policy' );

	if ( ! empty( $policy_page_id ) && get_post_status( $policy_page_id ) === 'publish' ) {
		$url = (string) get_permalink( $policy_page_id );
	}

	/**
	 * Filters the URL of the privacy policy page.
	 *
	 * @since 4.9.6
	 *
	 * @param string $url            The URL to the privacy policy page. Empty string
	 *                               if it doesn't exist.
	 * @param int    $policy_page_id The ID of privacy policy page.
	 */
	return apply_filters( 'privacy_policy_url', $url, $policy_page_id );
}

/**
 * Displays the privacy policy link with formatting, when applicable.
 *
 * @since 4.9.6
 *
 * @param string $before Optional. Display before privacy policy link. Default empty.
 * @param string $after  Optional. Display after privacy policy link. Default empty.
 */
function the_privacy_policy_link( $before = '', $after = '' ) {
	echo get_the_privacy_policy_link( $before, $after );
}

/**
 * Returns the privacy policy link with formatting, when applicable.
 *
 * @since 4.9.6
 * @since 6.2.0 Added 'privacy-policy' rel attribute.
 *
 * @param string $before Optional. Display before privacy policy link. Default empty.
 * @param string $after  Optional. Display after privacy policy link. Default empty.
 * @return string Markup for the link and surrounding elements. Empty string if it
 *                doesn't exist.
 */
function get_the_privacy_policy_link( $before = '', $after = '' ) {
	$link               = '';
	$privacy_policy_url = get_privacy_policy_url();
	$policy_page_id     = (int) get_option( 'wp_page_for_privacy_policy' );
	$page_title         = ( $policy_page_id ) ? get_the_title( $policy_page_id ) : '';

	if ( $privacy_policy_url && $page_title ) {
		$link = sprintf(
			'<a class="privacy-policy-link" href="%s" rel="privacy-policy">%s</a>',
			esc_url( $privacy_policy_url ),
			esc_html( $page_title )
		);
	}

	/**
	 * Filters the privacy policy link.
	 *
	 * @since 4.9.6
	 *
	 * @param string $link               The privacy policy link. Empty string if it
	 *                                   doesn't exist.
	 * @param string $privacy_policy_url The URL of the privacy policy. Empty string
	 *                                   if it doesn't exist.
	 */
	$link = apply_filters( 'the_privacy_policy_link', $link, $privacy_policy_url );

	if ( $link ) {
		return $before . $link . $after;
	}

	return '';
}