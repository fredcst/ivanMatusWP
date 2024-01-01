<?php get_header(); ?>
<div class="container">
    <?php the_post() ?>
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>
</div>
    <?php get_footer() ?>