<?php

use Elementor\Controls_Manager;

class Elementor_STM_Services extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_services';
    }

    public function get_title()
    {
        return esc_html__( 'Services', 'consulting-elementor-widgets' );
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
        return [ 'owl.carousel' ];
    }

    public function get_style_depends()
    {
        return [ 'owl.carousel' ];
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

        $service_category_array = get_terms( 'stm_service_category' );
        $service_category = array(
            esc_html__( 'All', 'consulting' ) => 'all'
        );
        if( $service_category_array && !is_wp_error( $service_category_array ) ) {
            foreach( $service_category_array as $cat ) {
                $service_category[ $cat->name ] = $cat->slug;
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
            'style',
            [
                'label' => __( 'Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip( array(
                    esc_html__( 'Style 1', 'consulting' ) => 'style_1',
                    esc_html__( 'Style 2', 'consulting' ) => 'style_2',
                    esc_html__( 'Style 3', 'consulting' ) => 'style_3',
                    esc_html__( 'Style 4', 'consulting' ) => 'style_4',
                    esc_html__( 'Style 5', 'consulting' ) => 'style_5',
                    esc_html__( 'Style 6', 'consulting' ) => 'style_6',
                    esc_html__( 'Style 7', 'consulting' ) => 'style_7',
                ) ),
            ]
        );


        $this->add_control(
            'posts_per_page',
            [
                'label' => __( 'Number Posts', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 12
            ]
        );

        $this->add_control(
            'posts_per_row',
            [
                'label' => __( 'Posts Per Row', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 4,
                'options' => array(
                    4 => 4,
                    3 => 3,
                    2 => 2,
                    1 => 1
                ),
                'condition' => [
                    'style' => array(
                        'style_1',
                        'style_2',
                        'style_3',
                        'style_4',
                        'style_6',
                    )
                ]
            ]
        );

        $this->add_control(
            'category',
            [
                'label' => __( 'Category', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip( $service_category ),
            ]
        );

        $this->add_control(
            'img_size',
            [
                'label' => __( 'Image size', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use default size.', 'consulting' ),
            ]
        );

        $this->add_control(
            'service_image',
            [
                'label' => __( 'Hide image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'service_cat',
            [
                'label' => __( 'Hide category', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'style' => array(
                        'style_1',
                    )
                ]
            ]
        );

        $this->add_control(
            'service_cat2',
            [
                'label' => __( 'Hide category', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'style' => array(
                        'style_2',
                    )
                ]
            ]
        );

        $this->add_control(
            'service_title',
            [
                'label' => __( 'Hide Title', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'service_excerpt',
            [
                'label' => __( 'Hide Excerpt', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'service_more',
            [
                'label' => __( 'Hide More Button', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => [
                    'style' => array(
                        'style_1',
                    )
                ]
            ]
        );

        /*Colors*/
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );

        $this->add_control(
            'excerpt_color',
            [
                'label' => __( 'Excerpt Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );

        $this->add_control(
            'link_color',
            [
                'label' => __( 'More button Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );

        $this->add_control(
            'category_color',
            [
                'label' => __( 'Category Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions( '.consulting_elementor_services' );

    }

    protected function render()
    {
        if( function_exists( 'consulting_show_template' ) ) {

            $settings = $this->get_settings_for_display();

            $settings[ 'css_class' ] = ' consulting_elementor_services';

            consulting_show_template( 'services', $settings );

        }
    }

    protected function _content_template()
    {

    }

}