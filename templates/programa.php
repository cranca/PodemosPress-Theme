<?php /* Template Name: Programa */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/variables.php'); ?>
<?php get_header(); ?>

<!-- WIDGETS -->

<div class="row sin-margen--abajo" data-equalizer data-equalize-on="medium">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('programa-arriba') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- PROGRAMA -->

<div class="row" data-equalizer data-equalize-on="medium">
	<?php 
    if ($bloqueA_ver == 1 && $bloqueA_titulo !== '') {
    ?>
	  <div class="small-12 medium-6 columns">
	    <div class="large callout fondo-gris--claro" data-equalizer-watch>

	      <h4><?php echo $bloqueA_titulo ?></h4>
	      <p>
	      	<?php if ($bloqueA_enlace_boton_1 !== '' && $bloqueA_texto_boton_1 !== '') { ?>
	      		<a href="<?php echo $bloqueA_enlace_boton_1 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueA_texto_boton_1 ?></a>
	      	<?php } 
	      	if ($bloqueA_enlace_boton_2 !== '' && $bloqueA_texto_boton_2 !== '') { ?>
	      		<a href="<?php echo $bloqueA_enlace_boton_2 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueA_texto_boton_2 ?></a>
	      	<?php } ?>
	      </p>	

	    </div>
	  </div>
	<?php }
		if ($bloqueB_ver == 1 && $bloqueB_titulo !== '') {
    ?>
	  <div class="small-12 medium-6 columns">
	    <div class="large callout fondo-gris--claro" data-equalizer-watch>
	      
	      <h4><?php echo $bloqueB_titulo ?></h4>
	      <p>
	      	<?php if ($bloqueB_enlace_boton_1 !== '' && $bloqueB_texto_boton_1 !== '') { ?>
	      		<a href="<?php echo $bloqueB_enlace_boton_1 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueB_texto_boton_1 ?></a>
	      	<?php } 
	      	if ($bloqueB_enlace_boton_2 !== '' && $bloqueB_texto_boton_2 !== '') { ?>
	      		<a href="<?php echo $bloqueB_enlace_boton_2 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueB_texto_boton_2 ?></a>
	      	<?php } ?>
	      </p>
		    
	    </div>
	  </div>
	<?php }
		if ($bloqueC_ver == 1 && $bloqueC_titulo !== '') {
    ?>
	  <div class="small-12 medium-6 columns">
	    <div class="large callout fondo-gris--claro" data-equalizer-watch>
	      
	      <h4><?php echo $bloqueC_titulo ?></h4>
	      <p>
	      	<?php if ($bloqueC_enlace_boton_1 !== '' && $bloqueC_texto_boton_1 !== '') { ?>
	      		<a href="<?php echo $bloqueC_enlace_boton_1 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueC_texto_boton_1 ?></a>
	      	<?php } 
	      	if ($bloqueC_enlace_boton_2 !== '' && $bloqueC_texto_boton_2 !== '') { ?>
	      		<a href="<?php echo $bloqueC_enlace_boton_2 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueC_texto_boton_2 ?></a>
	      	<?php } ?>
	      </p>
		    
	    </div>
	  </div>
	<?php }
		if ($bloqueD_ver == 1 && $bloqueD_titulo !== '') {
    ?>
	  <div class="small-12 medium-6 columns">
	    <div class="large callout fondo-gris--claro" data-equalizer-watch>
	      
	      <h4><?php echo $bloqueD_titulo ?></h4>
	      <p>
	      	<?php if ($bloqueD_enlace_boton_1 !== '' && $bloqueD_texto_boton_1 !== '') { ?>
	      		<a href="<?php echo $bloqueD_enlace_boton_1 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueD_texto_boton_1 ?></a>
	      	<?php } 
	      	if ($bloqueD_enlace_boton_2 !== '' && $bloqueD_texto_boton_2 !== '') { ?>
	      		<a href="<?php echo $bloqueD_enlace_boton_2 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueD_texto_boton_2 ?></a>
	      	<?php } ?>
	      </p>
		    
	    </div>
	  </div>
	<?php }
		if ($bloqueE_ver == 1 && $bloqueE_titulo !== '') {
    ?>
	  <div class="small-12 columns">
	    <div class="large callout fondo-gris--claro">

	      <h4><?php echo $bloqueE_titulo ?></h4>
	      <p>
	      	<?php if ($bloqueE_enlace_boton_1 !== '' && $bloqueE_texto_boton_1 !== '') { ?>
	      		<a href="<?php echo $bloqueE_enlace_boton_1 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueE_texto_boton_1 ?></a>
	      	<?php } 
	      	if ($bloqueE_enlace_boton_2 !== '' && $bloqueE_texto_boton_2 !== '') { ?>
	      		<a href="<?php echo $bloqueE_enlace_boton_2 ?>" class="small success button"><i class="fa fa-download"></i> <?php echo $bloqueE_texto_boton_2 ?></a>
	      	<?php } ?>
	      </p>
		    
	    </div>
	  </div>
	<?php } ?>
</div>

<!-- PROGRAMA -->

<div class="row">
  <div class="small-12 columns">
    <h5 class="titulo texto-centrado">
    	<?php printf( __('Objectius de %s','podemospress') , $delegacion_nombre ); ?> 
    </h5>
  </div>
  <?php
  $mypost = array( 'post_type' => 'puntos-del-programa', );
  $loop = new WP_Query( $mypost );
  ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post();?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="small-12 medium-4 columns">
        <div class="tarjeta tarjeta-morada">
          <div class="tarjeta-contenido">
            <span class="tarjeta-titulo">
              <?php the_title(); ?>
            </span>
          </div>
          <div class="tarjeta-accion">
            <a href="javascript:void(0)" class="control-abrir control-abrir--derecha" data-open="modal-<?php the_ID(); ?>"></a>
          </div>
        </div>
      </div>
      <!-- MODAL | PROGRAMA -->
      <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
        <div class="row">
          <div class="small-12 columns">
            <h2><?php the_title(); ?></h2>
            <p class="lead"></p>
            <?php the_content(); ?>
            <p>
              <hr>
              <a href="javascript:void(0)" class="button invertido--oscuro close-button" data-close aria-label="<?php esc_attr__('Tancar','podemospress'); ?>">
              	<?php _e('Tancar','podemospress'); ?>
             	</a>
            </p>
          </div>
        </div>
      </div>
    </article>
  <?php endwhile; ?>
</div>

<!-- WIDGETS -->

<div class="row sin-margen--abajo">
	<div class="small-12 columns">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('programa-abajo') ) : ?>

		<?php endif; ?>
	</div>
</div>

<!-- RECORDATORIO -->

<?php 
if ($callout_programa_ver == 1) { ?>
  <div class="row">
    <div class="small-12 columns">
      <div class="large callout fondo-gris--claro">
        <h4><?php echo $callout_programa_titulo ?></h4>
        <p><?php echo $callout_programa_texto ?></p>
        
        <?php 
        if ($callout_programa_boton !== '' && $callout_programa_enlace !== '') { ?>
          <a href="<?php echo $callout_programa_enlace ?>" class="button">
            <?php echo $callout_programa_boton ?>
          </a>
        <?php } ?>

      </div>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>

