<?php
/**
 * Plugin Name: SETUP GUIDE
 * Description: Display custom Guttenburg block via Advanced Custom Fields.
 * Version: 1.0.7
 * Author: Jake Almeda & Mark Corpuz
 * Author URI: https://smarterwebpackages.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


add_action( 'genesis_setup', 'setup_guide_fn', 15 );
function setup_guide_fn() {
	include_once( plugin_dir_path( __FILE__ ).'setup-guide-acf.php' );
}

// Enqueue Style
function setup_guide_function() {

    // last arg is true - will be placed before </body>
    //wp_enqueue_script( 'spk_screensizer_js', plugins_url( 'js/asset.js', __FILE__ ), NULL, NULL, true );
	
    // enqueue styles
    wp_enqueue_style( 'setup_guide_style', plugins_url( 'css/setup_guide_style.css', __FILE__ ) );

}

/**
 * NOTE: Temporarily disabling plugin based styling due to the repetitive nature of reusing styles.
 * Remove comments below to allow if we want the styles to be independent but at the moment, we're using the default child theme styles
 * 
 */
/*
if ( !is_admin() ) {

    // ENQUEUE SCRIPTS
    add_action( 'wp_enqueue_scripts', 'setup_guide_function' );

}
*/