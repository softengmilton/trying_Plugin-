<?php

/**
 * @package AlecadPlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class Admin extends BaseController
{

    public $settings;
    public $pages = array();
    public $subpages = array();

    public function __construct()
    {
        $this->settings = new SettingsApi();

        $this->pages = array(
            array(
                'page_title' => 'Alecad Plugin',
                'menu_title' => 'Alecad',
                'capability' => 'manage_options',
                'menu_slug' => 'alecad_plugin',
                'callback' => function () {
                    echo '<h1>Alecad Plugin</h1>';
                },
                'icon_url' => 'dashicons-store',
                'position' => 110
            )
        );

        $this->subpages = array(
            array(
                'parent_slug' => 'alecad_plugin',
                'page_title' => 'Custom Page Type',
                'menu_title' => 'CPT',
                'capability' =>  'manage_options',
                'menu_slug' => 'alecad_cpt',
                'callback' => function () {
                    echo '<h1> CPT Manger</h1>';
                },
            ),
            array(
                'parent_slug' => 'alecad_plugin',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'Taxonomies',
                'capability' =>  'manage_options',
                'menu_slug' => 'alecad_taxonomies',
                'callback' => function () {
                    echo '<h1> Taxonomies Manger</h1>';
                },
            ),
            array(
                'parent_slug' => 'alecad_plugin',
                'page_title' => 'Custom Widgets',
                'menu_title' => 'Widgets',
                'capability' =>  'manage_options',
                'menu_slug' => 'alecad_widgets',
                'callback' => function () {
                    echo '<h1> Widgets Manger</h1>';
                },
            )
        );
    }

    public function register()
    {
        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }
}
