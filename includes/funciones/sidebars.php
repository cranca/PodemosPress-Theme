<?php 
/**
*		ÁREAS DE WIDGETS PARA PODEMOSPRESS
*  	----------------------------------
* 	Registro de zonas habilitadas para widgets.
*
* 	Creado por: Hector Asencio @MemorySoft
* 	
*/

if ( function_exists( 'register_sidebar' ) ) {
	// Inicio
	register_sidebar( array(
		'name' => 'Inicio Carrusel',
		'id' => 'home-carrusel',
		'description'   => 'ATENCIÓN: Asignar widgets a este contenedor desactivará el carrusel de la página de inicio!',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Inicio Bajo Actualidad',
		'id' => 'home-enmedio',
		'description'   => 'Inserta contenido bajo la sección de Actualidad de la página de inicio',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Inicio Lateral Arriba',
		'id' => 'home-lateral-uno',
		'description'   => 'ATENCIÓN: Asignar widgets a este contenedor desactivará la Agenda de la página de inicio!',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Inicio Lateral Medio',
		'id' => 'home-lateral-dos',
		'description'   => 'Inserta contenido debajo de la Agenda de la página de inicio',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Inicio Lateral Abajo',
		'id' => 'home-lateral-tres',
		'description'   => 'ATENCIÓN: Asignar widgets a este contenedor desactivará los widgets de Redes Sociales de la página de inicio!',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Pograma
	register_sidebar( array(
		'name' => 'Programa Arriba',
		'id' => 'programa-arriba',
		'description'   => 'Inserta contenido arriba de la página de Programa',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Programa Bajo Objetivos',
		'id' => 'programa-abajo',
		'description'   => 'Inserta contenido debajo de la sección Objetivos de la página de Programa',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Organización
	register_sidebar( array(
		'name' => 'Organizacion Arriba',
		'id' => 'organizacion-arriba',
		'description'   => 'Inserta contenido arriba de la página de Organización',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Organizacion Bajo Areas',
		'id' => 'organizacion-abajo',
		'description'   => 'Inserta contenido debajo de la sección Áreas de la página de Organización',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Miembros
	register_sidebar( array(
		'name' => 'Miembros Arriba',
		'id' => 'miembros-arriba',
		'description'   => 'Inserta contenido arriba de la página de Miembros',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Miembros Abajo',
		'id' => 'miembros-abajo',
		'description'   => 'Inserta contenido abajo de la página de Miembros',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Instituciones
	register_sidebar( array(
		'name' => 'Instituciones Arriba',
		'id' => 'instituciones-arriba',
		'description'   => 'Inserta contenido arriba de la página de Instituciones',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Instituciones Bajo Actividad',
		'id' => 'instituciones-enmedio',
		'description'   => 'Inserta contenido debajo de la sección Actividad de la página de Instituciones',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Instituciones Bajo Cargos',
		'id' => 'instituciones-abajo',
		'description'   => 'Inserta contenido debajo de la sección Relación de Cargos de la página de Instituciones',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Actualidad
	register_sidebar( array(
		'name' => 'Actualidad Arriba',
		'id' => 'actualidad-arriba',
		'description'   => 'Inserta contenido arriba de la página de Actualidad',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Actualidad Abajo',
		'id' => 'actualidad-abajo',
		'description'   => 'Inserta contenido abajo de la página de Actualidad',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Participación
	register_sidebar( array(
		'name' => 'Participación Arriba',
		'id' => 'participacion-arriba',
		'description'   => 'Inserta contenido arriba de la página de Participación',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Participación Bajo Herramientas',
		'id' => 'participacion-enmedio',
		'description'   => 'Inserta contenido bajo la sección Herramientas de la página de Participación',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Participación Abajo',
		'id' => 'participacion-abajo',
		'description'   => 'Inserta contenido debajo de la sección Áreas de la página de Participación',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Contacto
	register_sidebar( array(
		'name' => 'Contacto Arriba',
		'id' => 'contacto-arriba',
		'description'   => 'Inserta contenido arriba de la página de Contacto',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Contacto Bajo Directorio',
		'id' => 'contacto-abajo',
		'description'   => 'Inserta contenido debajo de la sección Directorio de la página de Contacto',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	// Footer
	register_sidebar( array(
		'name' => 'Footer Uno',
		'id' => 'footer-uno',
		'description'   => 'Inserta contenido en la columna central del pie de página',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Footer Dos',
		'id' => 'footer-dos',
		'description'   => 'Inserta contenido en la columna derecha del pie de página',
		'before_widget' => '<div id="%1$s" class="modulo %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
}
?>