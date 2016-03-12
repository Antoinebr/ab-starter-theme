<?php
// Menu principal
function menu_principal() {
  $locations = array(
    'menu_haut' => __( 'Menu haut', 'text_domain' ),
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'menu_principal' );
