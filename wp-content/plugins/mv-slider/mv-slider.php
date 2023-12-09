<?php

/**
 * Plugin Name: MV Slider
 * Plugin URI: https://www.wodpress.org/mv-slider
 * Description: My plugin's description
 * Version: 1.0
 * Requires at least: 6.4.1
 * Author: Md. Rayhan Uddin Chowdhury
 * Author URI: https://rayhanuddinchy.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mv-slider
 * Domain Path: /languages 
 **/

 /*
MV Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
MV Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with MV Slider. If not, see https://www.gnu.org/licenses/gpl-2.0.html.

*/

if( ! defined('ABSPATH') ) {
  exit;
}

if( ! class_exists( 'MV_Slider' )) {
  class MV_Clider {
    function __construct() 
    {
      $this->define_constants();
    }
    public function define_constants() {
      define( 'MV_SLIDER_PATH', plugin_dir_path( __FILE__ ) );
      define( 'MV_SLIDER_URL', plugin_dir_url( __FILE__ ) );
      define( 'MV_SLIDER_VERSION', '1.0.0' );
    }

    public static function activate() {
      // flush_rewrite_rules();
      update_option('rewrite_rules', '');
    }

    public static function deactivate() {
      flush_rewrite_rules();
    }

    public static function uninstall() {

    }
  }
}

if (class_exists('MV_Slider')) {
  register_activation_hook( __FILE__, array('MV_Slider','activate'));
  register_deactivation_hook( __FILE__, array('MV_Slider','deactivate'));
  register_uninstall_hook( __FILE__, array('MV_Slider','uninstall'));
  $mv_slider = new MV_Clider();
}
