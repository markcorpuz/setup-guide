<?php

/**
 * SETUP (Block Category)
 * Register Custom Block Category
 * 
 */
add_filter( 'block_categories', 'setup_log_block_categories', 10, 2 );
function setup_log_block_categories( $categories ) {
    return array_merge(
        array(
            array(
                'slug' => 'setup',
                'title' => __( 'Setup', 'mydomain' ),
                //'icon'  => 'wordpress',
            ),
        ),
        $categories
    );
}


/**
 * LOG (Custom Blocks)
 * Register Custom Blocks
 * 
 */
add_action( 'acf/init', 'setup_log_block_acf_init' );
function setup_log_block_acf_init() {

    $blocks = array(
        
        'logs' => array(
            'name'                  => 'log',
            'title'                 => __('Log'),
            'render_template'       => plugin_dir_path( __FILE__ ).'partials/blocks/setup-log-listall.php',
            'category'              => 'setup',
            'icon'                  => 'list-view',
            'mode'                  => 'edit',
            'keywords'              => array( 'update', 'log' ),
            'supports'              => [
                'align'             => false,
                'anchor'            => true,
                'customClassName'   => true,
                'jsx'               => true,
            ],
        ),

    );

    // Bail out if function doesn’t exist or no blocks available to register.
    if ( !function_exists( 'acf_register_block_type' ) && !$blocks ) {
        return;
    }
    
    // this loop is broken, how do we register multiple blocks in one go?
    // Register all available blocks.
//    if( get_current_user_id() == 2 ) {
        foreach( $blocks as $block ) {
            acf_register_block_type( $block );
        }
//    }
  
}