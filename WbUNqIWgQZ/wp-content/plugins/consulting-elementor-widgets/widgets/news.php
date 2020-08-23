<?php

use Elementor\Controls_Manager;

class Elementor_STM_News extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_news';
    }

    public function get_title()
    {
        return esc_html__('Posts', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-stream';
    }

    public function get_categories()
    {
        return ['theme-elements'];
    }

    public function get_script_depends() {
        return [ 'isotope', 'packery', 'imagesloaded' ];
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
        $consulting_layout = get_option('consulting_layout', 'layout_1');
        Consulting_Elementor_Widgets::add_query_builder($this, 'qb');

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Additional params', 'plugin-name'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'view_style',
            [
                'label' => __('Style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip(array(
                    esc_html__('Style 1', 'consulting') => 'style_1',
                    esc_html__('Style 2', 'consulting') => 'style_2',
                    esc_html__('Style 3', 'consulting') => 'style_3',
                    esc_html__('Style 4', 'consulting') => 'style_4',
                    esc_html__('Style 5', 'consulting') => 'style_5',
                    esc_html__('Style 6', 'consulting') => 'style_6'
                )),
            ]
        );

        $this->add_control(
            'posts_per_row',
            [
                'label' => __('Posts per row', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 4,
                'options' => array(
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4
                ),
                'condition' => [
                    'view_style' => array('style_1', 'style_2')
                ]
            ]
        );

        $this->add_control(
            'disable_preview_image',
            [
                'label' => __( 'Disable Preview Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'disable',
            ]
        );

        $this->add_control(
            'img_size',
            [
                'label' => __( 'Image size', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__('Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use default size.', 'consulting')
            ]
        );

        if($consulting_layout === 'layout_16' || $consulting_layout === 'layout_17'){
            $this->add_control(
                'style',
                [
                    'label' => __('Style', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 4,
                    'options' => array(
                        1 => 1,
                        2 => 2,
                    ),
                ]
            );
        }

        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_posts');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {
            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_posts';

            if(!empty($settings['posts_per_row'])) $settings['qb_query_builder_posts_per_page'] = $settings['posts_per_row'];

            $settings['query'] = Consulting_Elementor_Widgets::get_query_builder($settings, 'qb');

            consulting_show_template('news', $settings);
        }
    }

    protected function _content_template()
    {

    }

}