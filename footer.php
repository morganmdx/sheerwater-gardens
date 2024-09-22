<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage sheerwater_gardens
 * @since Twenty Fourteen 1.0
 */
?>

<footer id="colophon" class="site-footer">

	<?php get_sidebar( 'footer' ); ?>

	<div class="site-info">
		<?php do_action( 'twentyfourteen_credits' ); ?>
		<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
		?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sheerwater_gardens' ) ); ?>" class="imprint">
		<?php
			/* translators: %s: WordPress */
			printf( __( 'Proudly powered by %s', 'sheerwater_gardens' ), 'WordPress' );
		?>
		</a>
	</div><!-- .site-info -->

</footer>