<?php

use Elementor\Controls_Manager;

class Elementor_STM_Works extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_works';
    }

    public function get_title()
    {
        return esc_html__( 'Works', 'consulting-elementor-widgets' );
    }

    public function get_icon()
    {
        return 'fa fa-briefcase';
    }

    public function get_categories()
    {
        return [ 'theme-elements' ];
    }

    public function get_script_depends()
    {
        return [ 'imagesloaded', 'isotope', 'owl.carousel' ];
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

        $works_categories = get_terms( 'stm_works_category' );
        $works_categories_arr = array();

        if( !empty( $works_categories ) && !is_wp_error( $works_categories ) ) {
            foreach( $works_categories as $works_category ) {
                $works_categories_arr[ $works_category->slug ] = $works_category->name;
            }
        }

        $this->start_controls_section(
            'section_content',
            [
                'label' => __( 'Content', 'elementor-stm-widgets' ),
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __( 'Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'grid',
                'options' => array_flip( array(
                    esc_html__( 'Grid', 'consulting' ) => 'grid',
                    esc_html__( 'Grid with filter', 'consulting' ) => 'grid_with_filter',
                    esc_html__( 'Grid with carousel', 'consulting' ) => 'grid_with_carousel',
                    esc_html__( 'Masonry', 'consulting' ) => 'masonry',
                    esc_html__( 'Tiles', 'consulting' ) => 'tiles',
                ) ),
            ]
        );

        $this->add_control(
            'grid_style',
            [
                'label' => __( 'View Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'style_1',
                'options' => array_flip( array(
                    esc_html__( 'Style 1', 'consulting' ) => 'style_1',
                    esc_html__( 'Style 2', 'consulting' ) => 'style_2',
                    esc_html__( 'Style 3', 'consulting' ) => 'style_3'
                ) ),
                'condition' => array(
                    'style' => 'grid'
                )
            ]
        );

        $this->add_control(
            'grid_with_filter_style',
            [
                'label' => __( 'View Style', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'style_1',
                'options' => array_flip( array(
                    esc_html__( 'Style 1', 'consulting' ) => 'style_1',
                    esc_html__( 'Style 2', 'consulting' ) => 'style_2',
                ) ),
                'condition' => array(
                    'style' => 'grid_with_filter'
                )
            ]
        );

        $this->add_control(
            'works_categories',
            [
                'label' => __( 'Include Category', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'description' => __( 'Add Category. If not added show all category', 'consulting' ),
                'options' => $works_categories_arr,
                'condition' => array(
                    'style' => 'grid_with_filter'
                )
            ]
        );

        $this->add_control(
            'works_count',
            [
                'label' => __( 'Count', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'The number of items you want to see on the screen.', 'consulting' ),
                'condition' => array(
                    'style' => array( 'grid', 'masonry' )
                )
            ]
        );

        $this->add_control(
            'works_count_visible',
            [
                'label' => __( 'Count', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'The number of items you want to see on the screen.', 'consulting' ),
                'condition' => array(
                    'style' => array( 'grid_with_filter' )
                )
            ]
        );

        $this->add_control(
            'items',
            [
                'label' => __( 'Items', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'The number of items you want to see on the screen.', 'consulting' ),
                'default' => 4,
                'condition' => array(
                    'style' => array( 'grid_with_carousel' )
                )
            ]
        );

        $this->add_control(
            'items_small_desktop',
            [
                'label' => __( 'Items (Small Desktop)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 4,
                'description' => esc_html__( 'Number of items the carousel will display. Default: at <980px - 4 items.', 'consulting' ),
                'condition' => array(
                    'style' => array( 'grid_with_carousel' )
                )
            ]
        );

        $this->add_control(
            'items_tablet',
            [
                'label' => __( 'Items (Tablet)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 3,
                'description' => esc_html__( 'Number of items the carousel will display. Default: at <768px - 3 items.', 'consulting' ),
                'condition' => array(
                    'style' => array( 'grid_with_carousel' )
                )
            ]
        );

        $this->add_control(
            'items_land',
            [
                'label' => __( 'Items (Tablet)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 2,
                'description' => esc_html__( 'Number of items the carousel will display. Default: at <480px - 2 items.', 'consulting' ),
                'condition' => array(
                    'style' => array( 'grid_with_carousel' )
                )
            ]
        );

        $this->add_control(
            'items_mobile',
            [
                'label' => __( 'Items (Mobile)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 1,
                'description' => esc_html__( 'Number of items the carousel will display. Default: at <479px - 1 item.', 'consulting' ),
                'condition' => array(
                    'style' => array( 'grid_with_carousel' )
                )
            ]
        );

        $this->add_control(
            'loop',
            [
                'label' => __( 'Slider Loop', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'description' => esc_html__( 'Enable slider loop mode.', 'consulting' ),
                'condition' => array(
                    'style' => 'grid_with_carousel'
                )
            ]
        );

        $this->add_control(
            'autoplay',
            [
                'label' => __( 'Carousel Autoplay', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'description' => esc_html__( 'Enable autoplay mode.', 'consulting' ),
                'condition' => array(
                    'style' => 'grid_with_carousel'
                )
            ]
        );

        $this->add_control(
            'timeout',
            [
                'label' => __( 'Autoplay Timeout', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 5000,
                'description' => esc_html__( 'Autoplay interval timeout (in ms).', 'consulting' ),
                'condition' => array(
                    'autoplay' => 'yes'
                )
            ]
        );

        $this->add_control(
            'dots',
            [
                'label' => __( 'Slider dots', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => array(
                    'style' => 'grid_with_carousel'
                )
            ]
        );

        $this->add_control(
            'nav',
            [
                'label' => __( 'Slider arrows', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => array(
                    'style' => 'grid_with_carousel'
                )
            ]
        );

        $this->add_control(
            'smart_speed',
            [
                'label' => __( 'Smart Speed', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 250,
                'condition' => array(
                    'style' => 'grid_with_carousel'
                )
            ]
        );

        $this->add_control(
            'cols',
            [
                'label' => __( 'Cols', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => array(
                    4 => 4,
                    3 => 3,
                    2 => 2,
                    1 => 1,
                ),
                'condition' => array(
                    'style' => array( 'grid', 'grid_with_filter' )
                )
            ]
        );

        $this->add_control(
            'img_size',
            [
                'label' => __( 'Image size', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use default size.', 'consulting' ),
                'condition' => array(
                    'style' => array( 'grid', 'grid_with_filter' )
                )
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions( '.consulting_elementor_works' );

    }

    protected function render()
    {
        if( function_exists( 'consulting_show_template' ) ) {
            $settings = $this->get_settings_for_display();

            $settings[ 'css_class' ] = ' consulting_elementor_works';

            consulting_show_template( 'works', $settings );
        }
    }

    protected function _content_template()
    {

    }

}