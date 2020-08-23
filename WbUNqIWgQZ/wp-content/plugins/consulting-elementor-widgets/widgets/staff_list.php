<?php

use Elementor\Controls_Manager;

class Elementor_STM_Staff_List extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_staff_list';
    }

    public function get_title()
    {
        return esc_html__('Staff List', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-users';
    }

    public function get_categories()
    {
        return ['theme-elements'];
    }

    public function get_script_depends() {
        return [ 'slick' ];
    }

    public function get_style_depends() {
        return [ 'slick' ];
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

        $staff_categories_array = get_terms('stm_staff_category');
        $staff_categories = array(
            esc_html__('All', 'consulting') => 'all'
        );
        if ($staff_categories_array && !is_wp_error($staff_categories_array)) {
            foreach ($staff_categories_array as $cat) {
                $staff_categories[$cat->name] = $cat->slug;
            }
        }

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'category',
            [
                'label' => __( 'Category', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip($staff_categories),
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __( 'Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('List', 'consulting') => 'list',
                    esc_html__('Grid', 'consulting') => 'grid',
                    esc_html__('Carousel', 'consulting') => 'carousel',
                    esc_html__('List two columns', 'consulting') => 'list_2'
                )),
            ]
        );

        $this->add_control(
            'grid_view',
            [
                'label' => __( 'Grid View', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Default', 'consulting') => 'default',
                    esc_html__('Short', 'consulting') => 'short',
                    esc_html__('With social icons', 'consulting') => 'social_icons',
                    esc_html__('Minimal', 'consulting') => 'minimal'
                )),
                'condition' => [
                    'style' => 'grid'
                ]
            ]
        );

        $this->add_control(
            'image_style',
            [
                'label' => __( 'Image Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Default', 'consulting') => 'img_default',
                    esc_html__('Square', 'consulting') => 'img_square',
                    esc_html__('Rounded', 'consulting') => 'img_rounded',
                    esc_html__('Circular', 'consulting') => 'img_circular',
                )),
            ]
        );

        $this->add_control(
            'per_row',
            [
                'label' => __( 'Staff Per Row', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array(
                    2 => 2,
                    3 => 3,
                    4 => 4,
                ),
                'condition' => [
                    'style' => 'grid'
                ]
            ]
        );

        $this->add_control(
            'count',
            [
                'label' => __( 'Count', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'slides_to_show',
            [
                'label' => __( 'Staff Per Row', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array(
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5
                ),
                'condition' => [
                    'style' => 'carousel'
                ]
            ]
        );

        $this->add_control(
            'carousel_arrows',
            [
                'label' => __( 'Carousel - Show Arrows', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => [
                    'style' => 'carousel'
                ]
            ]
        );

        $this->add_control(
            'show_custom_link',
            [
                'label' => __( 'Custom link in list', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => [
                    'grid_view' => 'short'
                ]
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'condition' => [
                    'show_custom_link' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'link_text',
            [
                'label' => __( 'Subtitle', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'show_custom_link' => 'yes'
                ]
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_staff_list');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_staff_list';

            if(!empty($settings['link']['url'])) {
                $settings['link'] = Consulting_Elementor_Widgets::build_link($settings);
            }

            consulting_show_template('staff_list', $settings);

        }
    }

    protected function _content_template()
    {

    }

}