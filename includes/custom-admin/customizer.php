<?php


// customizer

function ab_register_theme_customizer( $wp_customize ) {


  /**
  *  Ajoute un champ d'upload logo au customizer
  *  Récupérer la value dans le theme -> 	echo get_theme_mod("ab_logo");
  */
  $wp_customize->add_setting(
  'ab_logo'
);

$wp_customize->add_control(

new WP_Customize_Upload_Control($wp_customize,'logo', // voir les controls dispo -> https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control#Classes
array(
  'label'      => __( 'Logo', 'd2si' ),
  'section'    => 'title_tagline', // voir les sections par défaut -> https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section#Default_Sections
  'settings'   => 'ab_logo',
  'extensions' => array( 'jpg', 'jpeg', 'gif', 'png', 'svg' ),
  )
  )
);



/**
*  Ajoute un champ d'upload logo White au customizer
*
*/
$wp_customize->add_setting(
'ab_logo_white'
);

$wp_customize->add_control(

new WP_Customize_Upload_Control($wp_customize,'logo_white',
array(
  'label'      => __( 'Logo Blanc', 'd2si' ),
  'section'    => 'title_tagline', //
  'settings'   => 'ab_logo_white',
  'extensions' => array( 'jpg', 'jpeg', 'gif', 'png', 'svg' ),
  )
  )
);



/**
*  Ajoute un champ de description au customizer
*
*/
$wp_customize->add_setting(
'ab_footer_desc'
);

$wp_customize->add_control(

new WP_Customize_Control($wp_customize,'footer_desc',
array(
  'label'      => __( 'Description footer', 'd2si' ),
  'section'    => 'title_tagline', //
  'settings'   => 'ab_footer_desc',
  'type'           => 'textarea' // voir les types dispo // https://codex.wordpress.org/Class_Reference/WP_Customize_Control
  )
  )
);




}
add_action( 'customize_register', 'ab_register_theme_customizer' );
