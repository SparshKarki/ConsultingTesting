<?php

use Elementor\Controls_Manager;

class Elementor_STM_Stocks_Chart extends \Elementor\Widget_Base {

    public function get_name() {
        return 'stm_stocks_chart';
    }

    public function get_title() {
        return esc_html__('Stocks Chart', 'consulting-elementor-widgets');
    }

    public function get_icon() {
        return 'fa fa-chart-bar';
    }

    public function get_categories() {
        return [ 'theme-elements' ];
    }

    public function get_script_depends() {
        return [ 'stocks-charts', 'charts-js' ];
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

        $stock_index_data = consulting_get_stocks_indexes_symbols();

        $stock_indexes = array();

        foreach($stock_index_data as $stock) {
            $stock_indexes[$stock['value']] = $stock['label'];
        }

        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Content', 'elementor-stm-widgets' ),
            ]
        );

        $this->add_control(
            'stm_stocks_chart',
            [
                'label' => __( 'Stocks chart', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $stock_indexes
            ]
        );

        $this->add_control(
            'chart_fill_color',
            [
                'label' => __( 'Fill Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );

        $this->add_control(
            'chart_point_color',
            [
                'label' => __( 'Point Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );

        $this->add_control(
            'second_symbol',
            [
                'label' => __( 'Add second symbol?', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'stm_stocks_chart2',
            [
                'label' => __( 'Stocks chart 2', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $stock_indexes,
                'condition' => array(
                    'second_symbol' => 'yes'
                )
            ]
        );

        $this->add_control(
            'chart_fill_color2',
            [
                'label' => __( 'Fill Color 2', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => array(
                    'second_symbol' => 'yes'
                )
            ]
        );

        $this->add_control(
            'chart_point_color2',
            [
                'label' => __( 'Point Color 2', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => array(
                    'second_symbol' => 'yes'
                )
            ]
        );

        $this->add_control(
            'chart_range',
            [
                'label' => __( 'Set range', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1d',
                'options' => array_flip(array(
                    esc_html__('1 day', 'consulting') => '1d',
                    esc_html__('5 days', 'consulting') => '5d',
                    esc_html__('7 days', 'consulting') => '7d',
                    esc_html__('30 days', 'consulting') => '30d',
                    esc_html__('60 days', 'consulting') => '60d'
                )),
            ]
        );

        $this->add_control(
            'chart_interval',
            [
                'label' => __( 'Set interval', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '1d',
                'options' => array_flip(array(
                    esc_html__('1 min', 'consulting') => '1m',
                    esc_html__('2 min', 'consulting') => '2m',
                    esc_html__('5 min', 'consulting') => '5m',
                    esc_html__('15 min', 'consulting') => '15m',
                    esc_html__('30 min', 'consulting') => '30m',
                    esc_html__('60 min', 'consulting') => '60m',
                    esc_html__('90 min', 'consulting') => '90m',
                    esc_html__('1 day', 'consulting') => '1d',
                    esc_html__('5 days', 'consulting') => '5d',
                    esc_html__('1 week', 'consulting') => '1wk',
                    esc_html__('1 month', 'consulting') => '1mo',
                    esc_html__('30 month', 'consulting') => '30mo'
                )),
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.consulting_stocks_chart');

    }

    protected function render() {
        if(function_exists('consulting_show_template')) {
            $settings = $this->get_settings_for_display();

            consulting_show_template('stocks_chart', $settings);
        }
    }

    protected function _content_template() {

    }

}