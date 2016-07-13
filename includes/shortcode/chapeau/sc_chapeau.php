<?php

/*
*
*  Shortcode chapeau
*  Ce shortcode permet d'entourer un texte
*
*/


function ab_shortcode_chapeau( $atts, $content = null ) {
	return '<div class="chapeau u-ptm u-pbs">' . $content . '</div>';
}

add_shortcode( 'chapeau', 'ab_shortcode_chapeau' );



add_action('admin_init','add_buttons');
function add_buttons(){
	if(current_user_can('edit_posts') && current_user_can('edit_pages')){
		add_filter('mce_external_plugins','add_plugins');
		// add_plugins est la function à appeler apres
		add_filter('mce_buttons','register_buttons');
		// register_buttons est la function à appeler apres
	}
}

function add_plugins($plugin_array){
	$plugin_array['chapeau'] = get_bloginfo('template_url').'/includes/shortcode/chapeau/sc_chapeau.js';
	return $plugin_array;
}
function register_buttons($buttons){
	array_push($buttons, 'chapeau');
	return $buttons;
}
