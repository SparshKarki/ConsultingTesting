<?php

use Elementor\Controls_Manager;
use Elementor\Scheme_Color;

class Elementor_STM_Event_Lessons extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'stm_event_lessons';
    }

    public function get_title()
    {
        return esc_html__('Event Lessons', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-calendar-week';
    }

    public function get_categories()
    {
        return ['theme-elements'];
    }

    public function add_dimensions($selector = '')
    {
        $this->start_controls_section(
            'section_dimensions',
            [
                'label' => __('Dimensions', 'elementor-stm-widgets'),
            ]
        );

        $this->add_responsive_control(
            'margin',
            [
                'label' => __('Margin', 'plugin-domain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'padding',
            [
                'label' => __('Padding', 'plugin-domain'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'section_content',
            [
                'label' => __('Content', 'elementor-stm-widgets'),
            ]
        );

        $this->add_control(
            'stm_date_format',
            [
                'label' => __('Date Format', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'D, F j, Y',
                'options' => array(
                    'D, F j, Y' => date('D, F j, Y'),
                    'F j, Y' => date('F j, Y'),
                    'Y-m-d' => date('Y-m-d'),
                    'm/d/Y' => date('m/d/Y'),
                    'd/m/Y' => date('d/m/Y'),
                ),
            ]
        );

        $this->add_control(
            'stm_time_format',
            [
                'label' => __('Time Format', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'g:i A',
                'options' => array(
                    'g:i A' => date('g:i A'),
                    'g:i a' => date('g:i a'),
                    'H:i' => date('H:i'),
                ),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'tab_title', [
                'label' => __('Title', 'elementor'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Tab Title', 'elementor'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'datepicker', [
                'label' => __('Date', 'elementor'),
                'placeholder' => __('Tab Date', 'elementor'),
                'type' => Controls_Manager::DATE_TIME,
                'picker_options' => array(
                    'enableTime' => false
                )
            ]
        );

        $i = 0;
        while ($i <= 20) {
            $i++;
            $repeater->add_control(
                "timepicker_start_{$i}", [
                    'label' => __("Time Start {$i}", 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::DATE_TIME,
                    'picker_options' => array(
                        'enableTime' => true,
                        'noCalendar' => true,
                        'dateFormat' => "H:i",
                    )
                ]
            );

            $repeater->add_control(
                "timepicker_end_{$i}", [
                    'label' => __("Time End {$i}", 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::DATE_TIME,
                    'picker_options' => array(
                        'enableTime' => true,
                        'noCalendar' => true,
                        'dateFormat' => "H:i",
                    )
                ]
            );

            $repeater->add_control(
                "location_{$i}", [
                    'label' => __("Location {$i}", 'plugin-name'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                ]
            );

            $repeater->add_control(
                "title_{$i}", [
                    'label' => __("Title {$i}", 'plugin-name'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                ]
            );

            $repeater->add_control(
                "description_{$i}", [
                    'label' => __("Description {$i}", 'plugin-name'),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                ]
            );


            $speakers = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'stm_staff'
            ));

            $speakers_data = array();

            if (!empty($speakers)) {
                foreach ($speakers as $speaker) {
                    $speakers_data[$speaker->ID] = $speaker->post_title;
                }
            }
            $repeater->add_control(
                "lesson_speakers_{$i}", [
                    'label' => __('Speakers', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::SELECT2,
                    'multiple' => true,
                    'options' => $speakers_data,
                ]
            );
        }



        $this->add_control(
            'stm_event_lesson',
            [
                'label' => __('Event Agenda', 'elementor'),
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'tab_title' => __('Day 1', 'elementor'),
                    ],
                ],
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ tab_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.events_lessons_box');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_event_lessons';

            consulting_show_template('event_lesson', $settings);
        }
    }

    protected function _content_template()
    {

    }

}