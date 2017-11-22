<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

if (!function_exists('ee_bb_suppress_notices')){
	function ee_bb_suppress_notices(){
	    if (class_exists('FLBuilderModel') && (FLBuilderModel::is_builder_enabled())){
	                add_filter( 'FHEE__EE_Front_Controller__display_errors', '__return_false' );
	    }
	}
	add_action('wp', 'ee_bb_suppress_notices', 1);
}
