<?php
/**
 * BLOCK-GUIDE
 *
 * @package      SETUP-GUIDE
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

$guide_date       = get_field( 'log_date' );
$guide_time       = get_field( 'log_time' );
$guide_code       = get_field( 'log_code' );
$guide_label      = get_field( 'log_label' );
$guide_title      = get_field( 'log_title' );
$guide_summary    = get_field( 'log_summary' );
$guide_info       = get_field( 'log_info' );
$guide_user       = get_field( 'log_user' );


/**
 * CLASS SELECTORS
 * 
 */
$classes[] = 'module guide guide-box';
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
    if ( $guide_date ) {
        echo '<div class="item date">'. $guide_date .'</div>';
    }

    /**
     * TIME
     * 
     */
    if ( $guide_time ) {
        echo '<div class="item time">'. $guide_time .'</div>';
    }

    /**
     * CODE
     * 
     */
    if ( $guide_code ) {
        echo '<div class="item code">'. $guide_code .'</div>';
    }

    /**
     * LABEL
     * 
     */
    if ( $guide_label ) {
        echo '<div class="item label">'. $guide_label .'</div>';
    }

    /**
     * TITLE
     * 
     */
    if ( $guide_title ) {
        echo '<div class="item title">'. $guide_title .'</div>';
    }

    /**
     * SUMMARY
     * 
     */
    if ( $guide_summary ) {
        echo '<div class="item summary">'. $guide_summary .'</div>';
    }

    /**
     * INFO
     * 
     */
    if ( $guide_info ) {
        echo '<div class="item info">'. $guide_info .'</div>';
    }

    /**
     * USER
     * 
     */
    if ( $guide_user ) {
        echo '<div class="item user">'. $guide_user .'</div>';
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
