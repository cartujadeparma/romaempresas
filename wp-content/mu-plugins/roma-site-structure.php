<?php
/**
 * Plugin Name: Roma Empresas — Estructura del sitio
 * Description: Registra los tipos de contenido y taxonomías que soportan la
 *              arquitectura de información definida en docs/estructura-sitio-web.md
 *              (flota de vehículos y testimonios de clientes).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * CPT "Vehículo" — unidades de la flota (Flota > Vehículos de carga pesada /
 * Vehículos menores). Se filtran mediante la taxonomía categoria_flota.
 */
function roma_registrar_cpt_vehiculo() {
	register_post_type(
		'vehiculo',
		array(
			'labels'       => array(
				'name'          => 'Vehículos',
				'singular_name' => 'Vehículo',
				'add_new_item'  => 'Añadir vehículo',
				'edit_item'     => 'Editar vehículo',
				'all_items'     => 'Flota de vehículos',
				'search_items'  => 'Buscar vehículos',
				'not_found'     => 'No se encontraron vehículos',
			),
			'public'       => true,
			'has_archive'  => 'flota/vehiculos',
			'rewrite'      => array( 'slug' => 'flota/vehiculo' ),
			'menu_icon'    => 'dashicons-car',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest' => true,
		)
	);

	register_taxonomy(
		'categoria_flota',
		'vehiculo',
		array(
			'labels'            => array(
				'name'          => 'Categorías de flota',
				'singular_name' => 'Categoría de flota',
			),
			'public'            => true,
			'hierarchical'      => true,
			'show_in_rest'      => true,
			'rewrite'           => array( 'slug' => 'flota/categoria' ),
		)
	);
}
add_action( 'init', 'roma_registrar_cpt_vehiculo' );

/**
 * Categorías por defecto de la taxonomía de flota, alineadas a las
 * subpáginas "Vehículos de carga pesada" y "Vehículos menores".
 */
function roma_sembrar_categorias_flota() {
	$categorias = array(
		'carga-pesada' => 'Carga pesada',
		'menores'      => 'Vehículos menores',
	);

	foreach ( $categorias as $slug => $nombre ) {
		if ( ! term_exists( $slug, 'categoria_flota' ) ) {
			wp_insert_term( $nombre, 'categoria_flota', array( 'slug' => $slug ) );
		}
	}
}
add_action( 'init', 'roma_sembrar_categorias_flota', 20 );

/**
 * CPT "Testimonio" — usado por la página Clientes / Experiencia y por el
 * bloque de testimonios destacados en Inicio.
 */
function roma_registrar_cpt_testimonio() {
	register_post_type(
		'testimonio',
		array(
			'labels'       => array(
				'name'          => 'Testimonios',
				'singular_name' => 'Testimonio',
				'add_new_item'  => 'Añadir testimonio',
				'edit_item'     => 'Editar testimonio',
				'all_items'     => 'Testimonios',
				'search_items'  => 'Buscar testimonios',
				'not_found'     => 'No se encontraron testimonios',
			),
			'public'       => true,
			'has_archive'  => false,
			'rewrite'      => array( 'slug' => 'clientes/testimonio' ),
			'menu_icon'    => 'dashicons-format-quote',
			'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'show_in_rest' => true,
		)
	);

	register_post_meta(
		'testimonio',
		'empresa_cliente',
		array(
			'type'         => 'string',
			'single'       => true,
			'show_in_rest' => true,
		)
	);

	register_post_meta(
		'testimonio',
		'cargo_autor',
		array(
			'type'         => 'string',
			'single'       => true,
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'roma_registrar_cpt_testimonio' );
