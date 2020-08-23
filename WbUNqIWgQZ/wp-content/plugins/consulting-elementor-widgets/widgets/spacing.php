<?php

use Elementor\Controls_Manager;

class Elementor_STM_Spacing extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_spacing';
    }

    public function get_title()
    {
        return esc_html__('Spacing', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-arrows-alt-v';
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

        $stm_sidebars_array = get_posts(array('post_type' => 'stm_vc_sidebar', 'posts_per_page' => -1));
        $stm_sidebars = array(esc_html__('Select', 'consulting') => 0);
        if ($stm_sidebars_array && !is_wp_error($stm_sidebars_array)) {
            foreach ($stm_sidebars_array as $val) {
                $stm_sidebars[get_the_title($val)] = $val->ID;
            }
        }

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'plugin-name'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'lg_spacing',
            [
                'label' => __( 'Large Screen (px)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'md_spacing',
            [
                'label' => __( 'Medium Screen (px)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'sm_spacing',
            [
                'label' => __( 'Tablet Screen (px)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'xs_spacing',
            [
                'label' => __( 'Mobile Screen (px)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_spacing');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_spacing';

            consulting_show_template('spacing', $settings);

        }
    }

    protected function _content_template()
    {

    }

}