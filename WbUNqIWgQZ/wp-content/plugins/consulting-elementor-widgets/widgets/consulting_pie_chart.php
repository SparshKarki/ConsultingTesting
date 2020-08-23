<?php

use Elementor\Controls_Manager;

class Elementor_STM_Pie_Chart extends \Elementor\Widget_Base {

    public function get_name() {
        return 'stm_pie_chart';
    }

    public function get_title() {
        return esc_html__('Consulting Pie chart', 'consulting-elementor-widgets');
    }

    public function get_icon() {
        return 'fa fa-chart-pie';
    }

    public function get_categories() {
        return [ 'theme-elements' ];
    }


    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'widget_width',
            [
                'label' => __( 'Width', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'value',
            [
                'label' => __( 'Value', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'label_value',
            [
                'label' => __( 'Value Label', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'units',
            [
                'label' => __( 'Units', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'custom_color',
            [
                'label' => __( 'Custom Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .radial-progress .circle .mask .fill' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        if(function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            consulting_show_template('stm_pie_chart', $settings);

        }
    }

    protected function _content_template() {

    }

}