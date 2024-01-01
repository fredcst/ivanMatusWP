<?php ?>
    <?php get_header(); ?>
        <?php if (have_posts()) : ?>
            <?php the_post() ?>
            <div class="container">
                <?php the_content() ?>
        </div>
        <?php endif; ?>
    <?php get_footer() ?>