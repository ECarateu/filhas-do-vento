<?php

/**
 * @author Z Pixel
 */
global $post;
$post_slug = $post->post_name;

get_header(); ?>

    <div class="subheader">
        <div class="container">
           
        </div>
    </div>

    <?php 
    $obj = get_queried_object();
    $postType = $obj->post_type;
    $slug = $obj->post_name;
    $default = get_template_directory() . '/partials/single/default.php';
    $page = get_template_directory() . '/partials/single/' . $postType . '.php';

    if ( file_exists( $page ) ) {
        include($page);
    }       
    else { 
        include($default);
    }

    ?>

<?php get_footer(); ?>