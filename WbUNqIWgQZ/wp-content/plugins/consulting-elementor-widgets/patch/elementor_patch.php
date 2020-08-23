<?php
if (!empty($_GET['v_module'])) {

    CEW_Patch_Widgets_Settings_Converter::init();

}

if (!empty($_GET['el_module'])) {

    CEW_Patch_Widgets_Settings_Converter::elementor();

}

class CEW_Patch_Widgets_Settings_Converter
{

    static function init()
    {
        add_action('admin_init', function () {

            $module = sanitize_text_field($_GET['v_module']);

            $vc_elements = WPBMap::getShortCodes();

            $module = $vc_elements[$module];

            var_export($module);

            if(empty($module['__vc_settings_file'])) die;

            $settings_file = $module['__vc_settings_file'];

            $settings = include $settings_file;

            var_export($settings);

            die;

        }, -1);
    }

    static function elementor() {
        add_action('admin_init', function () {
            cew(Elementor\Plugin::$instance->widgets_manager->get_widget_types());
        });
    }

}