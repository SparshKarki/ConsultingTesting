<?php

class Elementor_VC_CTA extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'vc_cta';
    }

    public function get_title()
    {
        return esc_html__('Consulting Call to action', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-bullhorn';
    }

    public function get_categories()
    {
        return ['theme-elements'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'plugin-name'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /*H2*/
        $this->add_control(
            'h2',
            [
                'label' => __('Heading', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'h2_link',
            [
                'label' => __('URL (Link)', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::URL,
            ]
        );

        Consulting_Elementor_Widgets::add_font_settings($this, 'h2_font_container', array(), '.ce_cta__content__title');

        $this->add_control(
            'h2_el_id',
            [
                'label' => __('Element ID', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'h2_el_class',
            [
                'label' => __('Extra class name', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );


        /*H4*/
        $this->add_control(
            'h4',
            [
                'label' => __('Subheading', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'h4_link',
            [
                'label' => __('URL (Link)', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::URL,
            ]
        );

        Consulting_Elementor_Widgets::add_font_settings($this, 'h4_font_container', array('tag' => 'h4'), '.ce_cta__content__subtitle');

        $this->add_control(
            'h4_el_id',
            [
                'label' => __('Element ID', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'h4_el_class',
            [
                'label' => __('Extra class name', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'hr_4',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'txt_align',
            [
                'label' => __('Text alignment', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'left',
                'options' => array_flip(array(
                    'Left' => 'left',
                    'Right' => 'right',
                    'Center' => 'center',
                    'Justify' => 'justify',
                ))
            ]
        );

        $this->add_control(
            'custom_text',
            [
                'label' => __( 'Text color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__content__text' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => __( 'Text', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'rows' => 5,
            ]
        );

        $this->add_control(
            'el_id',
            [
                'label' => __('Element ID', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'el_class',
            [
                'label' => __('Extra class name', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'particles',
            [
                'label' => __( 'Enable Particles', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
            ]
        );

        $this->end_controls_section();

        /*Button Section*/

        $this->start_controls_section(
            'button_section',
            [
                'label' => __('Button', 'plugin-name'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'add_button',
            [
                'label' => __('Add button', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => array_flip(array(
                    esc_html__( 'No', 'js_composer' ) => '',
                    esc_html__( 'Top', 'js_composer' ) => 'top',
                    esc_html__( 'Bottom', 'js_composer' ) => 'bottom',
                    esc_html__( 'Left', 'js_composer' ) => 'left',
                    esc_html__( 'Right', 'js_composer' ) => 'right',
                ))
            ]
        );

        $this->add_control(
            'btn_title',
            [
                'label' => __( 'Text', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ]
            ]
        );

        $this->add_control(
            'btn_link',
            [
                'label' => __( 'URL (Link)', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ]
            ]
        );

        $this->add_control(
            'btn_custom_background',
            [
                'label' => __( 'Background Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_custom_background_hover',
            [
                'label' => __( 'Background Color on hover', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'brdr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'btn_custom_text',
            [
                'label' => __( 'Text', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_custom_text_hover',
            [
                'label' => __( 'Text Color on hover', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button:hover' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'txt',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'btn_custom_border',
            [
                'label' => __( 'Border Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_custom_border_hover',
            [
                'label' => __( 'Border Color on hover', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button:hover' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_align',
            [
                'label' => __('Alignment', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array (
                    'Inline' => 'inline',
                    'Left' => 'left',
                    'Right' => 'right',
                    'Center' => 'center',
                )),
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ]
            ]
        );

        $this->add_control(
            'btn_button_block',
            [
                'label' => __( 'Set full width button?', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ]
            ]
        );

        $this->add_control(
            'btn_i_icon',
            [
                'label' => __('Icon', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ],
                'default' => [
                    'value' => 'fa fa-chevron-right',
                    'library' => 'solid',
                ],
            ]
        );

        $this->add_control(
            'btn_i_color',
            [
                'label' => __( 'Icon Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_i_color_hover',
            [
                'label' => __( 'Icon Color on hover', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ce_cta__action .button:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'btn_i_align',
            [
                'label' => __('Icon Alignment', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'right',
                'options' => array_flip(array (
                    'Left' => 'left',
                    'Right' => 'right',
                )),
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ]
            ]
        );

        /*57*/
        $this->add_control(
            'btn_el_id',
            [
                'label' => __('Element ID', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ]
            ]
        );

        $this->add_control(
            'btn_el_class',
            [
                'label' => __('Extra class name', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'add_button' => array('top', 'bottom', 'left', 'right')
                ]
            ]
        );

        $this->end_controls_section();

//        /*Icon Settings*/
//        $this->start_controls_section(
//            'icon_section',
//            [
//                'label' => __('Icon', 'plugin-name'),
//                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
//            ]
//        );
//
//        /*61*/
//        $this->add_control(
//            'add_icon',
//            [
//                'label' => __( 'Add icon?', 'plugin-domain' ),
//                'type' => \Elementor\Controls_Manager::SELECT,
//                'options' => array_flip(array (
//                    'No' => '',
//                    'Top' => 'top',
//                    'Bottom' => 'bottom',
//                    'Left' => 'left',
//                    'Right' => 'right',
//                )),
//            ]
//        );
//
//        $this->add_control(
//            'i_icon',
//            [
//                'label' => __('Icon', 'plugin-domain'),
//                'type' => \Elementor\Controls_Manager::ICONS,
//                'condition' => [
//                    'add_icon' => array('top', 'bottom', 'left', 'right')
//                ]
//            ]
//        );
//
//
//        /*72*/
//        $this->add_control(
//            'i_custom_color',
//            [
//                'label' => __( 'Custom color', 'plugin-domain' ),
//                'type' => \Elementor\Controls_Manager::COLOR,
//                'description' => 'Select custom icon color.',
//            ]
//        );
//
//        /*75*/
//        $this->add_control(
//            'i_custom_background_color',
//            [
//                'label' => __( 'Custom background color', 'plugin-domain' ),
//                'type' => \Elementor\Controls_Manager::COLOR,
//                'description' => 'Select custom icon background color.',
//            ]
//        );
//
//        $this->add_control(
//            'i_size',
//            [
//                'label' => __( 'Size', 'plugin-domain' ),
//                'type' => \Elementor\Controls_Manager::SELECT,
//                'options' => array_flip(
//                    array (
//                        'Mini' => 'xs',
//                        'Small' => 'sm',
//                        'Normal' => 'md',
//                        'Large' => 'lg',
//                        'Extra Large' => 'xl',
//                    )
//                ),
//                'condition' => [
//                    'add_icon' => array('top', 'bottom', 'left', 'right')
//                ]
//            ]
//        );
//
//        $this->add_control(
//            'i_link',
//            [
//                'label' => __( 'URL (Link)', 'plugin-domain' ),
//                'type' => \Elementor\Controls_Manager::URL,
//                'condition' => [
//                    'add_icon' => array('top', 'bottom', 'left', 'right')
//                ]
//            ]
//        );
//
//        $this->add_control(
//            'i_el_id',
//            [
//                'label' => __('Element ID', 'plugin-domain'),
//                'type' => \Elementor\Controls_Manager::TEXT,
//            ]
//        );
//
//        $this->add_control(
//            'i_el_class',
//            [
//                'label' => __('Extra class name', 'plugin-domain'),
//                'type' => \Elementor\Controls_Manager::TEXT,
//            ]
//        );
//
//        $this->end_controls_section();

        /*COMPOSER SETTINGS*/


    }

    protected function render()
    {
        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $title_font = Consulting_Elementor_Widgets::get_font_settings($settings, 'h2_font_container');
            $subtitle_font = Consulting_Elementor_Widgets::get_font_settings($settings, 'h4_font_container');

            $settings['title_font'] = Consulting_Elementor_Widgets::build_font_styles($title_font);
            $settings['subtitle_font'] = Consulting_Elementor_Widgets::build_font_styles($subtitle_font);

            consulting_show_template('vc_cta', $settings);

        }
    }

    protected function _content_template()
    {

    }

}