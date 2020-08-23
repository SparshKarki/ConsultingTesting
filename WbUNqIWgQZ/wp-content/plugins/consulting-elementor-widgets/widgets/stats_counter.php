<?php

use Elementor\Controls_Manager;

class Elementor_STM_Stats_Counter extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'stm_stats_counter';
    }

    public function get_title()
    {
        return esc_html__('Stats counter', 'consulting-elementor-widgets');
    }

    public function get_icon()
    {
        return 'fa fa-sort-numeric-up';
    }

    public function get_categories()
    {
        return ['theme-elements'];
    }

    public function get_script_depends() {
        return [ 'countUp' ];
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
        $consulting_layout = get_option('consulting_layout', 'layout_1');

        $staff_categories_array = get_terms('stm_staff_category');
        $staff_categories = array(
            esc_html__('All', 'consulting') => 'all'
        );
        if ($staff_categories_array && !is_wp_error($staff_categories_array)) {
            foreach ($staff_categories_array as $cat) {
                $staff_categories[$cat->name] = $cat->slug;
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
            'stat_counter_style',
            [
                'label' => __('Style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => array_flip(array(
                    esc_html__('Style 1', 'consulting') => 'style_1',
                    esc_html__('Style 2', 'consulting') => 'style_2',
                    esc_html__('Style 3', 'consulting') => 'style_3',
                    esc_html__('Style 4', 'consulting') => 'style_4',
                    esc_html__('Style 5', 'consulting') => 'style_5'
                )),
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __('Icon', 'text-domain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'stat_counter_style' => 'style_5'
                ]
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'stat_counter_style' => array('style_1', 'style_3', 'style_4', 'style_5')
                ]
            ]
        );

        $this->add_control(
            'counter_value',
            [
                'label' => __('Counter value', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '1000'
            ]
        );

        $this->add_control(
            'counter_value_pre',
            [
                'label' => __('Counter value prefix', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'counter_value_suf',
            [
                'label' => __('Counter value suffix', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Description', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'rows' => 5,
                'condition' => array('stat_counter_style' => array('style_2', 'style_3'))
            ]
        );

        $this->add_control(
            'duration',
            [
                'label' => __('Duration', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '2.5'
            ]
        );

        $this->add_control(
            'alignment',
            [
                'label' => __('Alignment', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => array_flip(array(
                    esc_html__('Left', 'consulting') => 'left',
                    esc_html__('Right', 'consulting') => 'right',
                    esc_html__('Center', 'consulting') => 'center'
                )),
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .consulting_elementor_stats_counter .counter-wrap *' => 'color: {{VALUE}}',
                ],
                'condition' => array('stat_counter_style' => array('style_5'))
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Title Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .consulting_elementor_stats_counter .icon-wrap i' => 'color: {{VALUE}}',
                ],
                'condition' => array('stat_counter_style' => array('style_5'))
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => __( 'Text Color', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .consulting_elementor_stats_counter *' => 'color: {{VALUE}}',
                ],
            ]
        );

        if($consulting_layout === 'layout_16'){
            $this->add_control(
                'stats_style',
                [
                    'label' => __('Style', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => array_flip(array(
                        esc_html__('Style 1', 'plugin-domain') => 'style_1',
                        esc_html__('Style 2', 'plugin-domain') => 'style_2'
                    )),
                ]
            );

            $this->add_control(
                'color',
                [
                    'label' => __( 'Color', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'condition' => array('stats_style' => array('style_2'))
                ]
            );
        }

        $this->end_controls_section();

        $this->add_dimensions('.consulting_elementor_stats_counter');

    }

    protected function render()
    {

        if (function_exists('consulting_show_template')) {

            $settings = $this->get_settings_for_display();

            $settings['css_class'] = ' consulting_elementor_stats_counter';

            $settings['icon'] = $settings['icon']['value'];

            if(!empty($settings['description'])) $settings['description'] = wpautop($settings['description']);

            consulting_show_template('stats_counter', $settings);

        }

    }

    protected function _content_template()
    {

    }

}