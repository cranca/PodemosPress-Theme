<?php
/**
 *	PÁGINA DE INICIO
 * 	----------------
 */
add_action('admin_menu', 'CreaMenuInstituciones');
add_action('admin_init', 'RegistraOpcionesInstituciones');

function CreaMenuInstituciones() {
  add_submenu_page(
    "configuracion",
  	__("Instituciones"), 
  	__("Instituciones"), 
  	"manage_options", 
  	"instituciones", 
  	"PaginaInstituciones"
  	);
}

function RegistraOpcionesInstituciones() {

  add_option("instituciones_nombre","","","yes");

  add_option("instituciones_carrusel_visibilidad","","","yes");

  add_option("instituciones_actividad_visibilidad","","","yes");

  add_option("instituciones_callout_visibilidad","","","yes");
  add_option("instituciones_callout_titulo","","","yes");
  add_option("instituciones_callout_texto","","","yes");
  add_option("instituciones_callout_texto_boton","","","yes");
  add_option("instituciones_callout_enlace_boton","","","yes");


  register_setting("opciones_instituciones", "instituciones_nombre");

  register_setting("opciones_instituciones", "instituciones_carrusel_visibilidad");

  register_setting("opciones_instituciones", "instituciones_actividad_visibilidad");

  register_setting("opciones_instituciones", "instituciones_callout_visibilidad");
  register_setting("opciones_instituciones", "instituciones_callout_titulo");
  register_setting("opciones_instituciones", "instituciones_callout_texto");
  register_setting("opciones_instituciones", "instituciones_callout_texto_boton");
  register_setting("opciones_instituciones", "instituciones_callout_enlace_boton");
}

function PaginaInstituciones() {
  if (!current_user_can('manage_options'))
      wp_die(__("No tienes acceso a esta página."));
  ?>
  <div class="wrap">
    <h1><span class="dashicons dashicons-admin-multisite" style="font-size: 2rem; margin-right: 1rem;"></span> Página de Instituciones <small>- Opciones de configuración</small></h1>
    
    <hr>

    <?php settings_errors(); ?>

    <form method="post" action="options.php">
      <?php settings_fields('opciones_instituciones'); ?>

      <h2>Institución</h2>
      <p>Configura el nombre de la institución o ámbito administrativo donde los cargos electos de esta delegación realizan su actividad y que aparecerá en los titulares de la página "Instituciones".</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Nombre de la institución</th>
          <td><input type="text" name="instituciones_nombre" size="40" value="<?php echo get_option('instituciones_nombre'); ?>" />
          <p class="description">E.j. Consell Insula de Menorca</p></td>
        </tr>
      </table>

      <hr>

      <h2>Carrusel de Actualidad</h2>
      <p>Esta es la sección donde aparecen los post que tienen la categoria "Instituciones".</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar carrusel</th>
          <td>
          <?php $options = get_option( "instituciones_carrusel_visibilidad" ); ?>
          <input type="checkbox" name="instituciones_carrusel_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el carrusel</span>
        </tr>
      </table>

      <hr>

      <h2>Actividad institucional</h2>
      <p>Esta es la sección donde aparece la actividad que esta delegación realiza en las instituciones en las que tiene cargos.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar actividad</th>
          <td>
          <?php $options = get_option( "instituciones_actividad_visibilidad" ); ?>
          <input type="checkbox" name="instituciones_actividad_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar la Actividad</span>
        </tr>
      </table>

      <hr>

      <h2>Callout</h2>
      <p>Esta es la sección a pie de página que sirve para insertar mensajes destacados con título, texto y enlace opcionales.</p>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Mostrar callout</th>
          <td>
          <?php $options = get_option( "instituciones_callout_visibilidad" ); ?>
          <input type="checkbox" name="instituciones_callout_visibilidad" <?php checked( $options, 1 ); ?> value="1"> <span class="description">Desmarcar para ocultar el callout completo</span>
        </tr>
      </table>
      <table class="form-table">
        <tr valign="top">
          <th scope="row">Título del callout</th>
          <td><input type="text" name="instituciones_callout_titulo" size="40" value="<?php echo get_option('instituciones_callout_titulo'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Texto del callout</th>
          <td><textarea name="instituciones_callout_texto" cols="37" rows="10"><?php echo get_option('instituciones_callout_texto'); ?></textarea></td>
        </tr>
        <tr valign="top">
          <th scope="row">Botón del callout</th>
          <td><input type="text" name="instituciones_callout_texto_boton" size="40" value="<?php echo get_option('instituciones_callout_texto_boton'); ?>" />
          <span class="description">Texto del botón</span>
          <br>
          <input type="text" name="instituciones_callout_enlace_boton" size="40" value="<?php echo get_option('instituciones_callout_enlace_boton'); ?>" />
          <span class="description">Enlace del botón</span>
          <p class="description">Debes rellenar los dos campos o el botón no se mostrará.</p></td>
        </tr>
      </table>

      <p class="submit">
      	<input name="instituciones_guardar" type="submit" class="button-primary" value="<?php _e('Guardar cambios') ?>" />
      </p>

    </form>
  </div>
<?php } ?>