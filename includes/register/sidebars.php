<?php
/**
* Add a sidebar.
*/
function ab_sidebar() {
  register_sidebar( array(
    'name'          => __( 'Sidebar Principale', 'textdomain' ),
    'id'            => 'sidebar-1',
    'class' => 'sidebar-widgets-wrap clearfix',
    'description'   => __( "Les widget de cette zone s'afficherons sur tout le site", 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="aligncenter text-center mt20">',
    'after_title'   => '</h4>',
    ) );
  }
  add_action( 'widgets_init', 'ab_sidebar' );
