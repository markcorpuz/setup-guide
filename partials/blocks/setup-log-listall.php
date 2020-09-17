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
$log_code       = get_field( 'log_code' );
$log_label      = get_field( 'log_label' );
$log_title      = get_field( 'log_title' );
$log_summary    = get_field( 'log_summary' );
$log_info       = get_field( 'log_info' );
$log_user       = get_field( 'log_user' );


/**
 * CLASS SELECTORS
 * 
 */
$classes[] = 'module log log-listall';
if( array_key_exists( 'className', $block ) ) {
    $classes = array_merge( $classes, explode( ' ', $block[ 'className' ] ) );
}

/**
 * MODULE OPENING
 * 
 */
echo '<div class="'.join( ' ', $classes ).'">';

    /**
     * DATE
     * 
     */
    if ( $log_date ) {
        echo '<div class="item date">'. $log_date .'</div>';
    }

    /**
     * TIME
     * 
     */
    if ( $log_time ) {
        echo '<div class="item time">'. $log_time .'</div>';
    }

    /**
     * CODE
     * 
     */
    if ( $log_code ) {
        echo '<div class="item code">'. $log_code .'</div>';
    }

    /**
     * LABEL
     * 
     */
    if ( $log_label ) {
        echo '<div class="item label">'. $log_label .'</div>';
    }

    /**
     * TITLE
     * 
     */
    if ( $log_title ) {
        echo '<div class="item title">'. $log_title .'</div>';
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
     * USER
     * 
     */
    if ( $log_user ) {
        echo '<div class="item user">'. $log_user .'</div>';
    }

    /**
     * INNERBLOCK
     * 
     */
    //$innerblockarea = '<InnerBlocks />';
    //if ( !empty ($innerblockarea) ) {
         echo '<div class="innerblock">';
         echo '<InnerBlocks />';
         echo '</div>';
    //}

/**
 * MODULE CLOSING
 * 
 */
echo '</div>';