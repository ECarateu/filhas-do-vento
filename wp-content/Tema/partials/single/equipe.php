<?php
get_header(); ?>


  <!-- breadcrumb -->
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb p-3 m-2 bg-light">
        <li class="breadcrumb-item ">
          <a class="text-dark text-uppercase" href="<?php echo get_home_url(); ?>">Início</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-dark text-uppercase" href="<?php  echo get_permalink( get_page_by_path('quem-somos') )?>"> Quem Somos</a>
         
        </li>
        <li class="breadcrumb-item active text-uppercase" aria-current="page"><?php the_title();('quem-somos');?></li>
      </ol>
    </nav>
    <!-- breadcrumb -->

    <!-- integrante  -->
    <section class="integante mt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">

            <div id="content">
              <img class="img-responsive col" src="<?php echo get_field('foto');?>" >
            </div>
            <div class="fundo-integrante" style="background-color: <?php echo get_field('esquema_de_cor');?>"></div>
          </div>
          <div class="col-sm-6 text-center">
            <h1 class="text-uppercase mt-5"><?php the_title();?></h1>
            <a href="<?php echo get_field('curriculo_lattes');?>">
              <button type="button" class="btn btn-curriculo-lattes btn-lg text-uppercase mt-2">currículo
                lattes</button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- integrante  -->

    <!-- timeline  -->
    <section class="timeline" style="margin-bottom: 100px; margin-top: 100px;">
      <div class="container py-2 mt-4 mb-4">

        <div class="row no-gutters">
          <div class="col-sm py-2">
            <div class="card border-light">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mulher.png" alt="icone" style="width: 60px; height: 70px; align-self: flex-end;">
              <div class="card-body ">
                <p class="card-text"><?php echo get_field('tl_sobre');?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>
            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>
          </div>
          <div class="col-sm"> </div>
        </div>

        <div class="row no-gutters">
          <div class="col-sm"> </div>
          <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>
            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>
          </div>
          <div class="col-sm py-2">
            <div class="card border-light">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-lives-matter.png"" alt="icone" style="width: 50px; height: 68px;">
              <div class="card-body">
                <p><?php echo get_field('tl_empoderamento');?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-sm py-2">
            <div class="card border-light">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-graduada.png" alt="icone" style="width: 60px; height: 70px; align-self: flex-end;">
              <div class="card-body">
                <p><?php echo get_field('tl_formacao');?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>

            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>
          </div>
          <div class="col-sm"> </div>
        </div>

        <div class="row no-gutters">
          <div class="col-sm"> </div>

          <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>

            <div class="row h-50">
            <div class="col borda-timeline" style=" border-right-style: solid !important; border-right-width: 2px !important; border-right-color: <?php echo get_field('esquema_de_cor') ?>">&nbsp;</div>
              <div class="col">&nbsp;</div>
            </div>
          </div>

          <div class="col-sm py-2">
            <div class="card border-light">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-estrela.png"" alt="icone" style="width: 70px; height: 70px;">
              <div class="card-body">
                <p class="card-text"><?php echo get_field('tl_bonus');?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- timeline  -->

<?php
get_footer();  ?>