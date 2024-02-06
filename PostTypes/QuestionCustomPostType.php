<?php

require_once __DIR__ . '/CustomPostType.php';

class QuestionCPT extends CustomPostType {
	protected $type = 'rngl-question';
	protected $name = 'Questions';
	protected $singular_name = 'Question';
	protected $has_archive = 'consultorio';
	protected $menu_position = 7;
	protected $slug = 'consultas';
	protected $menu_icon;

	public function __construct()
	{
		$icon = file_get_contents( __DIR__ . '/../assets/faqs.svg' );
		$this->menu_icon = 'data:image/svg+xml;base64,' . base64_encode($icon);


	}
}
