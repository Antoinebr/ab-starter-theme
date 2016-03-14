<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_theme_taxonomies', 0 );

// create two taxonomies, Thème de formations and writers for the post type "book"
function create_theme_taxonomies() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Thème de formations', 'taxonomy general name' ),
    'singular_name'     => _x( 'Thème de formation', 'taxonomy singular name' ),
    'search_items'      => __( 'Rchercher un Thème de formations' ),
    'all_items'         => __( 'Tous Thème de formations' ),
    'parent_item'       => __( 'Thème de formation parent' ),
    'parent_item_colon' => __( 'Thème de formation parent:' ),
    'edit_item'         => __( 'Editer le Thème de formation' ),
    'update_item'       => __( 'Mettre à jour Thème de formation' ),
    'add_new_item'      => __( 'Ajouter un nouveau Thème de formation' ),
    'new_item_name'     => __( 'Nouveau nom pour le thème de formation' ),
    'menu_name'         => __( 'Thème de formation' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'themes' ),
  );

  register_taxonomy( 'themes', array( 'sessions','formations' ), $args );
  // en deuxième argument la taxo prend comme paramètre les CPT associés à cette taxo

}
?>
