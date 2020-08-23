<?php
/*
Plugin Name: STM Importer
Plugin URI: https://stylemixthemes.com/
Description: STM Importer
Author: Stylemix Themes
Author URI: https://stylemixthemes.com/
Text Domain: stm_importer
Version: 5.3.2
*/

define('STM_CONFIGURATIONS_PATH', dirname(__FILE__));
define('STM_CONFIGURATIONS_URL', plugin_dir_url(__FILE__));

if (is_admin()) {
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/before_content.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/content.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/theme_options.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/plugins_options.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/slider.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/widgets.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/set_content.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/set_hb_options.php');
    require_once(STM_CONFIGURATIONS_PATH . '/helpers/megamenu/config.php');

    function stm_demo_import_content()
    {
        if(!current_user_can('administrator')) die;
        check_ajax_referer('stm_demo_import_content', 'nonce');
        $layout = 'default';
        $builder = 'js_composer';
    
        if(!empty($_GET['demo_template'])){
            $layout = sanitize_title($_GET['demo_template']);
        }

        if(!empty($_GET['builder'])) $builder = sanitize_title($_GET['builder']);
    
        update_option('consulting_layout', $layout);

        stm_theme_before_import_content($layout, $builder);

        /*Import content*/
        stm_theme_import_content($layout, $builder);

        /*Import theme options*/
        stm_set_layout_options($layout);

        /*Import plugins options*/
        stm_set_plugins_layout_options($layout);
    
        /*Import header builder*/
        stm_set_hb_options($layout);
    
        /*Import sliders*/
        stm_theme_import_sliders($layout);
    
        /*Import Widgets*/
        stm_theme_import_widgets($layout);
    
        /*Set menu and pages*/
        stm_set_content_options($layout, $builder);
    
        do_action('pearl_importer_done');
    
        wp_send_json(array(
            'url' => get_bloginfo('url'),
            'title' => esc_html__('View site', 'consulting'),
            'theme_options_title' => esc_html__('Theme options', 'consulting'),
            'theme_options' => esc_url_raw(admin_url('customize.php'))
        ));
        die();
    
    }
    
    add_action('wp_ajax_stm_demo_import_content', 'stm_demo_import_content');
}

