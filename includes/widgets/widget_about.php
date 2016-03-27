<?php


/**
*
*  Widget ABOUT
*/


/**
* Adds Foo_Widget widget.
*/
class abAbout_Widget extends WP_Widget { // Remplacer Foo_Widget par le nom du nouveau Widget

  /**
  * Register widget with WordPress.
  */
  function __construct() {
    parent::__construct(
    'abAbout_Widget', //  ID du widget
    __( 'A propos', 'text_domain' ), // Name
    array( 'description' => __( 'Widget a propos', 'text_domain' ), ) // Args
  );
}

/**
* Front-end display of widget.
*
* @see WP_Widget::widget()
*
* @param array $args     Widget arguments.
* @param array $instance Saved values from database.
*/
public function widget( $args, $instance ) {
  // ici mon affichage front
  echo $args['before_widget'];

  if ( ! empty( $instance['url'] ) ) {
    $url = $instance['url'];
    echo  "<img class=' img-responsive img-center' src='$url' width='120'>";
  }

  if ( ! empty( $instance['title'] ) ) {
    $title = $instance['title'];
    echo  "<p class='u-txtCenter u-mts txtM'>$title</p>";
  }


  if ( ! empty( $instance['desc'] ) ) {
    $desc = $instance['desc'];
    echo  "<p class='u-textCenter u-mts'>$desc</p>";
  }


  echo $args['after_widget'];
  // LE code que je veux ici //
}

/**
*
* CREATION DU FORMULAIRE DANS LE BACKOFFICE
*
* Back-end widget form.
*
* @see WP_Widget::form()
*
* @param array $instance Previously saved values from database.
*/
public function form( $instance ) {

  // On test si la var $contenu existe si non $instance['contenu'] est défini



  $url = ! empty( $instance['url'] ) ? $instance['url'] : __( "L'URL de l'image", 'text_domain' );
  $title = ! empty( $instance['title'] ) ? $instance['title'] : __( "Le titre", 'text_domain' );
  $desc = ! empty( $instance['desc'] ) ? $instance['desc'] : __( "Description", 'text_domain' );



  ?>
  <p>

    <!-- CREATION DES CHAMPS DU FORMULAIRE -->

    <!-- url -->
    <label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Url:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( "url" ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>">

    <!-- title -->
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( "title" ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">

    <!-- url -->
    <label for="<?php echo $this->get_field_id( 'desc' ); ?>"><?php _e( 'Description:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( "desc" ); ?>" name="<?php echo $this->get_field_name( 'desc' ); ?>" type="text" value="<?php echo esc_attr( $desc ); ?>">


  </p>


  <?php
}

/**
* ON NETTOIT LES VALEURS POUR EVITER LES XSS
* Sanitize widget form values as they are saved.
*
* @see WP_Widget::update()
*
* @param array $new_instance Values just sent to be saved.
* @param array $old_instance Previously saved values from database.
*
* @return array Updated safe values to be saved.
*/
public function update( $new_instance, $old_instance ) {

  // permet de nétoyer les valeurs
  $instance = array();
  $instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
  $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
  $instance['desc'] = ( ! empty( $new_instance['desc'] ) ) ? strip_tags( $new_instance['desc'] ) : '';
  return $instance;
}

} // class Foo_Widget


// register Foo_Widget widget
function register_abAbout_Widget() {
  register_widget( 'abAbout_Widget' );
}
add_action( 'widgets_init', 'register_abAbout_Widget' );
