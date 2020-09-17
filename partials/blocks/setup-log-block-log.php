<?php
/**
 * BLOCK-LOG
 *
 * @package      SETUP-LOG
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

$log_date       = get_field( 'log_date' );
$log_time       = get_field( 'log_time' );

$log_label      = get_field( 'log_label' );
$log_summary    = get_field( 'log_summary' );
$log_info       = get_field( 'log_info' );


/**
 * CLASS SELECTORS
 * 
 */
$classes[] = 'module log';
if( array_key_exists( 'className', $block ) ) {
    $classes = array_merge( $classes, explode( ' ', $block[ 'className' ] ) );
}


$template = array(
    array('core/heading', array(
        'level' => 2,
        'content' => 'Title Goes Here',
    )),
    array( 'core/paragraph', array(
        'content' => '<strong>Colorway:</strong> <br /><strong>Style Code:</strong>  <br /><strong>Release Date:</strong> <br /><strong>MSRP:</strong> ',
    ) )
);


/**
 * MODULE OPENING
 * 
 */
echo '<div class="'.join( ' ', $classes ).'">';

    /**
     * SIDE OPENING
     * 
     */
    
    if( $log_date || $log_time ) {
        echo '<div class="items side">';
    }
    
        /**
         * DATE, TIME & DATETIME
         * 
         */
        
        if ( $log_date && $log_time ) {
            echo '<div class="item datetime">'. $log_date .' '. $log_time .'</div>';
        } else if ( $log_date ) {
            echo '<div class="item date">'. $log_date .'</div>';
        } else if ( $log_time ) {
            echo '<div class="item time">'. $log_time .'</div>';
        }
        
    /**
     * SIDE CLOSING
     * 
     */
    if( $log_date || $log_time ) {
        echo '</div>';
    }

    /**
     * MAIN OPENING
     * 
     */
    if( $log_label || $log_summary || $log_info ) {
        echo '<div class="items main">';
    }
    
        /**
         * LABEL
         * 
         */
        if ( $log_label ) {
            echo '<div class="item label">'. $log_label .'</div>';
        }

        /**
         * SUMMARY
         * 
         */
        if ( $log_summary ) {
            echo '<div class="item summary">'. $log_summary .'</div>';
        }

        /**
         * INFO
         * 
         */

        if ( $log_info ) {
            echo '<div class="item info">'. $log_info .'</div>';
        }

    /**
     * MAIN CLOSING
     * 
     */
    if( $log_label || $log_summary || $log_info ) {
        echo '</div>';
    }
    
    //$allowed_blocks = array( 'core/heading', 'core/paragraph' );
    
    ?><div class="setup-content-code"><?php
        echo '<h4>'.get_field( 'log_code' ).'</h4>';
    ?></div><?php

    echo '<div class="block-about__content">
        <InnerBlocks />
    </div>';
    //<InnerBlocks template="'.esc_attr( wp_json_encode( $template ) ).'" />
    ?><div class="setup-content-detail"><?php
        echo '<h4>'.get_field( 'log_detail' ).'</h4>';
    ?></div><?php
/**
 * MODULE CLOSING
 * 
 */
echo '</div>';

/*
<InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" />
*/