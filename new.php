<?php
/* Template Name: Full Width Elementor */
get_header();
?>

<div class="full-width-elementor">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php
get_footer();
