<?php
/*
Plugin Name: BlackSwan WooCommerce Attributes Easy-Select
Description: Easily search among attributes on manage-products screen, useful for shops with more than hundred attributes.
Author: BlackSwan
Author URI: https://amirhp.com
Plugin URI: https://blackswanlab.ir
Version: 1.0.0
Tested up to: 6.0
Requires PHP: 7.0
WC requires at least: 4.0
WC tested up to: 6.6.1
Text Domain: blackswan-woo-attr-select
Domain Path: /languages
Copyright: (c) amirhp.com, All rights reserved.
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
# @Last modified by:   amirhp.com
# @Last modified time: 2022/02/16 14:46:45
*/
defined("ABSPATH") or die("<h2>Unauthorized Access!</h2><hr><small>BlackSwan WooCommerce Attributes Easy-Select Plugin :: Developed by <a href='https://amirhp.com'>amirhp.com</a></small>");
if (!class_exists("wc_attributes_easy_select")) {
  class wc_attributes_easy_select
  {
    public $title   = "BlackSwan WooCommerce Attributes Easy-Select";
    public $version = "1.0.0";
    public function __construct()
    {
      load_plugin_textdomain("blackswan-woo-attr-select", false, dirname(plugin_basename(__FILE__))."/languages/");
      add_action("admin_enqueue_scripts", array($this, 'admin_enqueue_scripts'));
    }
    public function admin_enqueue_scripts($hook)
    {
      $screen = get_current_screen();
      if ("post" == $screen->base && "product" == $screen->id) {
        wp_enqueue_script("selectWoo");
        wp_enqueue_script("woo-attr-select", plugins_url("/wc_attributes_easy_select.js", __FILE__), array( "jquery", "selectWoo" ), "1.0.0", true);
      }
    }
  }
  add_action("plugins_loaded", function () { new wc_attributes_easy_select; } );
}
/*##################################################
Lead Developer: [amirhp-com](https://amirhp.com/)
##################################################*/
