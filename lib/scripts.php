<?php
/**
 * Scripts
 *
 * @package      Bootstrap for Genesis
 * @since        1.0
 * @link         http://www.recommendwp.com
 * @author       RecommendWP <www.recommendwp.com>
 * @copyright    Copyright (c) 2015, RecommendWP
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Theme Scripts & Stylesheet
add_action( 'wp_enqueue_scripts', 'bfg_theme_scripts' );
function bfg_theme_scripts() {
	$version = wp_get_theme()->Version;
	if ( !is_admin() ) {
		wp_enqueue_style( 'app-css', BFG_THEME_CSS . 'app.css' );

		// Disable the superfish script
		wp_deregister_script( 'superfish' );
		wp_deregister_script( 'superfish-args' );

		// Bootstrap JS
		wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-bootstrap-js' );

		// Smart Menu JS
		wp_register_script( 'app-smartmenu-js', BFG_THEME_JS . 'jquery.smartmenus.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-smartmenu-js' );

		// Smart Menu Boostrap Addon Js
		wp_register_script( 'app-smartmenu-bootstrap-js', BFG_THEME_JS . 'jquery.smartmenus.bootstrap.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-smartmenu-bootstrap-js' );

		wp_register_script( 'app-js', BFG_THEME_JS . 'app.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-js' );
	}
}

// Editor Styles
add_action( 'init', 'bfg_custom_editor_css' );
function bfg_custom_editor_css() {
	add_editor_style( get_stylesheet_uri() );
}
