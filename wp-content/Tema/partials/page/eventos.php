<?php
get_header(); ?> 

<section class="eventos mt-5" style="margin-bottom: 100px;">
      <div class="container">
        <h4 class="text-uppercase"><?php the_title(); ?></h4>
        <div class="row mt-5">
  
 
<?php 
    
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $wp_query = new WP_Query(
     array( 
        'post_type' => 'evento', 
        'posts_per_page' => 4, 
        'paged' => $paged
       ) 
    ); 
while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post; ?>

          <div class="col-md-6 mb-5">
            <a href="<?php the_permalink();?>" class="text-dark" style="text-decoration: none;">
              <div class="card" style="height: 100%;">
                <div class="card-img-overlay box">
                  <img class="card-img-top" alt="evento" width="300px" height="300px"
                    style="object-fit:contain;" src="<?php the_post_thumbnail(); ?>" >
                  <p class="card-title text text-uppercase p-4 text-white font-weight-bold" style="width: auto;">
                  <?php the_title(); ?>
                  </p>
                </div>
                <div class="card-body">
                  <p class="card-text">
                  <?php the_excerpt ();?> </p>
                </div>
              </div>
            </a>
          </div>


<?php  
endwhile; 
?>
       </div>
       </div>

</section>

<div class="pagination-page-eventos" style="text-align:center; font-size:18px;">
    <?php echo paginate_links() ?>
</div>

<?php
get_footer();  ?>