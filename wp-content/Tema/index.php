<?php
/**
 * @package Z Pixel
 */

get_header(); 

$wp_query = array(
    'post_type'      => 'post',
    'orderby'        => 'post_date',
    'posts_per_page' =>  5,
    'paged'             => $paged,
   
    
);

$wp_query = new WP_Query( $wp_query );
    if($wp_query->have_posts()) : 
        while($wp_query->have_posts()) : 
            $wp_query->the_post();

                the_title();

        endwhile; 
    else :  
    endif;
wp_reset_postdata(); 

?>
    <div class="pagination"> 
        <?php the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '<', 'textdomain' ),
            'next_text' => __( '>', 'textdomain' ),
            'screen_reader_text' => '&nbsp;'
        ) );
        ?>
    </div> 

  
<?php get_footer(); ?>