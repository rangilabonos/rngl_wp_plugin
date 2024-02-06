<?php

require_once __DIR__ . '/CustomPostType.php';

class PlantCPT extends CustomPostType {
	protected $type = 'rngl-plant';
	protected $name = 'Plants';
	protected $singular_name = 'Plant';
	protected $has_archive = 'herbario';
	protected $menu_position = 5;
	protected $slug = 'plantas';
	protected $menu_icon = 'dashicons-carrot';
	protected $taxonomies = array( 'rngl-family' );
	protected $template = array(
		array( 'core/table', array(
			'body' => array(
				array(
					'cells' => array(
						array( 'content' => 'Nombre científico', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Familia', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Propiedades', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Características', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Siembra', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Directamente', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Transplante', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Marco de plantación', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Recolección', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Dosis de siembra', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Semillas por gramo', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Germinación', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Temperatura suelo', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Altura', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Variedades', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Plagas principales', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
				array(
					'cells' => array(
						array( 'content' => 'Clima y suelo', 'tag' => 'td' ),
						array( 'content' => '', 'tag' => 'td' )
					)
				),
			),
		) ),
	);
}
