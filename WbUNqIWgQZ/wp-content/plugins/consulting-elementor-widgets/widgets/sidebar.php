<?php

use Elementor\Controls_Manager;

class Elementor_STM_Sidebar extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_sidebar';
    }

    public function get_title()
    {
        return esc_html__('Sidebar', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-border-none';
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
            'sidebar',
            [
                'label' => __( 'Sidebar', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip($stm_sidebars),
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_sidebar');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_sidebar';

            consulting_show_template('sidebar', $settings);

        }
    }

    protected function _content_template()
    {

    }

}