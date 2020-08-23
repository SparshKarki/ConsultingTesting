<?php

use Elementor\Controls_Manager;

class Elementor_STM_Icon_Box extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_icon_box';
    }

    public function get_title()
    {
        return esc_html__('Icon Box', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-icons';
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
            'box_style',
            [
                'label' => __('Icon box style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip(array(
                    esc_html__('Style 1', 'consulting') => 'style_1',
                    esc_html__('Style 2', 'consulting') => 'style_2',
                    esc_html__('Style 3', 'consulting') => 'style_3',
                    esc_html__('Style 4', 'consulting') => 'style_4',
                    esc_html__('Style 5', 'consulting') => 'style_5',
                    esc_html__('Style 6', 'consulting') => 'style_6',
                    esc_html__('Style 7', 'consulting') => 'style_7',
                    esc_html__('Style 8', 'consulting') => 'style_8'
                )),
            ]
        );

        $this->add_control(
            'alignment',
            [
                'label' => __('Alignment', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'left',
                'options' => array_flip(array(
                    esc_html__('Left', 'consulting') => 'left',
                    esc_html__('Right', 'consulting') => 'right',
                    esc_html__('Center', 'consulting') => 'center'
                )),
                'condition' => [
                    'box_style' => array('style_2', 'style_4', 'style_5', 'style_6')
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'condition' => [
                    'box_style' => array('style_1', 'style_2', 'style_4', 'style_5', 'style_6', 'style_7', 'style_8')
                ],
            ]
        );

        $this->add_control(
            'title_font_size',
            [
                'label' => __('Title font-size', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'box_style' => array('style_1', 'style_2', 'style_5', 'style_6')
                ],
            ]
        );

        $this->add_control(
            'title_line_height',
            [
                'label' => __('Title line-height', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'box_style' => array('style_1', 'style_2', 'style_5', 'style_6')
                ],
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title color', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'base',
                'options' => array_flip(array(
                    esc_html__('Base', 'consulting') => 'base',
                    esc_html__('Secondary', 'consulting') => 'secondary',
                    esc_html__('Third', 'consulting') => 'third',
                    esc_html__('Custom', 'consulting') => 'custom'
                )),
            ]
        );

        $this->add_control(
            'title_color_custom',
            [
                'label' => __('Title Color', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'title_color' => array('custom')
                ],
            ]
        );


        $this->add_control(
            'hide_title_line',
            [
                'label' => __('Hide Title Line', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'hide_title_line',
                'condition' => [
                    'box_style' => array('style_1', 'style_2')
                ],
            ]
        );

        $this->add_control(
            'enable_hexagon',
            [
                'label' => __('Enable hexagon', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'enable',
                'condition' => [
                    'box_style' => array('style_1')
                ],
            ]
        );

        $this->add_control(
            'enable_hexagon_animation',
            [
                'label' => __('Enable Hexagon Hover Animation', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'enable',
                'condition' => [
                    'box_style' => array('style_1')
                ],
            ]
        );

        $this->add_control(
            'v_align_middle',
            [
                'label' => __('Vertical Middle Align', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'enable',
                'condition' => [
                    'box_style' => array('style_1')
                ],
            ]
        );

        $this->add_control(
            'add_link',
            [
                'label' => __('Add link', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'enable',
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('Link', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'condition' => [
                    'add_link' => 'enable'
                ],
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __('Icon', 'text-domain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __('Icon - Position', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'base',
                'options' => array_flip(array(
                    esc_html__('Icon Top', 'consulting') => 'icon_top',
                    esc_html__('Icon Top Transparent', 'consulting') => 'icon_top_transparent',
                    esc_html__('Icon Left', 'consulting') => 'icon_left',
                    esc_html__('Icon Left Transparent', 'consulting') => 'icon_left_transparent'
                )),
                'condition' => [
                    'box_style' => array('style_1')
                ],
            ]
        );

        $this->add_control(
            'icon_size',
            [
                'label' => __('Icon Size', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 25
            ]
        );

        $this->add_control(
            'icon_line_height',
            [
                'label' => __('Icon Line height', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 65,
                'condition' => [
                    'box_style' => array('style_3', 'style_4')
                ],
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon - Color', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'default',
                'options' => array_flip(array(
                    esc_html__('Default', 'consulting') => 'default',
                    esc_html__('Base', 'consulting') => 'base',
                    esc_html__('Secondary', 'consulting') => 'secondary',
                    esc_html__('Third', 'consulting') => 'third',
                    esc_html__('Custom', 'consulting') => 'custom'
                )),
            ]
        );

        $this->add_control(
            'icon_color_custom',
            [
                'label' => __('Icon - Color Custom', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'icon_color' => array('custom')
                ],
            ]
        );

        $this->add_control(
            'icon_bg_color',
            [
                'label' => __('Icon - Background Color', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'base_bg',
                'options' => array_flip(array(
                    esc_html__('Base', 'consulting') => 'base_bg',
                    esc_html__('Secondary', 'consulting') => 'secondary_bg',
                    esc_html__('Third', 'consulting') => 'third_bg',
                    esc_html__('Custom', 'consulting') => 'custom'
                )),
                'condition' => [
                    'box_style' => array('style_1')
                ],
            ]
        );

        $this->add_control(
            'icon_border_color',
            [
                'label' => __('Icon - Border Color', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'base_bg',
                'options' => array_flip(array(
                    esc_html__('Base', 'consulting') => 'base_bg',
                    esc_html__('Secondary', 'consulting') => 'secondary_bg',
                    esc_html__('Third', 'consulting') => 'third_bg',
                    esc_html__('Custom', 'consulting') => 'custom'
                )),
                'condition' => [
                    'box_style' => array('style_3')
                ],
            ]
        );

        $this->add_control(
            'icon_border_color_custom',
            [
                'label' => __('Icon - Border Custom', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'title_color' => array('custom')
                ],
            ]
        );

        $this->add_control(
            'icon_height',
            [
                'label' => __('Icon height', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 65,
                'condition' => [
                    'style' => array('icon_top', 'icon_top_transparent')
                ],
            ]
        );

        $this->add_control(
            'icon_width',
            [
                'label' => __('Icon width', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 50,
                'condition' => [
                    'style' => array('icon_left', 'icon_left_transparent')
                ],
            ]
        );

        $this->add_control(
            'icon_width_wr',
            [
                'label' => __('Icon Wrapper Width', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 65,
                'condition' => [
                    'box_style' => array('style_2')
                ],
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __('Content', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'condition' => [
                    'box_style' => array('style_1', 'style_3', 'style_4', 'style_5', 'style_6', 'style_7', 'style_8')
                ],
            ]
        );


        $this->end_controls_section();

        $this->add_dimensions('.event-members-box-table');

    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' elementor-consulting-icon-box';
            $settings['icon'] = $settings['icon']['value'];

            if (isset($settings['link']['url'])) $settings['link']['target'] = '_blank';

            if(!empty($settings['content'])) $settings['content'] = wpautop($settings['content']);
            if(!empty($settings['title'])) $settings['title'] = wpautop($settings['title']);

            consulting_show_template('icon_box', $settings);

        }
    }

    protected function _content_template()
    {

    }

}