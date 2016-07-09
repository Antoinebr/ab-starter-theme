<?php
function ab_customizer_register( $wp_customize ) {

  $wp_customize->add_panel( 'panel_footer', array(
    'priority' => 10,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __( 'Gestion du Footer', 'textdomain' ),
    'description' => __( 'Ici vous pouvez gérer les options du footer', 'textdomain' ),
    )
  );

  /*
  *
  * SECTION FRENCH
  *
  */
  $wp_customize->add_section( 'section_footer_fr', array(
    'priority' => 10,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __( 'Footer FR', 'textdomain' ),
    'description' => '',
    'panel' => 'panel_footer',
    ) );


    $wp_customize->add_setting( 'ab_footer_desc_fr');

    $wp_customize->add_control( 'ab_footer_desc_fr', array(
      'type' => 'textarea',
      'priority' => 10,
      'section' => 'section_footer_fr',
      'label' => __( 'Contenu footer gauche', 'textdomain' ),
      'description' => '',
      )
    );


    $wp_customize->add_setting('ab_footer_menu_left_title_fr');

    $wp_customize->add_control('ab_footer_menu_left_title_fr',array(
      'label'      => __( 'Titre du menu footer gauche', 'd2si' ),
      'section' => 'section_footer_fr',
      'settings'   => 'ab_footer_menu_left_title_fr',
      'type'           => 'text' // voir les types dispo // https://codex.wordpress.org/Class_Reference/WP_Customize_Control
      )
    );


    $wp_customize->add_setting('ab_footer_menu_right_title_fr');

    $wp_customize->add_control('ab_footer_menu_right_title_fr',array(
      'label'      => __( 'Titre du menu footer droit', 'd2si' ),
      'section' => 'section_footer_fr',
      'settings'   => 'ab_footer_menu_right_title_fr',
      'type'           => 'text' // voir les types dispo // https://codex.wordpress.org/Class_Reference/WP_Customize_Control
      )
    );



    $wp_customize->add_setting('ab_footer_right_title_fr');

    $wp_customize->add_control('ab_footer_menu_right_title_fr',array(
      'label'      => __( 'Titre bloc footer droit', 'd2si' ),
      'section' => 'section_footer_fr',
      'settings'   => 'ab_footer_right_title_fr',
      'type'           => 'text' // voir les types dispo // https://codex.wordpress.org/Class_Reference/WP_Customize_Control
      )
    );


    $wp_customize->add_setting('ab_footer_right_content_fr');

    $wp_customize->add_control('ab_footer_right_content_fr',array(
      'label'      => __( 'Contenu du footer droit', 'd2si' ),
      'section' => 'section_footer_fr',
      'settings'   => 'ab_footer_right_content_fr',
      'type'           => 'textarea' // voir les types dispo // https://codex.wordpress.org/Class_Reference/WP_Customize_Control
      )
    );


    $wp_customize->add_setting('ab_footer_right_btn_fr');

    $wp_customize->add_control('ab_footer_right_btn_fr',array(
      'label'      => __( 'Titre du bouton footer droit', 'd2si' ),
      'section' => 'section_footer_fr',
      'settings'   => 'ab_footer_right_btn_fr',
      'type'           => 'text' // voir les types dispo // https://codex.wordpress.org/Class_Reference/WP_Customize_Control
      )
    );




  } // ab_customizer_register



  add_action( 'customize_register', 'ab_customizer_register' );
