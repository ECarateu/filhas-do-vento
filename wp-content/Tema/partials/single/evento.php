<?php
/**
 * @author Z Pixel
 */

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); 
    
?>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-3 m-2 bg-light">
        <li class="breadcrumb-item ">
          <a class="text-dark text-uppercase" href="<?php echo get_home_url(); ?>">Início</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-dark text-uppercase" href="<?php  echo get_permalink( get_page_by_path('eventos') )?>"> Eventos</a>
         
        </li>
        <li class="breadcrumb-item active text-uppercase" aria-current="page"><?php the_title();?></li>
      </ol>
    </nav>

      <div class="container">
           <h4 class="text-uppercase mt-5"><?php the_title(); ?></h4>
       
      </div>
    </section>


    <section class="container">
     <?php the_content(); ?>
    </section>

    <?php
    endwhile;
    wp_reset_postdata();
endif; ?>


<section class="veja-tambem" style="margin-bottom: 100px; margin-top: 50px;">
      <div class="container text-center w-100">
        <h4 class="text-uppercase text-left mb-5">Veja também</h4>
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">



<?php 
 $cont=0;
    
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $wp_query = new WP_Query(
     array( 
        'post_type' => 'evento', 
        'posts_per_page' => 2, 
        'paged' => $paged
       ) 
    ); 
while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post; ?>

<div class="carousel-item <?php if($cont==0) echo 'row active';?>">
              <div class="col-6 text-center d-inline">
                <a href="<?php the_permalink();?>" style="text-decoration: none;">
                  <img class="mb-2" src="<?php the_post_thumbnail_url(); ?>" alt="evento" width="384px" height="287px">
                </a>
              </div>

              <div class="col-6 text-center d-inline">
                <a href="<?php the_permalink();?>" style="text-decoration: none;">
                  <img class="mb-2" src="<?php the_post_thumbnail_url(); ?>" alt="evento" width="384px" height="287px">
                </a>
              </div>

<?php
$cont++; 
endwhile; 
?>

       </div>
       <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
            <span class="text-dark" aria-hidden="true">
              <i class="fas fa-chevron-circle-left fa-2x"></i>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
            <span class="text-dark" aria-hidden="true">
              <i class="fas fa-chevron-circle-right fa-2x"></i>
            </span>
            <span class="sr-only">Next</span>
          </a>

       </div>
       </div>

</section>






