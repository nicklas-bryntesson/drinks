<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Pokemon
 * @since 1.0.0
 */

get_header();
?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <header class="content-header">
                <h2>The Wordpress way with <span class="wpQuery">WP_Query:</span></h2>
            </header>

            <?php
            // WP_Query arguments
            $args = array(
                'post_type'              => array('drinks'),
                'post_status'            => 'publish',
                'posts_per_page'         => 6,
                'orderby'                => 'rand',
            );

            // The Query
            $drinks = new WP_Query($args);

            // The Loop
            if ($drinks->have_posts()) { ?>
                <ul class="poke-list">

                    <?php while ($drinks->have_posts()) {
                        $drinks->the_post(); ?>

                        <li class="card">
                            <article>
                                <?php
                                $image = get_field('thumbnail');
                                $ingredients = get_field('ingridients');

                                if (!empty($image)) { ?>
                                    <figure class="thumbnail">
                                        <img src="<?php echo $image['url'] ?>" alt="Picture of the drink <?php the_title(); ?>">
                                    </figure>
                                <?php } else {
                                    echo 'kuken';
                                } ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo $ingredients ?></p>
                                <a class="btn" href="<?php get_the_permalink() ?>">Read more</a>
                                <small>Drink type:</small>
                                <small>Flavour profile:</small>
                            </article>
                        </li>

                    <?php } ?>

                </ul>

            <?php } else { ?>

                <div class="queryEmpty">
                    <h1>No drinks in database</h1>
                </div>

            <?php } ?>

            <?php
            // Restore original Post Data
            wp_reset_postdata();
            ?>

        </main><!-- #main .site-main -->
    </div><!-- #primary .content-area -->
</div><!-- #content .site-content -->

<?php
get_footer();
