<?php

class CustomPostType {
	protected $type = '';
	protected $name = '';
	protected $singular_name;
	protected $menu_position;
	protected $has_archive = true;
	protected $slug;
	protected $menu_icon;
	protected $taxonomies = array();
	protected $template = array();

	public function register_cpt() {
		$labels = array(
			'name' => __( $this->name, 'rangilabonos' ),
			'singular_name' => __( $this->singular_name, 'rangilabonos' ),
			'item_published' => __( $this->singular_name .' published', 'rangilabonos' )
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'thumbnail'),
			'taxonomies' => $this->taxonomies,
			'menu_icon' => $this->menu_icon,
			'menu_position' => $this->menu_position,
			'has_archive' => $this->has_archive,
			'rewrite' => array( 'slug' => $this->slug ),
			'template'=> $this->template,
		);
		
		register_post_type( $this->type, $args );
	}

	public function init() {
		add_action( 'init', array( $this, 'register_cpt' ) );
	}
}
