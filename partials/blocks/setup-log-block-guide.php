<?php
/**
 * BLOCK-GUIDE
 *
 * @package      SETUP-GUIDE
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

$guide_label    = get_field( 'guide_label' );
$guide_summary  = get_field( 'guide_summary' );
$guide_info     = get_field( 'guide_info' );


/**
 * CLASS SELECTORS
 * 
 */
$classes[] = 'module guide';
if( array_key_exists( 'className', $block ) ) {
    $classes = array_merge( $classes, explode( ' ', $block[ 'className' ] ) );
}

/**
 * MODULE OPENING
 * 
 */
echo '<div class="'.join( ' ', $classes ).'">';

    /**
     * LABEL
     * 
     */
    if ( $guide_label ) {
        echo '<div class="item label">'. $guide_label .'</div>';
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
     * INNERBLOCK
     * 
     */
    $innerblockarea = '<InnerBlocks />';
    if ( !empty ($innerblockarea) ) {
         echo '<div class="innerblock">';
         echo '<InnerBlocks template="'.esc_attr( wp_json_encode( $template ).'" />';
         echo '</div>';
    }

/**
 * MODULE CLOSING
 * 
 */
echo '</div>';