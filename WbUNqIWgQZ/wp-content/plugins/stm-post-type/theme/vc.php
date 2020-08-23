<?php
add_action('init', 'consulting_add_custom_options');
function consulting_add_custom_options(){
    if (function_exists('vc_add_shortcode_param')) {
        if (function_exists('consulting_animator_param')) {
            vc_add_shortcode_param( 'stm_animator', 'consulting_animator_param' );
        }


        vc_add_shortcode_param('stm_datepicker_vc', 'stm_datepicker_vc_st', get_template_directory_uri() . '/assets/js/jquery.stmdatetimepicker.js');
        function stm_datepicker_vc_st($settings, $value)
        {
            return '<div class="stm_datepicker_vc_field">'
                . '<input type="text" name="' . esc_attr($settings['param_name']) . '" class="stm_datepicker_vc wpb_vc_param_value wpb-textinput ' .
                esc_attr($settings['param_name']) . ' ' .
                esc_attr($settings['type']) . '_field" type="text" value="' . esc_attr($value) . '" />' .
                '</div>';
        }

        vc_add_shortcode_param('stm_timepicker_vc', 'stm_timepicker_vc_st');
        function stm_timepicker_vc_st($settings, $value)
        {
            return '<div class="stm_timepicker_vc_field">'
                . '<input type="text" name="' . esc_attr($settings['param_name']) . '" class="stm_timepicker_vc wpb_vc_param_value wpb-textinput ' .
                esc_attr($settings['param_name']) . ' ' .
                esc_attr($settings['type']) . '_field" type="text" value="' . esc_attr($value) . '" />' .
                '</div>';
        }

        vc_add_shortcode_param('stm_countdown_vc', 'stm_countdown_vc_st', get_template_directory_uri() . '/assets/js/jquery.stmdatetimepicker.js');
        function stm_countdown_vc_st($settings, $value)
        {
            return '<div class="stm_countdown_vc_field">'
                . '<input type="text" name="' . esc_attr($settings['param_name']) . '" class="stm_countdown_vc wpb_vc_param_value wpb-textinput ' .
                esc_attr($settings['param_name']) . ' ' .
                esc_attr($settings['type']) . '_field" type="text" value="' . esc_attr($value) . '" />' .
                '</div>';
        }
    }
}
