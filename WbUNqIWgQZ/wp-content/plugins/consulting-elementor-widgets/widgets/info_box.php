<?php

use Elementor\Controls_Manager;

class Elementor_STM_Info_Box extends \Elementor\Widget_Base {

    public function get_name() {
        return 'stm_info_box';
    }

    public function get_title() {
        return esc_html__('Info Box', 'consulting-elementor-widgets');
    }

    public function get_icon() {
        return 'fa fa-info';
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

        $consulting_layout = get_option('consulting_layout', 'layout_1');

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        Consulting_Elementor_Widgets::add_text_field($this, 'title', esc_html__('Title', 'plugin-domain'));

        $this->add_control(
            'infobox_label',
            [
                'label' => __( 'Infobox label', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'style' => array('style_9')
                ],
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __( 'Style', 'plugin-domain' ),
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
                    esc_html__('Style 8', 'consulting') => 'style_8',
                    esc_html__('Style 9', 'consulting') => 'style_9'
                )),
            ]
        );


        $this->add_control(
            'image',
            [
                'label' => __( 'Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'style' => array('style_1', 'style_2', 'style_3', 'style_4')
                ],
            ]
        );

        if(Consulting_Elementor_Widgets::$consulting_layout === 'layout_15'){
            $this->add_control(
                'icon_l15',
                [
                    'label' => __('Icon', 'text-domain'),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-star',
                        'library' => 'solid',
                    ],
                ]
            );
        }

        $this->add_control(
            'vc_image_size',
            [
                'label' => __( 'Image Size', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'description' => __( 'Crop the original image size to any custom size. Set custom width or height to keep the original size ratio.', 'plugin-name' ),
                'condition' => [
                    'style' => array('style_1', 'style_2', 'style_3', 'style_4')
                ],
            ]
        );

        $this->add_control(
            'align_center',
            [
                'label' => __( 'Align Center', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'title_icon',
            [
                'label' => __( 'Title Icon', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'style' => array('style_3', 'style_6', 'style_8')
                ],
            ]
        );

        Consulting_Elementor_Widgets::add_text_field(
            $this,
            'title_icon_size',
            esc_html__('Icon - Size', 'plugin-domain'),
            '',
            array(
                'condition' => [
                    'style' => array('style_6')
                ],
            )
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Text', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __( 'Link', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'condition' => [
                    'style' => array('style_1', 'style_2', 'style_3', 'style_4', 'style_5', 'style_6', 'style_7')
                ],
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __( 'URL Icon', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'style' => array('style_1', 'style_2', 'style_3', 'style_5', 'style_6')
                ],
            ]
        );


        $this->end_controls_section();


        $this->add_dimensions('.elementor-consulting-info-box');

    }

    protected function render() {
        if(function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' elementor-consulting-info-box';

            if(!empty($settings['link']['url'])) {
                $settings['link'] = Consulting_Elementor_Widgets::build_link($settings);
            }

            if(!empty($settings['icon'])) $settings['icon'] = $settings['icon']['value'];

            if(!empty($settings['icon_l15'])) $settings['icon_l15'] = $settings['icon_l15']['value'];

            if(!empty($settings['title_icon']['value'])) $settings['title_icon'] = $settings['title_icon']['value'];

            if(!empty($settings['image']['id'])) $settings['image'] = $settings['image']['id'];

            $settings['content'] = wpautop($settings['content']);

            consulting_show_template('info_box', $settings);

        }
    }

    protected function _content_template() {

    }

}