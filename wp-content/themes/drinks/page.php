<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Pokemon
 * @since 1.0.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
        <h1>Lets go Page!</h1>

        <?php the_post_thumbnail(); ?>

        <?php the_content(); ?>

    </article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; // End of the loop.

get_footer();