<?php

class CustomTaxonomy {
	protected $name;
	protected $type;
	protected $label;

	
	public function register_cpt_taxonomy()
	{
		$taxonomy_args = array(
			'label' => __( $this->label, 'rangilabonos' ),
			'show_in_rest' => true,
		);

		register_taxonomy(
			$this->name,
			$this->type,
			$taxonomy_args
		);
	}

	public function init() {
		add_action( 'init', array( $this, 'register_cpt_taxonomy' ) );
	}
}
