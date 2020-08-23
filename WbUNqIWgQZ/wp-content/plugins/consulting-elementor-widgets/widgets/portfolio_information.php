<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

class Elementor_STM_Portfolio_Information extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_portfolio_information';
    }

    public function get_title()
    {
        return esc_html__('Portfolio Information', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-info-circle';
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
            'portfolio_client',
            [
                'label' => __( 'Client', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'portfolio_date',
            [
                'label' => __( 'Date', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'portfolio_services',
            [
                'label' => __( 'Services', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
            ]
        );

        $this->add_control(
            'portfolio_role',
            [
                'label' => __( 'Role', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'facebook',
            [
                'label' => __( 'Facebook', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'twitter',
            [
                'label' => __( 'Twitter', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'instagram',
            [
                'label' => __( 'Instagram', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'google_plus',
            [
                'label' => __( 'Google+', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'youtube',
            [
                'label' => __( 'Youtube', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
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
                    esc_html__('Style 2', 'consulting') => 'style_2'
                )),
            ]
        );

        $this->add_control(
            'posts_per_row',
            [
                'label' => __( 'Posts Per Row', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array(
                    4 => 4,
                    3 => 3,
                    2 => 2,
                    1 => 1
                ),
            ]
        );

        $this->add_control(
            'alignment',
            [
                'label' => __( 'Alignment', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip(array(
                    esc_html__('Left', 'consulting') => 'left',
                    esc_html__('Right', 'consulting') => 'right',
                    esc_html__('Center', 'consulting') => 'center'
                )),
            ]
        );

        $this->add_control(
            'show_title_icons',
            [
                'label' => __( 'Show Title Icons', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',

            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_portfolio_information');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_portfolio_information';

            if(!empty($settings['link']['url'])) {
                $settings['link'] = Consulting_Elementor_Widgets::build_link($settings);
            }

            consulting_show_template('portfolio_information', $settings);

        }
    }

    protected function _content_template()
    {

    }

}