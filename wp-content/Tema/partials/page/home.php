<?php
get_header(); ?> 

<?php 
$contador = 0;
if( have_rows('slides') ): ?>
    <section class="carousel-inicial">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

        <?php while( have_rows('slides') ) : the_row(); ?>

            <!--- REPETE  -->
        <div class="carousel-item <?php if($contador == 0) echo 'active' ;?>">
              <img src="<?php the_sub_field('foto'); ?>" class="img-responsive d-block w-100" alt="imagem carousel"
                style="height: auto;">

              <div class="container">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-white text-uppercase" style="font-size: 55px;"><?php the_sub_field('titulo'); ?></h1>
                  <p class="text-white" style="font-size: 20px;"><?php the_sub_field('descricao'); ?></p>
                  <p>
                    <a class="btn btn-lg btn-projeto-2 text-uppercase text-dark font-weight-bold" href="<?php the_sub_field('link'); ?>"
                      role="button">
                      Saiba mais
                    </a>
                  </p>
                </div>
              </div>
          </div>

        <?php ?>
            
<?php
$contador++;
endwhile;
else :
endif;?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span aria-hidden="true">
            <i class="fas fa-chevron-circle-left fa-2x"></i>
          </span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span aria-hidden="true">
            <i class="fas fa-chevron-circle-right fa-2x"></i>
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>



     <!-- eventos -->

    <section class="eventos mt-5">
      <h4 class="text-center text-uppercase">eventos</h4>

      <div class="container">
        <div class="row mt-5 text-center">

          <div class="col-sm-2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/folhas.png" width="150px" height="150px" alt="" />
          </div>
       

          <div class="container col-sm-10 testimonial-group">
            <div class="row text-center flex-nowrap">

            <?php 
    
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $wp_query = new WP_Query(
     array( 
        'post_type' => 'evento', 
        'posts_per_page' => 20, 
        'paged' => $paged
       ) 
    ); 
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post; ?> 


              <div class="col-sm-12 col-md-4 ">
                <a href="<?php the_permalink();?>" style="text-decoration: none;">
                  <div class="card">
                    <img class="img-responsive card-img-top"
                      style="width: auto; height: 250px;" src="<?php the_post_thumbnail();?>

                    <div class="card-header text-uppercase text-center text-white" style="background-color: #417505;">
                     <?php the_title();?>
                    </div>
                    <div class="card-body">
                      <p class="card-text text-uppercase text-center text-dark" style="font-size: 12px;">
                        <!-- limite de caracteres: 152-->
                       <?php the_excerpt();?>
                      </p>
                    </div>
                  </div>
                </a>
              </div>

<?php  
endwhile; 
wp_reset_query();
?>
            </div>
          </div>
        </div>
      </div>

    </section>

 <!-- eventos -->

 <!-- galeria -->
 <?php
 $cont=0;

 if(have_rows('galeria')):?>

 <section class="galeria p-5" style="margin-bottom: 100px; margin-top: 50px;">
      <h4 class="text-uppercase text-center mb-5">galeria</h4>
      <div class="container text-center w-100">

        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">

        <?php while( have_rows('galeria') ) : the_row(); ?>

            <div class="carousel-item <?php if($cont==0) echo 'row active';?>">
              <div class="col-6 text-center d-inline">
                <a href="#" style="text-decoration: none;">
                  <img class="mb-2" src="<?php the_sub_field('foto'); ?>" alt="evento" width="384px" height="287px">

                </a>
              </div>
            </div>

            <?php ?>

            <?php
$cont++;
endwhile;
else :
endif;?>


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
    <!-- galeria -->






<!-- nossos projetos -->
<section class="nossos-projetos mt-5" style="margin-bottom: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 p-5 text-left">
            <h4> <?php the_field('titulo_projetos');?></h4>
            <p><?php the_field('descricao_projetos');?></p>
            <a href="<?php echo get_permalink( get_page_by_path( 'projetos'))?>" class="btn-projeto-3 btn btn-lg text-white">VER PROJETOS</a>
          </div>

          <div class="col-sm-6">
            <div id="content-projeto">
              <img class="img-responsive col" src="<?php the_field('foto_projeto')?>" alt="projetos">
            </div>
            <div id="projeto"></div>
          </div>

        </div>
      </div>
    </section>
    <!-- nossos projetos -->


<!-- apoio -->
<section class="text-center apoio" style="padding:50px;">
    <h4>APOIO</h4>
    <a href="<?php echo get_field('link_apoiadores');?>">
      <img class="col img-responsive" src="<?php the_field('apoiadores')?>" width="auto"
        alt="Baobá - Fundo para a equidade racial" style="max-width: 450px;">
    </a>
  </section>
  <!-- apoio -->



  


<?php
get_footer();  ?>
