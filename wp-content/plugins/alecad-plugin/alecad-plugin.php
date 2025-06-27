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

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human!');

use Inc\Activate;
use Inc\Deactivate;

class AlecadPlugin
{
    public $plugin;

    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));

        $this->plugin = plugin_basename(__FILE__);
    }

    function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));

        add_action('admin_menu', array($this, 'add_admin_pages'));

        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }

    public function settings_link($links)
    {
        $settings_link = '<a href="admin.php?page=alecad_plugin">Settings</a>';

        array_push($links, $settings_link);

        return $links;
    }

    public function add_admin_pages()
    {
        add_menu_page(
            'Alecad Plugin',
            'Alecad',
            'manage_options',
            'alecad_plugin',
            array($this, 'admin_index'),
            'dashicons-store',
            110
        );
    }

    public function admin_index()
    {
        // require template
        require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
    }

    function activate()
    {
        // require_once plugin_dir_path(__FILE__) . 'inc/alecad-plugin-activate.php';
        Activate::activate();
    }

    function deactivate()
    {
        Deactivate::deactivate();
    }

    function custom_post_type()
    {
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }

    function enqueue()
    {
        // enqueue all our scripts
        wp_enqueue_style('mypluginstyle', plugins_url('assets/mystyle.css', __FILE__));
        wp_enqueue_script('mypluginscripts', plugins_url('assets/myscript.js', __FILE__));
    }
}

if (class_exists('AlecadPlugin')) {
    $alecadPlugin = new AlecadPlugin();
    $alecadPlugin->register();
}

// activation

register_activation_hook(__FILE__, array($alecadPlugin, 'activate'));

// deactivation 
// require_once plugin_dir_path(__FILE__) . 'inc/alecad-plugin-deactivate.php';
register_deactivation_hook(__FILE__, array($alecadPlugin, 'deactivate'));
