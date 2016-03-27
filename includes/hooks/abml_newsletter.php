<?php

function abml_add_title_class($output){
  return $output.' u-txtCenter';
}
add_filter('abml_title_class','abml_add_title_class');
