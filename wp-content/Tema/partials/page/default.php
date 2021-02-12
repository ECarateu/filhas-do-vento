<?php
get_header(); ?>
<section class="exposicao mt-5">
      <div class="container">
        <div class="em-breve text-center">
          <h1 class="text-uppercase mt-5">Olá,</h1>
          <h3>Nossa página  <?php the_title()?> está em construção!</h3>
          <h3>Mas você pode nos acompanhar pelas redes sociais!</h3>
          <div class="mt-3 text-center">
            <a class="icones-mensagem" href="https://www.facebook.com/coletivofilhasdovento"
              style="text-decoration: none;">
              <i class=" fab fa-facebook"></i>
            </a>
            <a class="icones-mensagem" href="https://www.instagram.com/filhasdoventocoletivo/"
              style="text-decoration: none;">
              <i class="icones-mensagem fab fa-instagram pl-3"></i>
            </a>
          </div>
          <div class="mt-5 text-center img-mensagem">
            <a href="<?php echo get_home_url()?>">
              <img class="col logo-footer" width="auto" height="auto" src="<?php the_field('logo', 'option');?>"  alt="Filhas do Vento">
            </a>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();  ?>
