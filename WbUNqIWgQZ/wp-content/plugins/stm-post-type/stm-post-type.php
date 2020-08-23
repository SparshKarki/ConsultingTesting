<?php
/*
Plugin Name: STM Configurations
Plugin URI: http://stylemixthemes.com/
Description: STM Post Type
Author: Stylemix Themes
Author URI: http://stylemixthemes.com/
Text Domain: stm_post_type
Version: 3.0
*/

define( 'STM_POST_TYPE', 'stm_post_type' );
define('STM_POST_TYPE_PATH', dirname(__FILE__));
define('STM_POST_TYPE_URL', plugin_dir_url(__FILE__));
if (!is_textdomain_loaded('stm_post_type')) {
    load_plugin_textdomain('stm_post_type', false, STM_POST_TYPE_PATH . '/languages');
}
require_once STM_POST_TYPE_PATH . '/post_type.class.php';
require_once STM_POST_TYPE_PATH . '/theme/helpers.php';
require_once STM_POST_TYPE_PATH . '/theme/vc.php';

//Custom Widgets
require_once(STM_POST_TYPE_PATH . '/widgets/socials.php');
require_once(STM_POST_TYPE_PATH . '/widgets/contacts.php');

function stm_plugin_styles() {
    wp_enqueue_style( 'datetimepicker', STM_POST_TYPE_URL . '/assets/css/jquery.datetimepicker.css', null, null, 'all' );
    wp_enqueue_script( 'datetimepicker', STM_POST_TYPE_URL . '/assets/js/jquery.datetimepicker.full.min.js', array(), '2.4.5', true );
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker' );

	wp_enqueue_media();
}

add_action( 'admin_enqueue_scripts', 'stm_plugin_styles' );