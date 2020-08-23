<?php

use Elementor\Controls_Manager;

class Elementor_STM_Events_Information extends \Elementor\Widget_Base {

    public function get_name() {
        return 'stm_events_information';
    }

    public function get_title() {
        return esc_html__('Event Information', 'consulting-elementor-widgets');
    }

    public function get_icon() {
        return 'fa fa-calendar-alt';
    }

    public function get_categories() {
        return [ 'theme-elements' ];
    }

    public function add_dimensions($selector = '') {
        $this->start_controls_section(
            'section_dimensions',
            [
                'label' => __( 'Dimensions', 'elementor-stm-widgets' ),
            ]
        );

        $this->add_responsive_control(
            'margin',
            [
                'label' => __( 'Margin', 'plugin-domain' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'padding',
            [
                'label' => __( 'Padding', 'plugin-domain' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    "{{WRAPPER}} {$selector}" => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function _register_controls() {

        $this->add_dimensions('.consulting_event_information');

    }

    protected function render() {
        if(function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' elementor-consulting-event-information';

            consulting_show_template('events_information', $settings);

        }
    }

    protected function _content_template() {

    }

}