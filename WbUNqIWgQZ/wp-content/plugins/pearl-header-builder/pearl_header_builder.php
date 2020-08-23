<?php
/*
Plugin Name: WordPress Header Builder Plugin – Pearl
Plugin URI: http://hb.stylemixthemes.com
Description: Pearl Header Builder gives you complete freedom to compose a header that perfectly suits your site.
Author: StylemixThemes
Author URI: http://stylemixthemes.com
Version: 1.3.3
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define('STM_HB_VER', '1.0');
define('STM_HB_DIR', plugin_dir_path(__FILE__));
define('STM_HB_URL', plugins_url('/', __FILE__));
define('STM_HB_PATH', plugin_basename(__FILE__));

require_once(STM_HB_DIR . 'frontend/functions.php');

if (!is_textdomain_loaded('pearl_header_builder')) {
    load_plugin_textdomain('pearl_header_builder', false, 'stm_header_builder/languages');
}

if(is_admin()) {
    $includes_path = STM_HB_DIR . 'includes/';
    require_once($includes_path . 'presets.php');
    require_once($includes_path . 'helpers.php');
    require_once($includes_path . 'screen.php');
    require_once($includes_path . 'enqueue.php');
    require_once($includes_path . 'js_translations.php');
}