<?php

/*
*
*  Shortcode chapeau
*  Ce shortcode permet d'entourer un texte
*
*/

function ab_shortcode_chapeau( $atts, $content = null ) {
	return '<div class="chapeau">' . $content . '</div>';
}

add_shortcode( 'chapeau', 'ab_shortcode_chapeau' );
