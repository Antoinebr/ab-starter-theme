<?php
// Menu principal
function menu_principal() {
  $locations = array(
    'menu_haut' => __( 'Menu haut', 'text_domain' ),
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'menu_principal' );



// Ajoute une classe current dans le menu pour le lien de la page courante
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
  if( in_array('current-menu-item', $classes) ){
    $classes[] = 'current ';
  }
  return $classes;
}
