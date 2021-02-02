<?php
get_header(); ?> 



  <div class="container">
<h4 class="text-uppercase" style="margin-top:40px"><?php the_title(); ?></h4>

</div>


<section class="eventos mt-5" style="margin-bottom: 100px;">
      <div class="container">
        
        <div class="row mt-5">
 
<?php 
    
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $wp_query = new WP_Query(
     array( 
        'post_type' => 'projeto', 
        'posts_per_page' => 10, 
        'paged' => $paged
       ) 
    ); 
while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post; ?>



          <div class="col-md-4 mb-4">
            <a href="<?php the_permalink();?>" class="text-dark" style="text-decoration: none;">
              <div id="afrocindiv">
              <button type="button" id="afrocinbutton "  style="background-color: <?php echo get_field('esquema_de_cor');?>"
                class=" p-4 mt-2  btn btn-lg  btn-projeto-1 text-uppercase text-white font-weight-bold">
               <?php the_title();?> 
              </button>
            </div>
              </div>
            </a>
         
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