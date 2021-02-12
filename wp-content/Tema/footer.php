<?php
/**
 * @package
 */
?>
 <footer class="bg-nav-footer" style="padding:50px;">
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-sm-12">
          <div class="row">
            <h4>CONTATO</h4>
          </div>

          <!-- contato footer -->
          <div class="row pt-2">
            <address class="emailadd">

              <a class="icone-email" style="text-decoration: none; color:black"
                href="mailto:<?php echo the_field('email', 'option'); ?>">
                <i class="fas fa-envelope"></i> filhasdoventocoletivo@gmail.com</a>
            </address>
          </div>

          <!-- redes sociais footer -->
          <div class="row pt-2">
            <a class="icones-footer" href="<?php echo the_field('facebook', 'option'); ?>"
              style="text-decoration: none;">
              <i class="fab fa-facebook"></i></a>
            <a class="icones-footer" href="<?php echo the_field('instagram', 'option'); ?>"
              style="text-decoration: none;">
              <i class="fab fa-instagram pl-3"></i></a>
          </div>
        </div>

        <!-- logo footer -->
        <div class="col-md-6 col-sm-12">
          <div class="footer-box">
            <a href="<?php echo get_home_url()?>">
              <img class="col text-center float-right mt-4 logo-footer" src="<?php echo the_field('logo', 'option'); ?>" width="auto" height="auto"
                alt="Filhas do Vento">
            </a>
          </div>
        </div>
      </div>
    </div>

  </footer>

<div id="site_url" homeurl="<?php echo home_url() ?>" themeurl="<?php echo get_template_directory_uri() ?>" ajaxurl="<?php echo admin_url('admin-ajax.php'); ?>"></div>
<?php wp_footer(); ?>
</body>
</html>
