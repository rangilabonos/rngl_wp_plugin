<?php

require_once __DIR__ . '/CustomPostType.php';

class TaskCPT extends CustomPostType {
	protected $type = 'rngl-task';
	protected $name = 'Tasks';
	protected $singular_name = 'Task';
	protected $has_archive = 'calendario';
	protected $menu_position = 6;
	protected $slug = 'tareas';
	protected $menu_icon;

	public function __construct()
	{
		$icon = file_get_contents( __DIR__ . '/../assets/project.svg' );
		$this->menu_icon = 'data:image/svg+xml;base64,' . base64_encode($icon);


	}
}
