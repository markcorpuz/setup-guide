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