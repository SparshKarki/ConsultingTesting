<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

class Elementor_STM_Portfolio extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_portfolio';
    }

    public function get_title()
    {
        return esc_html__( 'Portfolio', 'consulting-elementor-widgets' );
    }

    public function get_icon()
    {
        return 'fa fa-photo-video';
    }

    public function get_categories()
    {
        return [ 'theme-elements' ];
    }

    public function get_script_depends()
    {
        return [ 'imagesloaded', 'isotope', 'packery' ];
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

        $portfolio_categories_array = get_terms( 'stm_portfolio_category' );
        $portfolio_categories = array(
            esc_html__( 'All', 'consulting' ) => 'all'
        );
        if( $portfolio_categories_array && !is_wp_error( $portfolio_categories_array ) ) {
            foreach( $portfolio_categories_array as $cat ) {
                $portfolio_categories[ $cat->name ] = $cat->slug;
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
                'label' => __( 'Сategory', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip( $portfolio_categories ),
            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => __( 'Posts Per page', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 12
            ]
        );

        $this->add_control(
            'load_more_enable',
            [
                'label' => __( 'Show Load More Button', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
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
                    esc_html__( 'Style 2', 'consulting' ) => 'style_2'
                ) ),
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions( '.consulting_elementor_portfolio' );

    }

    protected function render()
    {
        if( function_exists( 'consulting_show_template' ) ) {

            $settings = $this->get_settings_for_display();

            $settings[ 'css_class' ] = ' consulting_elementor_portfolio';

            consulting_show_template( 'portfolio', $settings );

        }
    }

    protected function _content_template()
    {

    }

}