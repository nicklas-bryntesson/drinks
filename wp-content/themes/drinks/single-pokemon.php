<?php
/**
 * The template for displaying all single pokemons
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pokemon
 * @since 1.0.0
 */

get_header(); 


/* Start the Loop */
while ( have_posts() ) :
	the_post(); ?>
    
    <header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

<?php endwhile; // End of the loop.


get_footer();