<?php

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'ab-small', 400, 300, true );
  add_image_size( 'ab-medium', 860, 570, true ); //300 pixels wide (and unlimited height)
}
