<?php

use Elementor\Controls_Manager;

class Elementor_STM_Steps extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_steps';
    }

    public function get_title()
    {
        return esc_html__( 'Steps', 'consulting-elementor-widgets' );
    }

    public function get_icon()
    {
        return 'fa fa-shoe-prints';
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
        return [ 'owl.carousel', 'steps' ];
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

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
            'stm_step_title', [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Step Title', 'plugin-domain' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'stm_step_content', [
                'label' => __( 'Content', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'show_label' => false,
            ]
        );

        $this->add_control(
            'steps',
            [
                'label' => __( 'Steps', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'stm_step_title' => __( 'Company Title #1', 'plugin-domain' ),
                        'stm_step_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
                    ],
                ],
                'title_field' => '{{{ stm_step_title }}}',
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
            ]
        );

        $this->add_control(
            'link_label',
            [
                'label' => __( 'Link label', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions( '.consulting_elementor_steps' );

    }

    protected function render()
    {
        if( function_exists( 'consulting_show_template' ) ) {
            $settings = $this->get_settings_for_display();

            $settings[ 'css_class' ] = ' consulting_elementor_steps';

            if( !empty( $settings[ 'link' ][ 'url' ] ) ) {
                $link = Consulting_Elementor_Widgets::build_link( $settings );

                $settings[ 'text' ] = '<a href="' . esc_attr( $link[ 'url' ] ) . '" class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-color-theme_style_2"'
                    . ( $link[ 'target' ] ? ' target="' . esc_attr( $link[ 'target' ] ) . '"' : '' )
                    . ( $link[ 'title' ] ? ' title="' . esc_attr( $link[ 'title' ] ) . '"' : '' )
                    . '>' . esc_attr( $link[ 'title' ] ) . '</a>';
            }

            consulting_show_template( 'steps', $settings );
        }
    }

    protected function _content_template()
    {

    }

}