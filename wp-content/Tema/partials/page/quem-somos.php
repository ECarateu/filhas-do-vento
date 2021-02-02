<?php
get_header(); ?>

<!-- historia -->
<section class="historia mt-5 mb-5">
    <div class="container">
        <h4 class="text-uppercase">
            <span class="underline-historia">história</span>
        </h4>

        <div class="row">
            <div class="col-lg-6 col-sm-12 mt-5">
                <div id="content-historia" class="ml-5">
                    <img class="img-responsive" src="<?php the_field('foto'); ?>" alt="equipe" width="90%" height="" style="border: 1px solid#FBC12A;" />
                </div>

                <div id="historia" class="ml-5">
                    <p class="pt-5 pl-4 pr-5 pb-2 text-dark text-justify"><?php echo the_field('texto')  ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- historia -->

<!-- missão -->

<section class="missao mt-5">
    <div class="container">
        <h4 class="text-uppercase mt-5">
            <span class="underline-missao">missão</span>
        </h4>

        <div class="row text-center">
            <div class="col-lg-6 col-sm-12 mt-5">
                <div id="content-missao">
                    <img class="img-responsive" src="<?php the_field('foto-missao');?>" alt="equipe" width="100%" height="" style="border: 1px solid #417505;" />
                </div>

                <div id="missao">
                    <p class="p-5 text-white text-justify"><?php the_field('texto-missao') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- missão -->

<!-- equipe  -->
<section class="equipe mt-5">
    <div class="container">
        <h4 class="text-uppercase">
            <span class="underline-equipe">equipe</span>
        </h4>
        <div class="row">
            <?php 
    
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $wp_query = new WP_Query(
     array( 
        'post_type' =>
            'equipe', 'posts_per_page' => 6, 'paged' => $paged ) ); while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post; ?>

            <div class="mt-5 col-sm-12 col-md-4 mb-4">
                <a href="waneska-viana.html" style="text-decoration: none;">
                    <div class="card border-light">
                        <img class="img-responsive card-img-top rounded" src="<?php the_post_thumbnail();?>

                        <div class="card-header text-uppercase text-white text-center" style="align-self: center; width: 90%; position: relative; margin-top: -10px; background-color: #9c2d00; border-radius: 10px;">
                            Waneska Viana
                        </div>

                        <div class="card-body text-center">
                            <p class="card-text text-dark text-uppercase">Socióloga e mestre em educação, culturas e identidades</p>
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
<!-- equipe  -->

<!-- quote  -->
<section class="quote mt-5" style="margin-bottom: 100px;">
    <div class="container text-center p-5">
        <div class="row">
            <div class="col-sm-2 mb-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/folhas.png" width="100px" height="100px" alt="" />
            </div>

            <div class="col-sm-10">
                <p class="d-inline">
                    "Nem mulatas, nem morenas, somo negras que, como miçangas de uma maravilhoso colar, carregamos em diversos tons a nossa ancestralidade, unidas por um único fio, a crença em um mundo onde não existam opressões baseadas
                    nas diferenças de gênero, étnico-raciais ou de classe social."
                </p>
            </div>
        </div>
    </div>
</section>
<!-- quote  -->

<?php
get_footer();  ?>
