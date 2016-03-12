<?php

function my_acf_format_value_for_api($value, $post_id, $field){
	return str_replace( ']]>', ']]>', apply_filters( 'the_content', $value) );
}
function my_on_init(){
	if(!is_admin()){
		add_filter('acf/format_value_for_api/type=wysiwyg', 'my_acf_format_value_for_api', 10, 3);
	}
}
add_action('init', 'my_on_init');

function caption_shortcode( $atts, $content = null ) {
	return '<div class="more-content">' . $content . '</div>';
}
add_shortcode( 'cache', 'caption_shortcode' );

?>
