<?php

/**
 * @package
 */
/*
Plugin Name: AlecadPlugin
Plugin URI: http://alecadplugin.com
Description: A basic plugin to demonstrate custom post types with activation/deactivation hooks.
Version: 1.0.0
Author: Milton "AlecadPlugin"
Author URI: http://milton.com
License: GPLv2 or later
Text Domain: alecad-plugin
*/
defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human!');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}


/**
 * The code that runs during plugin activation
 */
function activate_alecad_plugin()
{
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_alecad_plugin');\

/**
 * The code that runs during plugin deactivation
 */
function deactivate_alecad_plugin()
{
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_alecad_plugin');
