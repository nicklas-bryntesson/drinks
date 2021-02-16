<?php

/**
 * Individual drink card
 */
?>

<li class="card">
    <article>
        <?php
        $image = get_field('avatar');
        $ingredients = get_field('liqour');

        if (!empty($image)) { ?>
            <figure class="thumbnail">
                <img src="<?php echo $image['url'] ?>" alt="Picture of the drink <?php the_title(); ?>">
            </figure>
        <?php } else {
            echo 'No Avatar';
        } ?>
        <h3><?php the_title(); ?></h3>
        <?php if ($ingredients) { ?>
            <ul>
                List of ingredients
            </ul>
        <?php } ?>

        <p><?php echo $ingredients ?></p>
        <a class="btn" href="<?php get_the_permalink() ?>">Read more</a>
        <small>Drink type:</small>
        <small>Flavour profile:</small>
    </article>
</li>