<?php
/**
 * Plugin Name: Setup Block Log
 * Description: Display custom Guttenburg block via Advanced Custom Fields.
 * Version: 1.0
 * Author: Jake Almeda
 * Author URI: http://smarterwebpackages.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


add_action( 'genesis_setup', 'setup_block_log_fn', 15 );
function setup_block_log_fn() {
	include_once( plugin_dir_path( __FILE__ ).'setup-block-log-acf.php' );
}

// Enqueue Style
function setup_block_log_function() {

    // last arg is true - will be placed before </body>
    //wp_enqueue_script( 'spk_screensizer_js', plugins_url( 'js/asset.js', __FILE__ ), NULL, NULL, true );
	
    // enqueue styles
    wp_enqueue_style( 'setup_block_log_style', plugins_url( 'css/setup_block_log_style.css', __FILE__ ) );

}

if ( !is_admin() ) {

    // ENQUEUE SCRIPTS
    add_action( 'wp_enqueue_scripts', 'setup_block_log_function' );

}