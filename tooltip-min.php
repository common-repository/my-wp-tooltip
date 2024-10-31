<?php
/*
Plugin Name: WP Tooltip
Plugin URI: http://prowpexpert.com/
Description: This plugin will enable tooltip in your Wordpress theme.
Author: sohelwpexpert
Author URI: paisleyfarmersmarket.ca/sohels/
Version: 1.0
*/


/*Some Set-up*/
define('MS_WP_TOOLTIP_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );



function ms_wp_tooltip_plugin_main_js() {
/**
 * Register global styles & scripts.
 */
wp_register_style('wp-tooltip-bootstrap-style', MS_WP_TOOLTIP_PLUGIN_PATH.'css/bootstrap.css');
wp_register_style('news-style-css', MS_WP_TOOLTIP_PLUGIN_PATH.'css/style.css');

wp_register_script('wp-tooltip-plugin-main', MS_WP_TOOLTIP_PLUGIN_PATH.'js/bootstrap.min.js', array( 'jquery' ));
wp_register_script('wp-tooltip-plugin-active', MS_WP_TOOLTIP_PLUGIN_PATH.'js/scripts.js', array( 'jquery' ));


/**
 * Enqueue global styles & scripts.
 */
 
wp_enqueue_style('wp-tooltip-bootstrap-style');
wp_enqueue_style('news-style-css');

wp_enqueue_script('wp-tooltip-plugin-main');
wp_enqueue_script('wp-tooltip-plugin-active');
wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'ms_wp_tooltip_plugin_main_js' );



?>