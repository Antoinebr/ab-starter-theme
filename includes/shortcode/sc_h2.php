<?php


/*
*
*  Shortcode h2
*  Ajout un span dans un h2
*
*/


add_shortcode("h2", "shortcode_ab_h2");

function shortcode_ab_h2($atts,$content=''){

	$atts = shortcode_atts(array(
		'titre' => 'titre',
		'sub' => 'sous titre'

	),$atts);
	extract($atts);

	return "<h2>".$titre." / <span>".$sub."</span></h2>";
	// on remplace les variables
}
