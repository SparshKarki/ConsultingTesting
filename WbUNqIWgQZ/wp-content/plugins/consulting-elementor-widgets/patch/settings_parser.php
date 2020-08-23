<?php

class CEW_Patch_Widget_Settings_Parser
{

    static function parser($settings, $map = array())
    {

        if (empty($map['params']) && !empty($map['__vc_settings_file'])) {
            $settings_file = $map['__vc_settings_file'];
            $map = include $settings_file;
        }

        if (!empty($map) && !empty($map['params'])) {
            foreach ($map['params'] as $param) {

                if (!method_exists('CEW_Patch_Widget_Settings_Parser', $param['type'])) continue;

                $param_name = $param['param_name'];
                $param_type = $param['type'];

                if (empty($settings[$param_name])) continue;

                CEW_Patch_Widget_Settings_Parser::$param_type($settings[$param_name], $param_name, $settings);

            }
        }

        return $settings;
    }

    static function attach_image($setting_value, $setting_name, &$settings, $adds = array())
    {

        $url = wp_get_attachment_image_src($setting_value);

        if (!empty($url[0])) {
            $settings[$setting_name] = array(
                'id' => $setting_value,
                'url' => $url[0]
            );
        }

    }

    static function vc_link($setting_value, $setting_name, &$settings, $adds = array())
    {
        $link_data = explode('|', $setting_value);
        $r = array();
        if (!empty($link_data)) {
            foreach ($link_data as $link) {
                $link = explode(':', $link);
                if (count($link) === 2) {
                    $r[$link[0]] = urldecode($link[1]);
                }
            }
        }

        if (!empty($r['url'])) {
            $settings[$setting_name] = array(
                'url' => $r['url']
            );

            if (!empty($r['target']) && $r['target'] === ' _blank') {
                $settings[$setting_name]['is_external'] = 'on';
            }

            if (!empty($r['rel']) && $r['rel'] === 'follow') {
                $settings[$setting_name]['is_external'] = 'on';
            }

            if (!empty($r['title'])) $settings["{$setting_name}_label"] = $r['title'];
        }

    }

    static function iconpicker($setting_value, $setting_name, &$settings, $adds = array())
    {

        $settings[$setting_name] = array(
            'value' => $setting_value,
            'library' => 'fa solid'
        );

    }

    static function font_container($setting_value, $setting_name, &$settings, $adds = array())
    {

        $styles_data = explode('|', $setting_value);


        $settings["{$setting_name}_data"] = array(
            'values' => array()
        );

        foreach ($styles_data as $styles_datum) {
            $style = explode(':', $styles_datum);
            if (count($style) === 2) {
                $style_value = urldecode($style[1]);
                if ($style[0] === 'font_size' or $style[0] === 'line_height') {
                    $style_value = preg_replace("/[^0-9\.]/", '', $style_value);
                }
                $settings["{$setting_name}_{$style[0]}"] = $style_value;
            }
        }

    }

    static function css_editor($setting_value, $setting_name, &$settings, $adds = array())
    {
        /*Lets parse it baby*/
        /*♥TY Composer for inline css saving ♥*/
        preg_match_all('/{(.*?)}/', $setting_value, $matches, PREG_SET_ORDER);

        if (empty($matches[0]) and empty($matches[0][1])) return false;

        $css_data = explode(';', $matches[0][1]);
        $css = array();
        foreach ($css_data as $css_datum) {
            $css_datum = explode(':', $css_datum, 2);

            if (count($css_datum) !== 2) continue;

            $css[$css_datum[0]] = $css_datum[1];
        }

        $elementor_styles = self::elementor_styles_model();

        foreach ($css as $css_style => $css_value) {
            self::remove_important($css_value);
            switch ($css_style) {
                case 'margin':
                    self::css_margin($elementor_styles, $css_value, 'top');
                    self::css_margin($elementor_styles, $css_value, 'left');
                    self::css_margin($elementor_styles, $css_value, 'right');
                    self::css_margin($elementor_styles, $css_value, 'bottom');
                    break;
                case 'margin-top':
                    self::css_margin($elementor_styles, $css_value, 'top');
                    break;
                case 'margin-bottom':
                    self::css_margin($elementor_styles, $css_value, 'bottom');
                    break;
                case 'margin-left':
                    self::css_margin($elementor_styles, $css_value, 'left');
                    break;
                case 'margin-right':
                    self::css_margin($elementor_styles, $css_value, 'right');
                    break;
                case 'padding':
                    self::css_padding($elementor_styles, $css_value, 'top');
                    self::css_padding($elementor_styles, $css_value, 'left');
                    self::css_padding($elementor_styles, $css_value, 'right');
                    self::css_padding($elementor_styles, $css_value, 'bottom');
                    break;
                case 'padding-top':
                    self::css_padding($elementor_styles, $css_value, 'top');
                    break;
                case 'padding-left':
                    self::css_padding($elementor_styles, $css_value, 'left');
                    break;
                case 'padding-right':
                    self::css_padding($elementor_styles, $css_value, 'right');
                    break;
                case 'padding-bottom':
                    self::css_padding($elementor_styles, $css_value, 'bottom');
                    break;
                case 'border-top-width':
                    self::css_border_width($elementor_styles, $css_value, 'top');
                    break;
                case 'border-bottom-width':
                    self::css_border_width($elementor_styles, $css_value, 'bottom');
                    break;
                case 'border-right-width':
                    self::css_border_width($elementor_styles, $css_value, 'right');
                    break;
                case 'border-left-width':
                    self::css_border_width($elementor_styles, $css_value, 'left');
                    break;
                case 'background-color':
                    $elementor_styles['_background_color'] = $css_value;
                    break;
                case 'background-image':

                    $css_value = remove_query_arg('id', str_replace(array('url(', ')'), array(''), $css_value));

                    $elementor_styles['_background_image'] = array(
                        'url' => $css_value,
                        'id' => attachment_url_to_postid($css_value),
                    );
                    break;
            }

        }

        $settings = array_merge($elementor_styles, $settings);

    }

