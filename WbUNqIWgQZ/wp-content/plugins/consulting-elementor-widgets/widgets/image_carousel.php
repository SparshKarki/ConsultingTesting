<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

class Elementor_STM_Image_Carousel extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_image_carousel';
    }

    public function get_title()
    {
        return esc_html__( 'Image Carousel', 'consulting-elementor-widgets' );
    }

    public function get_icon()
    {
        return 'fa fa-images';
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

        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Content', 'elementor-stm-widgets' ),
            ]
        );

        $this->add_control(
            'gallery',
            [
                'label' => __( 'Add Images', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'default' => [],
            ]
        );

        $this->add_control(
            'custom_dimension',
            [
                'label' => __( 'Image Dimension', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
                'description' => __( 'Crop the original image size to any custom size. Set custom width or height to keep the original size ratio.', 'plugin-name' ),
                'default' => [
                    'width' => '',
                    'height' => '',
                ],
            ]
        );

        $this->add_control(
            'grayscale',
            [
                'label' => __( 'Enable grayscale', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'h_centered',
            [
                'label' => __( 'Centered Items', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'link', [
                'label' => __( 'Link', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );

        $this->add_control(
            'links',
            [
                'label' => __( 'Links', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ link }}}',
            ]
        );

        $this->add_control(
            'el_class',
            [
                'label' => __( 'Additional class', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_carousel',
            [
                'label' => __( 'Carousel', 'elementor-stm-widgets' ),
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __( 'Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip(
                    array(
                        esc_html__( 'Style 1', 'consulting' ) => 'style_1',
                        esc_html__( 'Style 2', 'consulting' ) => 'style_2'
                    )
                ),
            ]
        );

        $this->add_control(
            'autoplay',
            [
                'label' => __( 'Slider autoplay', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'timeout',
            [
                'label' => __( 'Autoplay Timeout', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 5000,
                'condition' => [
                    'autoplay' => array( 'yes' )
                ],
            ]
        );

        $this->add_control(
            'loop',
            [
                'label' => __( 'Slider loop', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'nav',
            [
                'label' => __( 'Slider navigation', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => [
                    'style' => array( 'style_2' )
                ],
            ]
        );

        $this->add_control(
            'smart_speed',
            [
                'label' => __( 'Smart Speed', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 250,
            ]
        );

        Consulting_Elementor_Widgets::add_text_field(
            $this,
            'items',
            esc_html__( 'Items', 'plugin-domain' ),
            6
        );

        Consulting_Elementor_Widgets::add_text_field(
            $this,
            'items_small_desktop',
            esc_html__( 'Items (Small Desktop)', 'plugin-domain' ),
            5
        );

        Consulting_Elementor_Widgets::add_text_field(
            $this,
            'items_tablet',
            esc_html__( 'Items (Tablet)', 'plugin-domain' ),
            4
        );

        Consulting_Elementor_Widgets::add_text_field(
            $this,
            'items_mobile',
            esc_html__( 'Items (Mobile)', 'plugin-domain' ),
            1
        );


        $this->end_controls_section();

        $this->add_dimensions( '.consulting_elementor_image_carousel' );

    }

    protected function render()
    {
        if( function_exists( 'consulting_show_template' ) ) {
            $settings = $this->get_settings_for_display();

            $settings[ 'css_class' ] = ' consulting_elementor_image_carousel';

            if( !empty( $settings[ 'gallery' ] ) ) {

                $settings[ 'images' ] = implode( ',', wp_list_pluck( $settings[ 'gallery' ], 'id' ) );

                if( !empty( $settings[ 'custom_dimension' ] ) and !empty( $settings[ 'custom_dimension' ][ 'width' ] ) and !empty( $settings[ 'custom_dimension' ][ 'height' ] ) ) {
                    $settings[ 'img_size' ] = "{$settings['custom_dimension']['width']}x{$settings['custom_dimension']['height']}";
                }

                if( empty( $settings[ 'img_size' ] ) ) $settings[ 'img_size' ] = "thumbnail";

                $settings[ 'custom_links' ] = wp_list_pluck( $settings[ 'links' ], 'link' );

                consulting_show_template( 'image_carousel', $settings );
            }
        }
    }

    protected function _content_template()
    {

    }

}