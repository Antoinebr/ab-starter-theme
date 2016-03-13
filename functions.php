<?php


/*
*
* Register
*
*/

// Register script
include('includes/scripts.php');
// Register menu
include('includes/register/menus.php');
// Register sidebar
include('includes/sidebars.php');



/*
*
* Utils
*
*/

// Class
include('includes/helper.class.php');
// Extend search
include('includes/extend-search.php');



/*
*
* Custom PostTypes
*
*/
//include('includes/cpt_custom.php');



/*
*
* Custom Taxonomies
*
*/
// Taxos
//include('includes/taxo_theme.php');



/*
*
* Ajax
*
*/

// Ajax form
include('includes/ajax/form_newsletter.php');
include('includes/ajax/form_contact.php');



/*
*
*  Widgets
*
*/
include('includes/widgets/widget_about.php');



/*
*
*  Custom Admin
*
*/

// Customizer et champs perso Customs
include('includes/customizer.php');
// removes admin menus
include('ab-includes/remove_admin_menus.php');
// removes admin widgets
include('ab-includes/remove_admin_widgets.php');
// Tinymce edit
include('includes/tinymce.php');
// Hide WYSWYG
//include('includes/hide_editor.php');
// Menu Admin Options
include('includes/admin_page.php');



/*
*
*  Shortcode
*
*/

// Shortcode
include('includes/shortcodes.php');
