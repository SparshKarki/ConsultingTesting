<?php


class Cew_Rebuild_Elementor_Data
{

    public function __construct()
    {

        add_action('init', [$this, 'get_elementor_elements']);

    }

    function get_elementor_elements() {
        return Elementor\Plugin::$instance->widgets_manager->get_widget_types();
    }

    public function rebuild_elementor_data(&$elementor_data) {

        $elementor_elements = $this->get_elementor_elements();

        $this->start_walk($elementor_data, $elementor_elements);


    }

    function start_walk(&$data, $elementor_elements) {

        foreach($data as $key => &$element_data) {

            $element_type = (!empty($element_data['origin'])) ? $element_data['origin'] : '';

            if (!empty($element_type) && method_exists('Cew_Rebuild_Elementor_Data', $element_type)) {
                Cew_Rebuild_Elementor_Data::$element_type($element_data, $data, $key);
            }

            if($element_data['elType'] === 'widget' && !isset($elementor_elements[$element_data['widgetType']])) {
                unset($data[$key]);
            }

            if(!empty($element_data['elements'])) $this->start_walk($element_data['elements'], $elementor_elements);
        }
    }

    static function stm_gmap(&$element_data) {
        $addresses = $element_data['elements'];

        if(!empty($addresses)) {
            if(empty($element_data['settings'])) $element_data['settings'] = array();
            $element_data['settings']['addresses'] = array();
            foreach($addresses as $address) {
                if(empty($address['settings'])) continue;
                $address['settings']['_id'] = CEW_Patch::generate_id();
                $element_data['settings']['addresses'][] = $address['settings'];
            }
        }

        unset($element_data['elements']);
    }

    static function stm_animation_block(&$element_data, &$data, $key) {
        if(!empty($element_data['elements']) and !empty($element_data['elements'][0])) {
            $element_data = $element_data['elements'][0];

            $element_type = (!empty($element_data['origin'])) ? $element_data['origin'] : '';

            if (!empty($element_type) && method_exists('Cew_Rebuild_Elementor_Data', $element_type)) {
                Cew_Rebuild_Elementor_Data::$element_type($element_data, $data, $key);
            }
        }
    }

    static function vc_column_text(&$element_data, &$data, $key) {
        if(empty($element_data['editor']) and !empty($element_data['elements']) and !empty($element_data['elements'][0])) {
            $element_data = $element_data['elements'][0];

            $element_type = (!empty($element_data['origin'])) ? $element_data['origin'] : '';

            /*We have shortcode inside*/
            if($element_type === 'booked-calendar') {
                $element_data['widgetType'] = 'shortcode';
                $element_data['settings']['shortcode'] = "[booked-calendar]";
            }


        }

    }

    static function vc_tta_accordion(&$element_data) {

        $element_data['settings']['tabs'] = array();

        if(!empty($element_data['elements'])) {
            foreach($element_data['elements'] as $section) {

                /*Check if we have section*/
                if($section['widgetType'] !== 'vc_tta_section' and empty($section['settings']) and empty($section['elements'])) continue;

                /*Check if section has elements*/
                if(empty($section['elements'][0]) and $section['elements'][0]['origin'] !== 'vc_column_text') continue;

                /*Check if section has elements and this element is text editor*/
                if(empty($section['elements'][0]['settings']) and $section['elements'][0]['widgetType'] !== 'text-editor') continue;



                $element_data['settings']['tabs'][] = array(
                    'tab_title' => $section['settings']['title'],
                    'tab_content' => $section['elements'][0]['settings']['editor'],
                    '_id' => CEW_Patch::generate_id()
                );
            }
        }

        unset($element_data['elements']);
    }

    static function vc_video(&$data) {

        if(!empty($data['settings'])) {

            if (!empty($data['settings']['link'])) $data['settings']['youtube_url'] = $data['settings']['link'];

            if (!empty($data['settings']['image'])) {
                CEW_Patch_Widget_Settings_Parser::attach_image($data['settings']['image'], 'image', $data['settings']);
                if (!empty($data['settings']['image'])) {
                    $data['settings']['image_overlay'] = $data['settings']['image'];
                    $data['settings']['show_image_overlay'] = 'yes';
                    $data['settings']['lightbox'] = 'yes';
                    $data['settings']['autoplay'] = 'yes';
                    $data['settings']['mute'] = 'yes';
                }
            }

            if(!empty($data['settings']['height_size'])) {
                $data['settings']['image_overlay_size'] = 'custom';
                $data['settings']['image_overlay_custom_dimension'] = array(
                    'width' => '',
                    'height' => $data['settings']['height_size']
                );
            }

        }
    }

    static function vc_progress_bar(&$element_data, &$data, $key) {

        if(!empty($element_data['settings']) and !empty($element_data['settings']['data_values'])) {
            $settings = $element_data['settings'];
            $data_values = $settings['data_values'];
            unset($element_data['settings']['data_values']);

            $last_value = $data_values[count($data_values) - 1];

            $unit = (!empty($settings['units'])) ? $settings['units'] : '';

            $element_data['settings']['title'] = '';

            $element_data['settings']['percent'] = array(
                'unit' => $unit,
                'size' => $last_value['value']
            );

            if(!empty($last_value['label'])) $element_data['settings']['inner_text'] = $last_value['label'];
            if(!empty($last_value['customtxtcolor'])) $element_data['settings']['customtxtcolor'] = $last_value['customtxtcolor'];
            if(!empty($last_value['customcolor'])) $element_data['settings']['customcolor'] = $last_value['customcolor'];

            array_pop($data_values);

            foreach($data_values as $data_value) {
                if(empty($data_value['value'])) continue;

                $element = array(
                    'origin' => 'vc_progress_bar',
                    'id' => CEW_Patch::generate_id(),
                    'elType' => 'widget',
                    'widgetType' => 'progress',
                    'settings' => array(
                        'title' => '',
                        'percent' => array(
                            'unit' => $unit,
                            'size' => $data_value['value'],
                        )
                    ),
                );

                if(!empty($data_value['label'])) $element['settings']['inner_text'] = $data_value['label'];
                if(!empty($data_value['customtxtcolor'])) $element['settings']['customtxtcolor'] = $data_value['customtxtcolor'];
                if(!empty($data_value['customcolor'])) $element['settings']['customcolor'] = $data_value['customcolor'];

                array_splice( $data, $key, 0, "here{$key}" );
                $data[$key] = $element;
                $key += 1;

            }

        }

    }

