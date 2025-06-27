<?php

/**
 * @package AlecadPlugin
 */


namespace Inc\Base;

class Activate
{
    public static function activate()
    {
        // echo 'Test';
        flush_rewrite_rules();
    }
}
