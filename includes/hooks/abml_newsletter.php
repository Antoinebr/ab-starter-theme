<?php

function abml_add_title_class($output){
  return $output.' u-txtCenter';
}
add_filter('abml_title_class','abml_add_title_class');


function abml_add_form_class($output){
  return $output.' form-group form--inline';
}
add_filter('abml_form_class','abml_add_form_class');


function abml_send_email($email){
  //echo "Nouvel email enregistré :  $email à ".date("d/m/y G:i:s");

}
add_action('abml_after_email_record','abml_send_email');
