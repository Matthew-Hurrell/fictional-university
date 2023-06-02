<!-- Header -->
<?php get_header(); ?>

<!-- Wordpress Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Title and Permalink -->
    <h2><?php the_title(); ?></h2>

    <!-- Content -->
    <?php the_content(); ?>

<!-- No Posts Found -->
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!-- Footer -->
<?php get_footer(); ?>