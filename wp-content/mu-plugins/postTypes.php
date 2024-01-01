<?php

// Enregistrer le type de contenu personnalisé "peinture"
function enregistrer_type_contenu_peinture() {
    $labels = array(
        'name'               => 'Peintures',
        'singular_name'      => 'Peinture',
        'add_new'            => 'Ajouter',
        'add_new_item'       => 'Ajouter une nouvelle peinture',
        'edit_item'          => 'Modifier la peinture',
        'new_item'           => 'Nouvelle peinture',
        'view_item'          => 'Voir la peinture',
        'search_items'       => 'Rechercher parmi les peintures',
        'not_found'          => 'Aucune peinture trouvée',
        'not_found_in_trash' => 'Aucune peinture trouvée dans la corbeille',
        'parent_item_colon'  => 'Peinture parente :',
        'menu_name'          => 'Peintures'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'show_in_rest'        => true,
        'supports'            => array('title', 'editor', 'thumbnail', 'page-attributes'), // Ajout de 'page-attributes'
        'capability_type'     => 'page',
        'hierarchical'        => true, // Cette option permet les pages enfants
        'rewrite'             => array('slug' => 'peinture'),
        'menu_icon'           => 'dashicons-admin-customizer', // Icône pour le menu
    );

    register_post_type('peinture', $args);
}
add_action('init', 'enregistrer_type_contenu_peinture');

// Ajouter les informations du parent dans la réponse de l'API REST pour le type de contenu "peinture"
// function ajouter_parent_dans_api_rest($args, $request) {
//     $post_type = 'peinture';

//     if ($post_type === $request['type'] && isset($args['get']['post_status']) && 'edit' === $args['get']['post_status']) {
//         $args['query']['post_parent'] = '';
//         $args['query']['post_parent__in'] = wp_list_pluck(get_posts(array('post_type' => $post_type, 'fields' => 'ids')), 'ID');
//     }

//     return $args;
// }
// add_filter('rest_peinture_query', 'ajouter_parent_dans_api_rest', 10, 2);


// // Ajouter une colonne pour afficher les parents dans le back-office
// function ajouter_colonne_parents_peinture($columns) {
//     $columns['parent'] = 'Parent';
//     return $columns;
// }
// add_filter('manage_peinture_posts_columns', 'ajouter_colonne_parents_peinture');

// // Afficher les données dans la colonne parent
// function afficher_contenu_colonne_parents_peinture($column, $post_id) {
//     if ($column === 'parent') {
//         $parent_id = wp_get_post_parent_id($post_id);
//         if ($parent_id > 0) {
//             $parent_title = get_the_title($parent_id);
//             echo '<a href="' . get_edit_post_link($parent_id) . '">' . $parent_title . '</a>';
//         } else {
//             echo 'Aucun parent';
//         }
//     }
// }
// add_action('manage_peinture_posts_custom_column', 'afficher_contenu_colonne_parents_peinture', 10, 2);

// // Modifier l'ordre des colonnes dans le tableau de gestion pour le type de contenu "peinture"
// function personnaliser_ordre_colonnes_peinture($columns) {
//     // Supprimer la colonne "Parent" du tableau des colonnes actuelles
//     $parent_column = $columns['parent'];
//     unset($columns['parent']);

//     // Insérer la colonne "Parent" avant la colonne de date
//     $date_column = $columns['date'];
//     $new_columns = array();
//     foreach ($columns as $key => $value) {
//         if ($key === 'date') {
//             $new_columns['parent'] = $parent_column;
//         }
//         $new_columns[$key] = $value;
//     }

//     return $new_columns;
// }
// add_filter('manage_peinture_posts_columns', 'personnaliser_ordre_colonnes_peinture');
