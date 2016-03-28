<?php

/**
*
* Autorise les SVG dans l'uploader WP
*
*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




/**
* Generate custom search form
*
* @param string $form Form HTML.
* @return string Modified form HTML.
*/

function wpdocs_my_search_form( $form ) {
  $form = '
  <form action="'.get_bloginfo("url").'" method="get">
  <div class="form-group form-input">
  <input type="text" name="s" class="form-control" value="'.get_search_query().'" placeholder="Taper votre recherche & appuyez sur entrer...">
  </div>
  </form>
  ';

  return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );
