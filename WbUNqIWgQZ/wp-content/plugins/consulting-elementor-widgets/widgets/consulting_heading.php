<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Controls_Stack;
use Elementor\Plugin;

class Elementor_VC_Custom_Heading extends \Elementor\Widget_Base {

    public function get_name() {
        return 'vc_custom_heading';
    }

    public function get_title() {
        return esc_html__('Consulting Heading', 'consulting-elementor-widgets');
    }

    public function get_icon() {
        return 'fa fa-font';
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

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );

        $this->add_control(
            'icon_size',
            [
                'label' => __( 'Icon size (px)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'icon_pos',
            [
                'label' => __( 'Icon - Position', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Left', 'consulting') => '',
                    esc_html__('Right', 'consulting') => 'right',
                    esc_html__('Top', 'consulting') => 'top',
                    esc_html__('Bottom', 'consulting') => 'bottom'
                )),
            ]
        );

        $this->add_control(
            'icon_pos_right',
            [
                'label' => __( 'Icon - right position', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Right default', 'consulting') => '',
                    esc_html__('Right after the text', 'consulting') => 'right_text',
                )),
                'condition' => [
                    'icon_pos' => 'right'
                ]
            ]
        );

        $this->add_control(
            'icon_pos_top',
            [
                'label' => __( 'Icon - top position', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Top and center', 'consulting') => 'top_center',
                    esc_html__('Top and right', 'consulting') => 'top_right',
                    esc_html__('Top and left', 'consulting') => 'top_left',
                )),
                'condition' => [
                    'icon_pos' => 'top'
                ]
            ]
        );

        $this->add_control(
            'icon_pos_bottom',
            [
                'label' => __( 'Icon - bottom position', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Bottom and center', 'consulting') => 'bottom_center',
                    esc_html__('Bottom and right', 'consulting') => 'bottom_right',
                    esc_html__('Bottom and left', 'consulting') => 'bottom_left',
                )),
                'condition' => [
                    'icon_pos' => 'bottom'
                ]
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __( 'Subtitle', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 5,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label' => __( 'Subtitle Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
            ]
        );

        $this->add_control(
            'stripe_pos',
            [
                'label' => __( 'Stripe Position', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Bottom', 'consulting') => 'bottom',
                    esc_html__('Between Title and Subtitle', 'consulting') => 'between',
                    esc_html__('Top and Bottom', 'consulting') => 'top_bottom',
                    esc_html__('Hide', 'consulting') => 'hide'
                )),
            ]
        );

        $this->add_control(
            'stm_title_font_weight',
            [
                'label' => __( 'Font weight', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Select', 'consulting') => '',
                    esc_html__('Thin', 'consulting') => 100,
                    esc_html__('Light', 'consulting') => 300,
                    esc_html__('Regular', 'consulting') => 400,
                    esc_html__('Medium', 'consulting') => 500,
                    esc_html__('Semi-bold', 'consulting') => 600,
                    esc_html__('Bold', 'consulting') => 700,
                    esc_html__('Black', 'consulting') => 900
                )),
            ]
        );

        /*COMPOSER SETTINGS*/
        $this->add_control(
            'source',
            [
                'label' => __( 'Source', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => array_flip(array(
                    esc_html__( 'Custom text', 'js_composer' ) => '',
                    esc_html__( 'Post or Page Title', 'js_composer' ) => 'post_title',
                )),
                'description' => esc_html__( 'Select text source.', 'js_composer' ),
            ]
        );

        $this->add_control(
            'text',
            [
                'label' => __( 'Text', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 5,
                'description' => esc_html__( 'Note: If you are using non-latin characters be sure to activate them under Settings/WPBakery Page Builder/General Settings.', 'js_composer' ),
                'condition' => [
                    'source' => ''
                ]
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'URL (Link)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
            ]
        );

        Consulting_Elementor_Widgets::add_font_settings($this, 'font_container', array(), '.consulting-custom-title');

        $this->add_control(
            'el_id',
            [
                'label' => __( 'Element ID', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => sprintf( esc_html__( 'Enter element ID (Note: make sure it is unique and valid according to %sw3c specification%s).', 'js_composer' ), '<a href="https://www.w3schools.com/tags/att_global_id.asp" target="_blank">', '</a>' ),
            ]
        );

        $this->add_control(
            'el_class',
            [
                'label' => __( 'Extra class name', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.vc_custom_heading');

    }

    protected function render() {
        if(function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = " vc_custom_heading {$settings['el_class']} consulting_heading_font ";

            $settings['use_theme_fonts'] = 'yes';

            $settings['font_container_data'] = array();

            $settings['font_container_data']['values'] = Consulting_Elementor_Widgets::get_font_settings($settings, 'font_container');

            $settings['icon'] = $settings['icon']['value'];

            $settings['link'] = Consulting_Elementor_Widgets::build_link($settings);

            /*Styles*/
            $styles_data =  Consulting_Elementor_Widgets::get_font_settings($settings, 'font_container');
            $settings['styles'] = array();
            if(!empty($styles_data)) {
                if(!empty($styles_data['font_size'])) $settings['styles'][] = "font-size: {$styles_data['font_size']}px";
                if(!empty($styles_data['color'])) $settings['styles'][] = "color: {$styles_data['color']}";
                if(!empty($styles_data['text_align'])) $settings['styles'][] = "text-align: {$styles_data['text_align']}";
                if(!empty($styles_data['line_height'])) $settings['styles'][] = "line-height: {$styles_data['line_height']}px";
            }

            $settings['text'] = strip_tags(wpautop($settings['text']), '<br> <mark>');

            consulting_show_template('custom_heading', $settings);

        }
    }

    protected function _content_template() {

    }

}