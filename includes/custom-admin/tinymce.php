<?php
function override_mce_options($initArray) {
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');



function the_field_without_wpautop( $field_name ) {

  remove_filter('acf_the_content', 'wpautop');

  the_field( $field_name );

  add_filter('acf_the_content', 'wpautop');
}


?>
