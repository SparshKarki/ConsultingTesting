<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

class Elementor_STM_Portfolio_Pagination extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_portfolio_pagination';
    }

    public function get_title()
    {
        return esc_html__('Portfolio Post Pagination', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-arrows-alt-h';
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
                'label' => __( 'Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip(array(
                    esc_html__('Style 1', 'consulting') => 'style_1',
                    esc_html__('Style 2', 'consulting') => 'style_2',
                    esc_html__('Style 3', 'consulting') => 'style_3'
                )),
            ]
        );

        $this->add_control(
            'show_button',
            [
                'label' => __( 'Show Button', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'description' => esc_html__('Button for link to the archive page.', 'consulting'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Button link', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'condition' => [
                    'show_button' => 'yes'
                ]
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_portfolio_pagination');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_portfolio_pagination';

            if(!empty($settings['link']['url'])) {
                $settings['link'] = Consulting_Elementor_Widgets::build_link($settings);
            }

            consulting_show_template('portfolio_pagination', $settings);

        }
    }

    protected function _content_template()
    {

    }

}