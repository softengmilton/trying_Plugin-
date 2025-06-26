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



class AlecadPlugin
{

    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));
    }

    function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function activation()
    {
        // CPT
        // flush rewrite rules
        $this->custom_post_type();
        flush_rewrite_rules();
    }

    function deactivation()
    {
        // CPT
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function uninstall()
    {
        // delete CPT
        // flush rewrite rules
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
register_activation_hook(__FILE__, array($alecadPlugin, 'activation'));

// deactivation 
register_deactivation_hook(__FILE__, array($alecadPlugin, 'deactivation'));
