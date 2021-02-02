<?php 
/**
 * Optimization Functions and definitions
 *
 * @package Z Pixel
 */

/**
 * Cleanup wp_head().
 */
function head_cleanup() {
    // category feeds.
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    // post and comment feeds.
    remove_action( 'wp_head', 'feed_links', 2 );
    // EditURI link.
    remove_action( 'wp_head', 'rsd_link' );
    // windows live writer.
    remove_action( 'wp_head', 'wlwmanifest_link' );
    // index link.
    remove_action( 'wp_head', 'index_rel_link' );
    // previous link.
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    // start link.
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    // links for adjacent posts.
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    // WP version.
    remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'head_cleanup' );

/**
 * Remove WP version from RSS.
 */
add_filter( 'the_generator', '__return_false' );

/**
 * Disable wp-json
 */
remove_action('wp_head', 'rest_output_link_wp_head', 10);

/**
 * Add feed link.
 */
// add_theme_support( 'automatic-feed-links' );

/**
 * Add CPT to the RSS Feed
 */
// function myfeed_request($qv) {
//     if (isset($qv['feed']) && !isset($qv['post_type']))
//         $qv['post_type'] = array('portfolio', 'page');
//     return $qv;
// }
// add_filter('request', 'myfeed_request');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* Custom ajax loader */
//add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
//function my_wpcf7_ajax_loader () {
//  return  get_bloginfo('stylesheet_directory') . '/assets/img/icons/loader.gif';
//}

/**
 * Load Contact Form 7 files only when necessary
 */
//add_filter( 'wpcf7_load_js', '__return_false' );
//add_filter( 'wpcf7_load_css', '__return_false' );

//function loadcf7() {
//    if (is_page('contato')) {
//        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
//            wpcf7_enqueue_scripts();
//        }
//
//        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
//            wpcf7_enqueue_styles();
//        }
//    }
//}

?>