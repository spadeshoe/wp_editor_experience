<?php
/**
	* Plugin Name: WP Editor Experience
	* Description: Experiments in curating the editor experience in the Admin dashboard
	* Version: 0.1.0
	* Author: Spadefoot Media, LLC
	* License: GPL-3.0
	* Text Domain: wp-editor-experience

*/

if( ! defined('ABSPATH') ){
	exit;
}

define('WP_EDITOR_UX__VERSION', '0.1.0-new-version');
define('WP_EDITOR_UX__DIRECTORY_PATH', plugin_dir_path( __FILE__ ));
define('WP_EDITOR_UX__DIRECTORY_URL', plugin_dir_url( __FILE__ ));

require WP_EDITOR_UX__DIRECTORY_PATH . '/inc/classes/PluginVersion.php';
require WP_EDITOR_UX__DIRECTORY_PATH . '/inc/init.php';
require WP_EDITOR_UX__DIRECTORY_PATH . '/inc/activation.php';

register_activation_hook(__FILE__, 'WP_EDITOR_EXPERIENCE\inc\wp_editor_experience_activate');