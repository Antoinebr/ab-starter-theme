<?php


/*
*
* Register
*
*/

// Register script
include('includes/register/scripts.php');
// Register menu
include('includes/register/menus.php');
// Register sidebar
include('includes/register/sidebars.php');
// Register acf admin page
include('includes/register/acf_admin_page.php');
// Register thumbnail
include('includes/register/thumbnails.php');


/*
*
* Utils
*
*/

// Class
include('includes/utils/helper.class.php');
// Extend search
//include('includes/utils/extend-search.php');
// Extend search
//include('includes/utils/jetpack/jp_deregister_scripts.php');
include('includes/utils/pagination/pagination.php');


/*
*
* Custom PostTypes
*
*/
//include('includes/cpt/cpt_custom.php');



/*
*
* Custom Taxonomies
*
*/
// Taxos
//include('includes/taxo/taxo_theme.php');



/*
*
* Ajax
*
*/

// Ajax form
include('includes/ajax/form_contact.php');



/*
*
*  Widgets
*
*/
include('includes/widgets/widget_about.php');
include('includes/widgets/widget_form.php');



/*
*
*  Custom Admin
*
*/

// Customizer et champs perso Customs
include('includes/custom-admin/customizer/customizer.php');
include('includes/custom-admin/customizer/customizer_footer.php');
// removes admin menus
include('includes/custom-admin/remove_admin_menus.php');
// removes admin widgets
include('includes/custom-admin/remove_admin_widgets.php');
// Tinymce edit
include('includes/custom-admin/tinymce.php');
// Hide WYSWYG
//include('includes/custom-admin/hide_editor.php');
// Move Admin bar
include('includes/custom-admin/move_admin_bar.php');




/*
*
*  Shortcode
*
*/

// Shortcode
include('includes/shortcode/chapeau/sc_chapeau.php');
include('includes/shortcode/sc_h2.php');
include('includes/shortcode/sc_youtube.php');



/*
*
*  Hooks
*
*/

// Shortcode
include('includes/hooks/abml_newsletter.php');
include('includes/hooks/wp_core.php');
