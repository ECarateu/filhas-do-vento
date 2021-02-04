<?php
/**
 * @author Z Pixel
 */

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); 
    
?>

      <div class="container">
           <h4 class="text-uppercase mt-5"><?php the_title(); ?></h4>
       
      </div>
    </section>


    <section class="container mt-5">
     <?php the_content(); ?>
    </section>

    <?php
    endwhile;
    wp_reset_postdata();
endif; ?>