    static function stm_company_history(&$element_data, &$data, $key) {

        if(!empty($element_data['elements'])) {
            $items_data = $element_data['elements'];
            $items = array();
            unset($element_data['elements']);
            foreach($items_data as $item) {
                if(empty($item['settings'])) continue;
                $item = $item['settings'];
                $item_data = array();
                if(!empty($item['title'])) $item_data['title'] = $item['title'];
                if(!empty($item['year'])) $item_data['year'] = $item['year'];
                if(!empty($item['description'])) $item_data['content'] = $item['description'];

                $items[] = $item_data;
            }

            if(!empty($items)) $element_data['settings']['list'] = $items;
        }

    }

    static function stm_charts(&$element_data, &$data, $key) {
        if(!empty($element_data['settings']) and !empty($element_data['settings']['design']) and $element_data['settings']['design'] === 'circle') {
            $element_data['settings']['design'] = 'pie';
        }
    }

    static function stm_info_box(&$element_data) {

        CEW_Patch_Widget_Settings_Parser::remove_css_prefix($element_data['settings'], array('_margin', '_padding'));
    }

    static function vc_tta_tabs(&$element_data, &$data, $key) {

        if(!empty($element_data['elements'])) {

            $only_text = true;

            $tabs = array();

            foreach ($element_data['elements'] as $section_tab) {
                if(empty($section_tab['elements'])) continue;
                $section_tab_elements = $section_tab['elements'];
                foreach ($section_tab_elements as $element) {
                    if(empty($element['widgetType'])) {
                        $only_text = true;
                        continue;
                    }
                    if($element['widgetType'] !== 'text-editor') $only_text = false;
                    if(!empty($section_tab['settings']) and !empty($section_tab['settings']['title']) and !empty($element['settings']) and !empty($element['settings']['content'])) {
                        $tabs[] = array(
                            'tab_title' =>   $section_tab['settings']['title'],
                            'tab_content' =>   $element['settings']['content'],
                        );
                    }
                }

            }

            /*If we have only text, then we save tabs*/
            if($only_text and !empty($tabs)) {
                $element_data['widgetType'] = 'tabs';
                $element_data['settings']['tabs'] = $tabs;

                unset($element_data['elements']);
            } else {

                /*We have not only text, so we extracting first tab outside*/
                if(!empty($element_data['elements']) and !empty($element_data['elements'][0])) {
                    $first_tab = $element_data['elements'][0];


                    if(!empty($first_tab['elements'])) {
                        $tab_content = $first_tab['elements'];

                        $element_data = $tab_content[0];

                        array_shift($tab_content);

                        foreach ($tab_content as $row) {
                            /*We can extract only section with content*/
                            if($row['elType'] !== 'section') continue;

                            array_splice( $data, $key + 1, 0, "here{$key}" );
                            $data[$key + 1] = $row;
                            $key += 1;

                        }
                    }
                }

            }
        }
    }

    static function stm_event_lesson(&$element_data, &$data, $key) {

        $stm_event_lesson = array();

        if(!empty($element_data['elements'])) {
            $elements = $element_data['elements'];

            foreach ($elements as $event_day) {

                if(empty($event_day['settings']) and empty($event_day['settings']['stm_event_lesson_title'])) continue;

                $event_day_settings = $event_day['settings'];

                $event_elementor = array(
                    '_id' => CEW_Patch::generate_id(),
                    'tab_title' => $event_day_settings['stm_event_lesson_title']
                );

                if(!empty($event_day_settings['datepicker'])) $event_elementor['datepicker'] = $event_day_settings['datepicker'];

                if(!empty($event_day_settings['heading'])) {
                    foreach($event_day_settings['heading'] as $index => $event_day_time) {
                        $time_index = $index + 1;
                        if(!empty($event_day_time['timepicker_start'])) $event_elementor["timepicker_start_{$time_index}"] = $event_day_time['timepicker_start'];
                        if(!empty($event_day_time['timepicker_end'])) $event_elementor["timepicker_end_{$time_index}"] = $event_day_time['timepicker_end'];
                        if(!empty($event_day_time['location'])) $event_elementor["location_{$time_index}"] = $event_day_time['location'];
                        if(!empty($event_day_time['lesson_speakers'])) $event_elementor["lesson_speakers_{$time_index}"] = explode(', ', $event_day_time['lesson_speakers']);
                        if(!empty($event_day_time['description'])) $event_elementor["description_{$time_index}"] = $event_day_time['description'];
                    }
                }


                $stm_event_lesson[] = $event_elementor;
            }
        }

        $element_data['widgetType'] = 'stm_event_lessons';

        $element_data['settings']['stm_event_lesson'] = $stm_event_lesson;

        unset($element_data['elements']);

    }

    static function vc_pie(&$element_data, &$data, $key) {
        $element_data['widgetType'] = 'stm_pie_chart';
        if(!empty($element_data['settings']) and empty($element_data['settings']['value'])) {
            $element_data['settings']['value'] = 50;
        }
    }

}