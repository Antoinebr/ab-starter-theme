<?php
function my_scripts_method() {
  wp_deregister_script('jquery');
  wp_register_script('jquery',get_template_directory_uri() . '/js/libs/jquery.js', false, '1.7.2', true);
  wp_enqueue_script( 'cookies',get_template_directory_uri() . '/js/libs/cookies.js', array('jquery'), '1.10.0', true );
  wp_enqueue_script( 'magnific-popup',get_template_directory_uri() . '/js/libs/magnific-popup.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'owl',get_template_directory_uri() . '/js/libs/owl.js', array('jquery'), '1.10.0', true );
  wp_enqueue_script( 'device',get_template_directory_uri() . '/js/libs/device.js', array('jquery'), '0.1.61', true );
  wp_enqueue_script( 'ga',get_template_directory_uri() . '/js/libs/ga.js', array('jquery'), '0.1', true );
  wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', array('jquery','magnific-popup', 'owl','device','highlight','ga','cookies'), '1.10.0', true );
  wp_localize_script('app', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>
