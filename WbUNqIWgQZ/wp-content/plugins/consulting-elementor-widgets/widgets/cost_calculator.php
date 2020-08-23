<?php

use Elementor\Controls_Manager;
use Elementor\Scheme_Color;

class Elementor_STM_Cost_Calculator extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_cost_calculator';
    }

    public function get_title()
    {
        return esc_html__('Cost Calculator', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-calculator';
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
            'calculator',
            [
                'label' => __('Select calculator', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => Consulting_Elementor_Widgets::get_post_type(array(
                    'post_type' => 'cost-calc',
                    'post_per_page' => -1
                )),
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __('Widget Style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array(
                    'style_1' => esc_html__('Default style', 'plugin-domain'),
                    'style_2' => esc_html__('Theme style', 'plugin-domain'),
                ),
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.stm_cost_calculator');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {
            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_cost_calculator';

            if(!empty($_GET['action']) && $_GET['action'] === 'elementor') {
                echo wp_kses_post("<div></div>");
            } else {
                consulting_show_template('cost_calculator', $settings);
            }
        }
    }

    protected function _content_template()
    {
        echo wp_kses_post("<div></div>");
    }

}