<?php

use Elementor\Controls_Manager;

class Elementor_STM_Quote extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_quote';
    }

    public function get_title()
    {
        return esc_html__('Quote', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-quote-right';
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
            'content_section',
            [
                'label' => __('Content', 'plugin-name'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'quote',
            [
                'label' => __( 'Quote', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 5,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Author Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'author_name',
            [
                'label' => __( 'Author name', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'author_status',
            [
                'label' => __( 'Author status', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'box_color',
            [
                'label' => __('Box Color', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'base',
                'options' => array_flip(array(
                    esc_html__('Base', 'consulting') => 'base',
                    esc_html__('Secondary', 'consulting') => 'secondary',
                    esc_html__('Third', 'consulting') => 'third',
                    esc_html__('Custom', 'consulting') => 'custom'
                )),
            ]
        );

        $this->add_control(
            'box_color_custom',
            [
                'label' => __( 'Title - Color Custom', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'box_color' => 'custom'
                ]
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_quote');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_quote';

            $settings['image'] = $settings['image']['id'];

            consulting_show_template('quote', $settings);

        }
    }

    protected function _content_template()
    {

    }

}