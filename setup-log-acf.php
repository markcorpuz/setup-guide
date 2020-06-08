<?php

/**
 * SETUP (Block Category)
 * Register Custom Block Category
 * 
 */
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
add_filter( 'block_categories', 'setup_log_block_categories', 10, 2 );


/**
 * LOG (Custom Blocks)
 * Register Custom Blocks
 * 
 */
function setup_log_block_acf_init() {

    $blocks = array(
        
        'logs' => array(
    		'name'			    => 'log',
    		'title'			    => __('Log'),
    		'render_template'	=> plugin_dir_path( __FILE__ ).'partials/blocks/setup-log-block-log.php',
    		'category'		    => 'setup',
    		'icon'			    => 'list-view',
    		'mode'			    => 'edit',
    		'keywords'		    => array( 'update', 'log' ),
        ),

        'guides' => array(
            'name'              => 'guide',
            'title'             => __('Guide'),
            'render_template'   => plugin_dir_path( __FILE__ ).'partials/blocks/setup-log-block-guide.php',
            'category'          => 'setup',
            'icon'              => 'list-view',
            'mode'              => 'edit',
            'keywords'          => array( 'update', 'log' ),
        ),

    );

    // Bail out if function doesn’t exist or no blocks available to register.
    if ( !function_exists( 'acf_register_block_type' ) && !$blocks ) {
        return;
    }
    
    // this loop is broken, how do we register multiple blocks in one go?
    // Register all available blocks.
    foreach ($blocks as $block) {
        acf_register_block_type( $block );
    }
  
}

// Initiates Advanced Custom Fields.
add_action( 'acf/init', 'setup_log_block_acf_init' );