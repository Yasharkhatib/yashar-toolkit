<div
    class="ytk-post-grid"
    style="--ytk-columns: <?php echo esc_attr($columns); ?>;"
>

<?php while ($query->have_posts()) : $query->the_post(); ?>

<article class="ytk-post-card">

    <?php if ( has_post_thumbnail() ) : ?>

        <a href="<?php the_permalink(); ?>" class="ytk-thumbnail">

            <?php the_post_thumbnail('large'); ?>

        </a>

    <?php endif; ?>


    <h2 class="ytk-title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <p class="ytk-excerpt">
        <?php the_excerpt(); ?>
    </p>

    <div class="ytk-post-meta">

    <span class="ytk-author">
        <?php echo get_the_author(); ?>
    </span>


    <span class="ytk-date">
        <?php echo get_the_date(); ?>
    </span>


    <span class="ytk-category">
        <?php

        $categories = get_the_category();

        if ( ! empty($categories) ) {

            echo $categories[0]->name;

        }

        ?>
    </span>


</div>

</article>

<?php endwhile; ?>

</div>