    static function google_fonts($setting_value, $setting_name, &$settings, $adds = array()) {

    }

    static function attach_images($setting_value, $setting_name, &$settings, $adds = array()) {

        $images = array();

        if(!empty($setting_value)) {
            $setting_value = explode(',', $setting_value);

            if(!empty($setting_value) && is_array($setting_value)) {
                foreach($setting_value as $image_id) {
                    $url = wp_get_attachment_image_src($image_id);

                    if (!empty($url[0])) {
                        $images[] = array(
                            'id' => $image_id,
                            'url' => $url[0]
                        );
                    }
                }

                $settings[$setting_name] = $images;
            }
        }
    }

    static function param_group($setting_value, $setting_name, &$settings, $adds = array()) {
        $settings[$setting_name] = self::vc_param_group_parse_atts($setting_value);
    }

    /*Helpers*/
    static function elementor_styles_model() {
        return [
            '_margin' => [
                'unit' => 'px',
                'top' => '0',
                'left' => '0',
                'right' => '0',
                'bottom' => '0',
                'isLinked' => false
            ],
            '_padding' => [
                'unit' => 'px',
                'top' => '0',
                'left' => '0',
                'right' => '0',
                'bottom' => '0',
                'isLinked' => false
            ],
            '_background_background' => 'classic',
            '_background_color' => '',
            '_background_image' => [
                'url' => '',
                'id' => '',
            ],
            '_background_position' => '',
            '_background_attachment' => '',
            '_background_repeat' => 'no-repeat',
            '_background_size' => 'cover',
            '_border_radius' => [
                'unit' => 'px',
                'top' => '0',
                'left' => '0',
                'right' => '0',
                'bottom' => '0',
            ],
            '_border_border' => '',
            '_border_width' => array(
                'unit' => 'px',
                'top' => '0',
                'left' => '0',
                'right' => '0',
                'bottom' => '0',
                'isLinked' => false
            )
        ];
    }

    static function css_margin(&$elementor_styles, $css_value, $direction)
    {
        $values = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $css_value);
        $value = (isset($values[0])) ? $values[0] : '0';
        $elementor_styles['_margin'][$direction] = $value;
        if (isset($values[1])) $elementor_styles['_margin']['units'] = $values[1];
    }

    static function css_padding(&$elementor_styles, $css_value, $direction)
    {
        $values = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $css_value);
        $value = (isset($values[0])) ? $values[0] : '0';
        $elementor_styles['_padding'][$direction] = $value;
        if (!empty($values[1])) $elementor_styles['_padding']['units'] = $values[1];
    }

    static function css_border_width(&$elementor_styles, $css_value, $direction)
    {
        $values = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $css_value);
        $value = (isset($values[0])) ? $values[0] : '0';
        $elementor_styles['_border_width'][$direction] = $value;
        if (isset($values[1])) $elementor_styles['_border_width']['units'] = $values[1];
        if(!empty($value)) $elementor_styles['_border_border'] = 'solid';
    }

    static function remove_important(&$string)
    {
        $string = trim(str_replace(' !important', '', $string));
    }

    static function remove_css_prefix(&$settings, $renamers = array()) {

        $renamers = (!empty($renamers)) ? $renamers : array_keys(self::elementor_styles_model());

        foreach($settings as $setting_name => $setting_value) {
            if(in_array($setting_name, $renamers)) {
                $settings[substr($setting_name, 1)] = $setting_value;
                unset($settings[$setting_name]);
            }
        }

    }

    static function vc_value_from_safe( $value, $encode = false ) {
        // @codingStandardsIgnoreLine
        $value = preg_match( '/^#E\-8_/', $value ) ? rawurldecode( base64_decode( preg_replace( '/^#E\-8_/', '', $value ) ) ) : $value;
        if ( $encode ) {
            $value = htmlentities( $value, ENT_COMPAT, 'UTF-8' );
        }

        return $value;
    }

    static function vc_param_group_parse_atts( $atts_string ) {

        $array = (is_array($atts_string)) ? $atts_string :  json_decode( urldecode( $atts_string ), true );

        return $array;
    }

}