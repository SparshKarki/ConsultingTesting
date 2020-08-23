<?php

use Elementor\Controls_Manager;

class Elementor_STM_Pricing_Plan extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_pricing_plan';
    }

    public function get_title()
    {
        return esc_html__('Pricing Plan', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-dollar-sign';
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
            'style',
            [
                'label' => __('Style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip(array(
                    esc_html__('Style 1', 'consulting') => 'style_1',
                    esc_html__('Style 2', 'consulting') => 'style_2',
                )),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Plan pattern image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Plan Title', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'price',
            [
                'label' => __( 'Plan price', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'price_affix',
            [
                'label' => __( 'Plan price affix', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'price_suffix',
            [
                'label' => __( 'Plan price suffix', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __( 'Plan subtitle', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'label',
            [
                'label' => __( 'Plan label', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Plan description', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
            ]
        );

        $this->add_control(
            'link_title',
            [
                'label' => __( 'Link Title', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Get now', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link URL', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_pricing_plan');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_pricing_plan';

            $settings['image'] = $settings['image']['id'];
            $settings['link']['title'] = $settings['link_title'];

            consulting_show_template('pricing_plan', $settings);

        }
    }

    protected function _content_template()
    {

    }

}