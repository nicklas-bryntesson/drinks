<?php

/** 
 * List of drinks
 *
 */
?>

<?php
// WP_Query arguments
$args = array(
    'post_type'              => array('cpt_drinks'),
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

            <?php get_template_part('components/drink-card') ?>

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