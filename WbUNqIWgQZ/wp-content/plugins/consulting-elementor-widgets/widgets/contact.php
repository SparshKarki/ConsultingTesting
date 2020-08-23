<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;

class Elementor_STM_Contact extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_contact';
    }

    public function get_title()
    {
        return esc_html__('Contact Info', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-user';
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

        $this->start_controls_section(
            'section_content',
            [
                'label' => __('Content', 'elementor-stm-widgets'),
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __('Widget Style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1' => __('Style 1', 'plugin-domain'),
                    'style_2' => __('Style 2', 'plugin-domain'),
                ],
            ]
        );

        $this->add_control(
            'name',
            [
                'label' => __('Name', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type contact name here', 'plugin-domain'),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __('Choose Image', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'image_size',
            [
                'label' => __('Image size', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => __('Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "default" size.', 'plugin-domain'),
            ]
        );

        $this->add_control(
            'job',
            [
                'label' => __('Job', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type contact job here', 'plugin-domain'),
            ]
        );

        $this->add_control(
            'phone',
            [
                'label' => __('Phone', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type contact phone here', 'plugin-domain'),
                'condition' => [
                    'style' => 'style_2'
                ]
            ]
        );

        $this->add_control(
            'phone_two',
            [
                'label' => __('Phone 2', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type contact second phone here', 'plugin-domain'),
                'condition' => [
                    'style' => 'style_2'
                ]
            ]
        );

        $this->add_control(
            'email',
            [
                'label' => __('Email', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type contact email here', 'plugin-domain'),
            ]
        );

        $this->add_control(
            'skype',
            [
                'label' => __('Skype', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type contact skype here', 'plugin-domain'),
            ]
        );

        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_contact_');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_contact_';

            $image = consulting_get_image($settings['image']['id'], $settings['image_size']);

            if(!empty($image['thumbnail'])) $image = $image['thumbnail'];

            $settings['image']['thumbnail'] = $image;

            consulting_show_template('contact', $settings);

        }
    }

    protected function _content_template()
    {

    }

}