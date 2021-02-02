<?php
/**
 * @author Z Pixel
 */

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); 
    
?>
<div class= "row">
<div class="col-sm-8 mt-5 mb-3 ml-3">
<p class="text-uppercase font-weight-bold pl-1 pt-6">Afrocinergia</p>
<div class="bordergreen pl-3 pr-3 pt-3 mb-2">
                <p class="font-weight-bold">Descrição da proposta:</p>
                <p>O projeto AfroCINErgia é uma iniciativa do Coletivo Filhas do Vento que tem como objetivo reunir
                  mulheres negras para um momento de integração, interação e debate em torno de obras cinematográficas
                  com abordagem afrocentrada e/ou temáticas que contemplem aspectos da questão étnico-racial e de
                  gênero. O projeto tem caráter itinerante podendo ser realizado nos espaços de colaboradoras (es),
                  espaços cedidos por instituições parceiras e/ou em locais públicos com infraestrutura necessária à
                  realização da atividade.</p>
              </div>
              
 </div>
 </div>

<?php
if(have_rows('imagens')):?>
         <div class="row">
<?php while( have_rows('imagens') ) : the_row(); ?>

<div class="col-sm-6 mb-5 mt-5">
<img class="col img-responsive" src="<?php the_sub_field('fotos'); ?>" alt="evento" width="auto" height="auto">
</div>
<?php ?>
<?php
endwhile;
else :
endif;?>
</div>



    <?php
    endwhile;
    wp_reset_postdata();
endif; ?>


