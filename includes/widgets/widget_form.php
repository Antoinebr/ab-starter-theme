<?php


/**
*
*  Widget Form
*/


/**
* Adds Foo_Widget widget.
*/
class abForm_Widget extends WP_Widget { // Remplacer Foo_Widget par le nom du nouveau Widget

  /**
  * Register widget with WordPress.
  */
  function __construct() {
    parent::__construct(
    'abForm_Widget', //  ID du widget
    __( 'Formulaire de contact rapide', 'text_domain' ), // Name
    array( 'description' => __( 'Widget formulaire de contact', 'text_domain' ), ) // Args
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





  echo '<div class="widget_form u-mtm">';

  if ( ! empty( $instance['title'] ) ) {
    $title = $instance['title'];
    echo "<h4 class='sidebar__headings'>$title</h4>";
  }



  if ( ! empty( $instance['desc'] ) ) {
    $desc = $instance['desc'];
    echo  "<p>$desc</p>";
  }



  echo '
  <form  class="small-input contact-form">
  <div class="row">

  <div class="col-xs-12">
  <div class="form-group">
  <input type="email" placeholder=" '.__( 'Adresse email', 'ums' ).' " aria-invalid="false" aria-required="true" size="40" value="" name="email" required>
  </div>
  </div>

  <div class="col-xs-12">
  <div class="form-group">
  <input type="tel" placeholder=" '.__( 'Téléphone', 'ums' ).' " aria-invalid="false" aria-required="true" size="40" value="" name="telephone">
  </div>
  </div>


  <div class="col-xs-12">
  <div class="form-group">
  <input type="text" placeholder=" '.__( 'Sujet', 'ums' ).' *" aria-invalid="false" size="40" value="" name="sujet" required>
  </div>
  </div>

  <div class="col-xs-12">
  <div class="form-group">
  <textarea placeholder=" '.__( 'Message', 'ums' ).' *" aria-invalid="false" rows="10" cols="40" name="message" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary u-centerBlock" id="contact-form-btn">
  '.__( 'Envoyer', 'ums' ).'
  </button>
  </div> <!-- xs-12 -->

  </div> <!-- row -->

  </form>
  ';



  echo '</div>';
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




  $title = ! empty( $instance['title'] ) ? $instance['title'] : __( "Le titre", 'text_domain' );
  $desc = ! empty( $instance['desc'] ) ? $instance['desc'] : __( "Description", 'text_domain' );




  ?>
  <p>

    <!-- CREATION DES CHAMPS DU FORMULAIRE -->


    <!-- title -->
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( "title" ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">

    <!-- desc -->
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
  $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
  $instance['desc'] = ( ! empty( $new_instance['desc'] ) ) ? strip_tags( $new_instance['desc'] ) : '';
  return $instance;
}

} // class Foo_Widget


// register Foo_Widget widget
function register_abForm_Widget() {
  register_widget( 'abForm_Widget' );
}
add_action( 'widgets_init', 'register_abForm_Widget' );
