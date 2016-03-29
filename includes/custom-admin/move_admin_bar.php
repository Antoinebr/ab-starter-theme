<?php

/**
*
* Déplace la barre d'admin de 40px vers le bas
*
*/
function ab_move_admin_bar(){
  echo "
  <style>
  #wpadminbar{
    top: 40px!important;
  }
  </style>
  ";
}
add_action( 'wp_head', 'ab_move_admin_bar' );
