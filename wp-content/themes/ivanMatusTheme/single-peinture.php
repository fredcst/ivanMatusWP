    <?php get_header(); ?>
    <div class="container">
        <?php the_post() ?>
        <h1><?php the_title() ?></h1>

    <?php
    $current_page_id = get_the_ID();
    $parent_id = wp_get_post_parent_id($current_page_id);
    $children = get_pages(array('child_of' => $parent_id));

    ?>

    <?php echo $parent_id ?>
        <ul class="list-group list-group-horizontal-md">
            <?php if ($parent_id  == 0): ?> 
                <li class="list-group-item"><?php the_title();?></li>
                <?php if ($children) {
                foreach ($children as $child) {
                    echo '<li class="list-group-item">' . $child->post_title . '<li>'; // Afficher le titre de chaque enfant
                        // Vous pouvez également accéder à d'autres données de chaque enfant, par exemple : $child->post_content
                    }
                }
                ?>
                <?php else: ?>
                <li class="list-group-item"><?php echo get_the_title($parent_id) ?></li>
            <?php endif; ?>

        </ul>
        <?php the_content() ?>
    </div>
        <?php get_footer() ?>