<?php

use Elementor\Controls_Manager;

class Elementor_STM_Services_Tabs extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_services_tabs';
    }

    public function get_title()
    {
        return esc_html__( 'Services Tabs', 'consulting-elementor-widgets' );
    }

    public function get_icon()
    {
        return 'fa fa-grip-vertical';
    }

    public function get_categories()
    {
        return [ 'theme-elements' ];
    }

    public function get_script_depends()
    {
        return [ 'jquery-effects-core', 'jquery-ui-tabs' ];
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
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'items_count',
            [
                'label' => __( 'Items Count', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => __( 'The number of items you want to see on the screen.', 'consulting' )
            ]
        );

        $this->add_control(
            'el_class',
            [
                'label' => __( 'Extra class name', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'consulting' )
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions( '.consulting_elementor_services_tabs' );

    }

    protected function render()
    {
        if( function_exists( 'consulting_show_template' ) ) {

            $settings = $this->get_settings_for_display();

            $settings[ 'css_class' ] = ' consulting_elementor_services_tabs';

            consulting_show_template( 'services_tabs', $settings );

        }
    }

    protected function _content_template()
    {

    }

}