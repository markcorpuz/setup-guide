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
    if( $log_label || $log_date || $log_time || $log_detail ) {
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

/**
 * MODULE CLOSING
 * 
 */
echo '</div>';