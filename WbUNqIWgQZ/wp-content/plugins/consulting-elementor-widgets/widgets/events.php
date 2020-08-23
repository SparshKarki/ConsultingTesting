<?php

use Elementor\Controls_Manager;

class Elementor_STM_Events extends \Elementor\Widget_Base {

    public function get_name() {
        return 'stm_events';
    }

    public function get_title() {
        return esc_html__('Events', 'consulting-elementor-widgets');
    }

    public function get_icon() {
        return 'fa fa-calendar-alt';
    }

    public function get_categories() {
        return [ 'theme-elements' ];
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

        $event_categories_array = get_terms('stm_event_category');
        $event_categories = array(
            'all' => esc_html__('All', 'consulting')
        );
        if ($event_categories_array && !is_wp_error($event_categories_array)) {
            foreach ($event_categories_array as $cat) {
                $event_categories[$cat->slug] = $cat->name;
            }
        }

        $this->start_controls_section(
            'section_content',
            [
                'label' => __('Content', 'elementor-stm-widgets'),
            ]
        );

        $this->add_control(
            'events_filter',
            [
                'label' => __('Filter Events', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'upcoming',
                'options' => array(
                    'upcoming' => esc_html__('Upcoming Events', 'consulting'),
                    'past' => esc_html__('Past Events', 'consulting'),
                    'all' => esc_html__('All Events', 'consulting')
                ),
            ]
        );

        $this->add_control(
            'category',
            [
                'label' => __('Category', 'plugin-domain'),
                'default' => 'all',
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $event_categories,
            ]
        );

        $this->add_control(
            'event_style',
            [
                'label' => __('Event Style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'grid',
                'options' => array(
                    'grid' => esc_html__('Grid', 'consulting'),
                    'classic' => esc_html__('Classic', 'consulting'),
                    'modern' => esc_html__('Modern', 'consulting'),
                    'widget' => esc_html__('Widget', 'consulting'),
                ),
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => __( 'Number Posts', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'posts_per_row',
            [
                'label' => __('Posts per row', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'condition' => [
                    'event_style' => 'grid'
                ],
                'options' => array(
                    4 => 4,
                    3 => 3,
                    2 => 2,
                    1 => 1
                ),
            ]
        );

        $this->add_control(
            'img_size',
            [
                'label' => __( 'Image size', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'event_style' => array('grid', 'classic')
                ],
            ]
        );

        $this->add_control(
            'pagination_enable',
            [
                'label' => __( 'Show Pagination', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'your-plugin' ),
                'label_off' => __( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'event_style' => array('grid', 'classic')
                ],
            ]
        );

        $this->add_control(
            'load_more_enable',
            [
                'label' => __( 'Show Load More Button', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'your-plugin' ),
                'label_off' => __( 'Hide', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'event_style' => 'modern'
                ],
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.stm_events_grid');

    }

    protected function render() {
        if(function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_events';

            consulting_show_template('events', $settings);

        }
    }

    protected function _content_template() {

    }

}