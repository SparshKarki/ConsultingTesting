<?php

namespace cBuidler\Classes;

class CCBUpdatesCallbacks
{

    public static function get_calculators()
    {
        $calculators = new \WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'cost-calc',
            'post_status' => array('publish')
        ));

        return $calculators->posts;
    }

    /**
     * Change old icons
     */
    public static function update_icons()
    {

        $calculators = self::get_calculators();

//        return;
        if (!empty($calculators))
            foreach ($calculators as $calculator) {

                $clone = [];
                $fields = get_post_meta($calculator->ID, 'stm-fields', true);
                if (!empty($fields))
                    foreach ($fields as $field) {
                        foreach (CCBSettingsData::fields_data() as $data) {
                            if ($field['type'] === $data['name']) {
                                $field['icon'] = $data['icon'];
                            }
                        }
                        $clone[] = $field;
                    }

                update_post_meta($calculator->ID, 'stm-fields', $clone);
            }
    }

    /**
     * Change re-structure of customize store
     */
    public static function restructure_customize()
    {
        $calculators = self::get_calculators();

        if (!empty($calculators)) {
            foreach ($calculators as $calculator) {
                $styles_clone = [];
                $styles_data = CCBCustomFields::custom_default_styles();
                $styles = get_post_meta($calculator->ID, 'ccb-custom-styles', true);

                $custom_clone = [];
                $custom_fields = CCBCustomFields::custom_fields();
                $customs = get_post_meta($calculator->ID, 'ccb-custom-fields', true);

                foreach ( $styles_data as $element => $data ) {
                    $styles_clone[$element] = [];
                    foreach ($data as $style_key => $style_value) {

                        $changeable = [];
                        $element_type =  ( $element === 'v-container' || $element === 'h-container' ) ? 'container' : $element;

                        switch ($element_type) {
                            case 'container':
                            {
                                $changeable = ['margin', 'padding'];
                                break;
                            }
                            case 'drop-down': {
                                $changeable = ['padding', 'drop-down'];

                                break;
                            }
                            case 'quantity': {
                                $changeable = ['padding', 'quantity'];
                                break;
                            }
                        }

                        if (isset($styles[$element][$style_key]) && !in_array($style_key, $changeable))
                            $_val = $styles[$element][$style_key];
                        else
                            $_val = $style_value;

                        $styles_clone[$element][$style_key] = $_val;
                    }
                }

                foreach ($custom_fields as $element => $element_value) {
                    $custom_clone[$element] = [];

                    $custom_clone[$element] = [
                        'name' => $element,
                        'fields' => []
                    ];

                    foreach ($element_value['fields'] as $index => $custom_data) {
                        $custom_clone[$element]['fields'][] = $custom_data;

                        $name = $custom_data['name'];
                        $name = in_array($name, ['fColor', 'lineColor', 'circleColor', 'b_color', 'bg_color', 'checkedColor']) ? 'single-color' : $name;

                        switch ($name) {
                            case 'width':
                            {
                                if(isset($customs[$element]['fields'][$index]['default']['value']))
                                    $custom_clone[$element]['fields'][$index]['default']['value'] = $customs[$element]['fields'][$index]['default']['value'];
                                break;
                            }
                            case 'background-color': {
                                if(isset($customs[$element]['fields'][$index]['solid']['value'])) {
                                    $custom_clone[$element]['fields'][$index]['solid']['value'] = $customs[$element]['fields'][$index]['solid']['value'];
                                    $custom_clone[$element]['fields'][$index]['solid']['default'] = $customs[$element]['fields'][$index]['solid']['default'];
                                }

                                if(!empty($customs[$element]['fields'][$index]['gradient'])) {
                                    $custom_clone[$element]['fields'][$index]['gradient'][0]['value'] = $customs[$element]['fields'][$index]['gradient'][0]['value'];
                                    $custom_clone[$element]['fields'][$index]['gradient'][0]['default'] = $customs[$element]['fields'][$index]['gradient'][0]['default'];

                                    $custom_clone[$element]['fields'][$index]['gradient'][1]['value'] = $customs[$element]['fields'][$index]['gradient'][1]['value'];
                                    $custom_clone[$element]['fields'][$index]['gradient'][1]['default'] = $customs[$element]['fields'][$index]['gradient'][1]['default'];
                                }

                                break;
                            }
                            case 'border-radius': {
                                if(isset($customs[$element]['fields'][$index]['default'])){
                                    $custom_clone[$element]['fields'][$index]['default'] = $customs[$element]['fields'][$index]['default'];
                                }
                                break;
                            }

                            case 'box-shadow': {
                                if(isset($customs[$element]['fields'][$index])){
                                    $custom_clone[$element]['fields'][$index] = $customs[$element]['fields'][$index];
                                }
                                break;
                            }

                            case 'text-settings': {
                                if(isset($customs[$element]['fields'][$index]))
                                    $custom_clone[$element]['fields'][$index] = $customs[$element]['fields'][$index];
                                break;
                            }

                            case 'single-color': {
                                if(!empty($customs[$element]['fields'][$index]['value'])) {
                                    $custom_clone[$element]['fields'][$index]['value'] = $customs[$element]['fields'][$index]['value'];
                                    $custom_clone[$element]['fields'][$index]['default'] = $customs[$element]['fields'][$index]['default'];
                                }
                                break;
                            }
                        }
                    }
                }

                update_post_meta($calculator->ID, 'ccb-custom-styles', $styles_clone);
                update_post_meta($calculator->ID, 'ccb-custom-fields', $custom_clone);
            }
        }
    }
}