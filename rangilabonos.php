<?php
/**
 * Plugin Name:     Rangilabonos
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     rangilabonos
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Rangilabonos
 */

require_once __DIR__ . '/PostTypes/PlantCustomPostType.php';
require_once __DIR__ . '/PostTypes/TaskCustomPostType.php';
require_once __DIR__ . '/PostTypes/QuestionCustomPostType.php';
require_once __DIR__ . '/Taxonomies/PlantFamilies.php';
require_once __DIR__ . '/Taxonomies/TaskMonths.php';

$plant_cpt = new PlantCPT();
$plant_cpt->init();

$plant_families = new PlantFamilies();
$plant_families->init();

$task_cpt = new TaskCPT();
$task_cpt->init();

$months = new TaskMonths();
$months->init();

$question_cpt = new QuestionCPT();
$question_cpt->init();

add_filter( 'get_the_archive_title', function( $title ) {
	if ( is_post_type_archive( 'rngl-plant') ) {
		return 'Herbario';
	}
	elseif ( is_post_type_archive( 'rngl-task' ) ) {
		return 'Calendario';
	}
	elseif ( is_post_type_archive( 'rngl-question' ) ) {
		return 'Consultorio';
	}
});
