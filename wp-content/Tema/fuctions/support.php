<?php
/**
 * -----------------------------------------------------------------
 * THEME FEATURES AND CONFIGURATION
 * -----------------------------------------------------------------
 *
 * @package Z Pixel
 */

// if (!is_admin()) {
    add_filter( 'show_admin_bar', '__return_false' );
// }

@ini_set( 'upload_max_size' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'title-tag' );



?>