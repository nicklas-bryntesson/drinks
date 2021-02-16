<?php

/**
 * The template for displaying all single Drinks
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Drinks * @since 1.0.0
 */

get_header();


/* Start the Loop */
while (have_posts()) :
	the_post(); ?>

	<header class="entry-header alignwide">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header>

	<?php the_content() ?>

<?php endwhile; // End of the loop.


get_footer();
