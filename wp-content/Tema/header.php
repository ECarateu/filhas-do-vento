
<?php wp_head() ?>


<html lang="pt-br">

<head>
  <title>Filhas do Vento</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

</html>


<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.ico" />

<body <?php body_class() ?>>

    <!-- redes sociais, barra de pesquisa e navbar-->
    <div class="container-fluid mt-2 p-4 bg-nav-footer">
      <div class="row">
       <!-- logo -->
       <div class="col-sm-2 logo-responsive text-center">
          <a href="<?php echo get_home_url()?>">
            <img src="<?php echo the_field('logo', 'option') ?>" alt="Filhas do Vento" width="100px;" height="100px;">
          </a>
        </div>
        <!-- logo -->

        <!-- redes sociais -->
        <div class="col-sm-10">
          <div class="row " style="justify-content:flex-end; ">
            <div class="mt-1 icons-responsive">
              <a href="<?php echo the_field('facebook', 'option'); ?>" style="text-decoration: none;">
                <i style=" color:#417505; font-size: 30px;" class="fab fa-facebook"></i>
              </a>
              <a href="<?php echo the_field('instagram', 'option'); ?>" style="text-decoration: none;">
                <i style=" color:#417505; font-size: 30px;" class="fab fa-instagram pl-3 pr-3"></i>
              </a>
            </div>
            <!-- redes sociais -->

            <!-- barra de pesquisa -->
            <form class="form-inline search-responsive" role="search" method="get" action="">
              <div class="input-group">
                <input type="search" class="form-control" value="" name="s" placeholder="O que você procura?">
                <div class="input-group-append">
                  <button class="btn" type="submit" style="background-color:#417505;">
                    <i class="fa fa-search text-white"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- barra de pesquisa -->
          </div>

          <div id="topbarnav" class="row responsive-nav">
            <nav class="navbar navbar-expand-lg navbar-light">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">

              <?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>

              </div>
            </nav>
          </div>
       </div>
      </div>
    </div>
   
