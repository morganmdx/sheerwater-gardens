<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage sheerwater_gardens
 */
?>

<footer id="colophon" class="site-footer">

	<?php get_sidebar( 'footer' ); ?>

	<div class="site-info">
		<?php do_action( 'twentyfourteen_credits' ); ?>
		
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sheerwater_gardens' ) ); ?>" class="imprint">
		<?php
			/* translators: %s: WordPress */
			printf( __( 'Proudly powered by %s', 'sheerwater_gardens' ), 'WordPress' );
		?>
		</a>
	</div><!-- .site-info -->

</footer>