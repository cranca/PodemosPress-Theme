  <?php include('includes/opciones/variables.php'); ?>

  <!-- PIE DE PÁGINA -->

  <footer>
    <div class="franja fondo-gris--claro sin-margen--abajo">
      <div class="row footer">
        <div class="small-12 large-6 columns">
          <?php if ( get_theme_mod( 'podemospress_logo' ) ) : ?>
            <div class='site-logo'>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <img src='<?php echo esc_url( get_theme_mod( 'podemospress_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
              </a>
            </div>
          <?php else : ?>
            <h2>
              <?php bloginfo( 'name' ); ?>
            </h2>
          <?php endif; ?>
          <h5><?php echo $delegacion_direccion ?></h5>
          <div> 
              <p>
                <strong>
                  <?php echo $delegacion_horario_am ?><br>
                  <?php echo $delegacion_horario_pm ?>
                  <br>
                  <br>
                  <a href="<?php echo esc_url( home_url( '/contactar' ) ); ?>" class="button small invertido--oscuro"><?php _e('Contacte','podemospress' ); ?></a>
                </strong>
              </p>
          </div>
        </div>

        <div class="small-12 large-3 columns">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-uno') ) : ?>
            <h5>Podem</h5>
            <?php menu_secundario(); ?> 
          <?php endif; ?>
        </div>

        <div class="small-12 large-3 columns">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-dos') ) : ?>
            <h5>Noticies</h5>
            <?php menu_noticias(); ?> 
          <?php endif; ?>
        </div>
      
      </div>
    </div>

    <?php 
      if ($subdelegaciones_ver == 1) {
      ?>
      <div class="franja--estrecha fondo-morado sin-margen--abajo">
        <div class="row sin-margen--abajo">
          <div class="small-12 columns menu-centered">
            <?php menu_subdelegaciones(); ?> 
          </div>
        </div>
      </div>
    <?php } ?>

    <div class="franja--estrecha fondo-gris--oscuro sin-margen--abajo">
      <div class="row sin-margen--abajo">
        <div class="small-12 large-9 columns">
          <?php menu_inferior(); ?> 
        </div>
        <div class="small-12 large-3 columns">
          <ul class="menu align-right">
          <?php
          if ($enlace_twitter !== '') { ?>
            <li><a href="<?php echo $enlace_twitter ?>"><i class="fa fa-twitter"></i></a></li>
          <?php }
          if ($enlace_facebook !== '') { ?>
            <li><a href="<?php echo $enlace_facebook ?>"><i class="fa fa-facebook"></i></a></li>
          <?php }
          if ($enlace_youtube !== '') { ?>
            <li><a href="<?php echo $enlace_youtube ?>"><i class="fa fa-youtube"></i></a></li>
          <?php }
          if ($enlace_instagram !== '') { ?>
            <li><a href="<?php echo $enlace_instagram ?>"><i class="fa fa-instagram"></i></a></li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo get_option('global_analitica'); ?>', 'auto');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');

  </script>
  
  <?php wp_footer() ?>
  </body>
</html>