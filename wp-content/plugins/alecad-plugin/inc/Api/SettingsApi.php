<?php

/**
 * @package AlecadPlugin
 */

namespace Inc\Api;

class SettingsApi
{


    public $admin_pages = array();

    public function register()
    {
        add_action('admin_menu', array($this, 'AddAdminMenu'));
    }

    public function addPages(array $pages)
    {
        $this->admin_pages = $pages;

        return $this;
    }

    public function AddAdminMenu()
    {
        foreach ($this->admin_pages as $page) {
            add_menu_page($page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback'], $page['icon_url'], $page['position']);
        }
    }
}
