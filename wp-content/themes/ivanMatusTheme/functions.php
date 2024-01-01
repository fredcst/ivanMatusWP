<?php
// Ajouter les informations du parent dans la réponse de l'API REST pour le type de contenu "peinture" sans affecter l'éditeur
function ajouter_parent_dans_api_rest_sans_affecter_editeur($data, $post, $context) {
    if ($context === 'view' && $post->post_type === 'peinture') {
        $data->data['parent'] = (int) $post->post_parent;
    }
    return $data;
}
add_filter('rest_prepare_peinture', 'ajouter_parent_dans_api_rest_sans_affecter_editeur', 10, 3);
