<?php

use Elementor\Controls_Manager;
use Elementor\Scheme_Color;

class Elementor_STM_Countdown extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'stm_countdown';
    }

    public function get_title()
    {
        return esc_html__( 'Countdown', 'consulting-elementor-widgets' );
    }

    public function get_icon()
    {
        return 'fa fa-stopwatch';
    }

    public function get_categories()
    {
        return [ 'theme-elements' ];
    }

    public function get_script_depends()
    {
        return [ 'countdown' ];
    }


    public function add_dimensions( $selector = '' )
    {
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

    protected function _register_controls()
    {

        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Content', 'elementor-stm-widgets' ),
            ]
        );

        $this->add_control(
            'countdown_description',
            [
                'label' => __( 'Description', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 5,
            ]
        );

        $this->add_control(
            'download_link',
            [
                'label' => __( 'Download link', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );


        $this->add_control(
            'countdown',
            [
                'label' => __( 'Count to date', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __( 'Widget Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array(
                    'style_1' => esc_html__( 'Style 1', 'plugin-domain' ),
                    'style_2' => esc_html__( 'Style 2', 'plugin-domain' ),
                ),
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions( '.countdown_box' );

    }

    protected function render()
    {
        if( function_exists( 'consulting_show_template' ) ) {

            $settings = $this->get_settings_for_display();

            $settings[ 'css_class' ] = ' consulting_elementor_countdown ' . $settings[ 'style' ];

            consulting_show_template( 'countdown', $settings );
        }
    }

    protected function _content_template()
    {

    }

}