<?php
/**
* Cache des menus dans l'admin
*/
function remove_menus(){
  remove_menu_page( 'themes.php' ); //Appearance
  #remove_menu_page( 'users.php' ); //Users
  remove_menu_page( 'tools.php' ); //Tools
  remove_menu_page( 'options-general.php' ); //Settings
  remove_menu_page( 'acf.php' ); //Settings
  remove_menu_page('edit.php?post_type=acf-field-group'); // Acf
  //remove_menu_page('edit.php'); // Acf
  remove_menu_page('edit-comments.php'); // comment


  remove_menu_page( 'plugins.php' ); //Plugins
  #remove_menu_page('mainwp_child_tab'); // Main WP
}

if( is_user_logged_in()) :
  $user_id = get_current_user_id();
  if($user_id !== 1) add_action( 'admin_menu', 'remove_menus' );
endif;
?>
