<?php
/**
 * Plugin Name: Consulting Elementor Widgets
 * Description: Consulting Elementor Widgets.
 * Plugin URI:  https://consulting.stylemixthemes.com/
 * Version:     1.0.1
 * Author:      Stylemix
 * Author URI:  https://stylemixthemes.com/
 * Text Domain: consulting-elementor-widgets
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('STM_CEW_PATH', dirname(__FILE__));
define('STM_CEW_URL', plugin_dir_url(__FILE__));
define('STM_PATCH_VAR', 'patched8');

require_once(STM_CEW_PATH . '/patch/main.php');
require_once(STM_CEW_PATH . '/patch-api/api.php');
require_once(STM_CEW_PATH . '/helpers/custom_css.php');

add_action('wp_enqueue_scripts', function () {
    wp_add_inline_style('elementor-frontend', cew_inline_css());
});

final class Consulting_Elementor_Widgets
{

    public static $consulting_layout = '';

    const VERSION = '1.0.0';

    const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

    const MINIMUM_PHP_VERSION = '7.0';

    private static $_instance = null;

    public static function instance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;

    }

    public function __construct()
    {

        add_action('init', [$this, 'i18n']);
        add_action('plugins_loaded', [$this, 'init']);

        add_filter('consulting_main_container_class', [$this, 'container_class']);

        add_action('elementor/preview/enqueue_styles', [$this, 'preview_styles']);
        add_action('elementor/preview/enqueue_scripts', [$this, 'preview_scripts']);

        $this->add_default_controls();

        self::$consulting_layout = get_option('consulting_layout', 'layout_1');

    }

    function preview_styles()
    {
        wp_enqueue_style('cew_pie_chart', get_template_directory_uri() . '/assets/css/global_styles/pie_chart.css', array(), time());
        wp_enqueue_style('cew_cta', get_template_directory_uri() . '/assets/css/global_styles/el_tta.css', array(), time());
    }

    function preview_scripts()
    {
        wp_enqueue_script('cew_script_preview', STM_CEW_URL . '/assets/js/elementor-preview.js', array(), time(), true);
    }

    function container_class($class)
    {

        $obj = get_queried_object();

        if (empty($obj->ID)) return $class;
        $item_id = $obj->ID;

        if(!in_array(get_post_type($item_id), get_option('elementor_cpt_support', array()))) return $class;

        $elementor_status = get_post_meta($item_id, '_elementor_edit_mode', true);
        $elementor_status = (!empty($elementor_status) && $elementor_status === 'builder');
        return ($elementor_status) ? '' : $class;
    }

    public function i18n()
    {

        load_plugin_textdomain('consulting-elementor-widgets');

    }

    public function init()
    {

        // Check if Elementor installed and activated
        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);
            return;
        }

        // Check for required Elementor version
        if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);
            return;
        }

        // Check for required PHP version
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);
            return;
        }

        // Add Plugin actions
        add_action('elementor/widgets/widgets_registered', [$this, 'init_widgets']);
        add_action('elementor/controls/controls_registered', [$this, 'init_controls']);

        add_action('elementor/editor/before_enqueue_scripts', [$this, 'widget_scripts']);
    }

    public function widget_scripts()
    {
        wp_register_script('countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery'), CONSULTING_THEME_VERSION, true);
        wp_enqueue_style('editor-styles', STM_CEW_URL . '/assets/css/elementor-editor.css', '');
        wp_enqueue_script('countdown');
    }

    public function admin_notice_missing_main_plugin()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
        /* translators: 1: Plugin name 2: Elementor */
            esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'consulting-elementor-widgets'),
            '<strong>' . esc_html__('Consulting Elementor widgets', 'consulting-elementor-widgets') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'consulting-elementor-widgets') . '</strong>'
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

    }

    public function admin_notice_minimum_elementor_version()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
        /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'consulting-elementor-widgets'),
            '<strong>' . esc_html__('Consulting Elementor widgets', 'consulting-elementor-widgets') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'consulting-elementor-widgets') . '</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

    }

    public function admin_notice_minimum_php_version()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
        /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'consulting-elementor-widgets'),
            '<strong>' . esc_html__('Consulting Elementor widgets', 'consulting-elementor-widgets') . '</strong>',
            '<strong>' . esc_html__('PHP', 'consulting-elementor-widgets') . '</strong>',
            self::MINIMUM_PHP_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

    }

    public function include_widgets()
    {
        require_once(__DIR__ . '/widgets/about_vacancy.php');
        require_once(__DIR__ . '/widgets/company_history.php');
        require_once(__DIR__ . '/widgets/contact.php');
        require_once(__DIR__ . '/widgets/contacts_widget.php');
        require_once(__DIR__ . '/widgets/cost_calculator.php');
        require_once(__DIR__ . '/widgets/countdown.php');
        require_once(__DIR__ . '/widgets/event_lessons.php');
        require_once(__DIR__ . '/widgets/events.php');
        require_once(__DIR__ . '/widgets/events_form.php');
        require_once(__DIR__ . '/widgets/events_information.php');
        require_once(__DIR__ . '/widgets/events_map.php');
        require_once(__DIR__ . '/widgets/gmap.php');
        require_once(__DIR__ . '/widgets/gmap_l14.php');
        require_once(__DIR__ . '/widgets/icon_box.php');
        require_once(__DIR__ . '/widgets/image_carousel.php');
        require_once(__DIR__ . '/widgets/info_box.php');
        require_once(__DIR__ . '/widgets/news.php');
        require_once(__DIR__ . '/widgets/partner.php');
        require_once(__DIR__ . '/widgets/portfolio.php');
        require_once(__DIR__ . '/widgets/portfolio_information.php');
        require_once(__DIR__ . '/widgets/portfolio_pagination.php');
        require_once(__DIR__ . '/widgets/post_about_author.php');
        require_once(__DIR__ . '/widgets/post_bottom.php');
        require_once(__DIR__ . '/widgets/post_comments.php');
        require_once(__DIR__ . '/widgets/post_details.php');
        require_once(__DIR__ . '/widgets/post_tags.php');
        require_once(__DIR__ . '/widgets/pricing_plan.php');
        require_once(__DIR__ . '/widgets/quote.php');
        require_once(__DIR__ . '/widgets/services.php');
        require_once(__DIR__ . '/widgets/services_tabs.php');
        require_once(__DIR__ . '/widgets/share_buttons.php');
        require_once(__DIR__ . '/widgets/sidebar.php');
        require_once(__DIR__ . '/widgets/spacing.php');
        require_once(__DIR__ . '/widgets/staff_bottom.php');
        require_once(__DIR__ . '/widgets/staff_list.php');
        require_once(__DIR__ . '/widgets/stats_counter.php');
        require_once(__DIR__ . '/widgets/steps.php');
        require_once(__DIR__ . '/widgets/stocks_carousel.php');
        require_once(__DIR__ . '/widgets/stocks_chart.php');
        require_once(__DIR__ . '/widgets/stocks_table.php');
        require_once(__DIR__ . '/widgets/testimonials.php');
        require_once(__DIR__ . '/widgets/testimonials_carousel.php');
        require_once(__DIR__ . '/widgets/testimonials_pager.php');
        require_once(__DIR__ . '/widgets/vacancies.php');
        require_once(__DIR__ . '/widgets/vacancy_bottom.php');
        require_once(__DIR__ . '/widgets/works.php');
        require_once(__DIR__ . '/widgets/consulting_heading.php');
        require_once(__DIR__ . '/widgets/consulting_cta.php');
        require_once(__DIR__ . '/widgets/contact_form_7.php');
        require_once(__DIR__ . '/widgets/charts.php');
        require_once(__DIR__ . '/widgets/consulting_pie_chart.php');
    }

    public function init_widgets()
    {

        // Include Widget files
        self::include_widgets();

        // Register widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_About_Vacancy());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Company_History());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Contact());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Contacts_Widget());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Cost_Calculator());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Countdown());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Event_Lessons());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Events());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Events_Form());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Events_Information());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Events_Map());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Gmap());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Gmap_L14());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Icon_Box());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Image_Carousel());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Info_Box());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_News());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Partner());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Portfolio());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Portfolio_Information());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Portfolio_Pagination());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Post_About_Author());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Post_Bottom());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Post_Comments());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Post_Details());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Post_Tags());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Pricing_Plan());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Quote());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Services());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Services_Tabs());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Share_Buttons());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Sidebar());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Spacing());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Staff_Bottom());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Staff_List());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Stats_Counter());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Steps());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Stocks_Carousel());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Stocks_Chart());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Stocks_Table());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Testimonials());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Testimonials_Carousel());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Testimonials_Pager());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Vacancies());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Vacancy_Bottom());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Works());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_VC_Custom_Heading());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_VC_CTA());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Contact_Form_7());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Charts());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_STM_Pie_Chart());

    }

    public function init_controls()
    {

        // Include Control files
        //require_once(__DIR__ . '/controls/query_builder.php');

        // Register control
        //\Elementor\Plugin::$instance->controls_manager->register_control('consulting-query-builder-control', new \ConsultingQueryBuilderControl());

    }

    public static function get_post_type($args = array())
    {
        $query = new WP_Query($args);
        $r = array();
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $r[get_the_ID()] = get_the_title();
            }
            wp_reset_postdata();
        }

        return $r;
    }

    public static function get_image_url($image_id, $size)
    {

        require_once(ELEMENTOR_PATH . 'includes/libraries/bfi-thumb/bfi-thumb.php');

        $attachment_size = $size;

        /*Check if custom size*/
        $custom_size = explode('x', $size);

        if (!empty($custom_size[0]) && !empty($custom_size[1])) {
            if (is_numeric($custom_size[0]) && is_numeric($custom_size[1])) {
                $attachment_size = array(
                    // Defaults sizes
                    0 => $custom_size[0], // Width.
                    1 => $custom_size[1], // Height.

                    'bfi_thumb' => true,
                    'crop' => true,
                );
            }
        }

        $image_src = wp_get_attachment_image_src($image_id, $attachment_size);

        if (!empty($image_src[0])) {
            $image_src = $image_src[0];
        }

        if (empty($image_src[0]) && 'thumbnail' !== $attachment_size) {
            $image_src = wp_get_attachment_image_src($image_id);
        }

        return $image_src;

    }

    public static function get_cropped_image($image_id, $size)
    {
        $image_url = self::get_image_url($image_id, $size);
        $image_url = (is_array($image_url)) ? $image_url[0] : $image_url;
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

        return "<img src='{$image_url}' alt='{$image_alt}' />";
    }

    static function add_text_field($vm, $id, $title, $default = '', $adds = array())
    {

        $args = array(
            'label' => $title,
            'type' => \Elementor\Controls_Manager::TEXT,
        );

        $args = wp_parse_args($adds, $args);

        if (!empty($default)) $args['default'] = $default;

        $vm->add_control($id, $args);

    }

    static function add_query_builder($vm, $prefix, $title = '')
    {

        $title = (empty($title)) ? esc_html__('Query Builder', 'plugin-domain') : $title;

        $post_types = get_post_types(array('public' => true));
        $taxonomies = get_taxonomies();

        $vm->start_controls_section(
            "{$prefix}_query_builder_section",
            [
                'label' => $title,
            ]
        );

        $vm->add_control(
            "{$prefix}_query_builder_post_type",
            [
                'label' => __('Select post type', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $post_types,
            ]
        );

        $vm->add_control(
            "{$prefix}_query_builder_posts_per_page",
            [
                'label' => __('Post count', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $vm->add_control(
            "{$prefix}_query_builder_order_by",
            [
                'label' => __('Order by', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'date',
                'options' => [
                    'date' => __('Date', 'plugin-domain'),
                    'ID' => __('ID', 'plugin-domain'),
                    'author' => __('Author', 'plugin-domain'),
                    'title' => __('Title', 'plugin-domain'),
                    'modified' => __('Modified', 'plugin-domain'),
                    'rand' => __('Rand', 'plugin-domain'),
                    'comment_count' => __('Comment count', 'plugin-domain'),
                    'menu_order' => __('menu_order', 'plugin-domain'),
                ],
            ]
        );

        $vm->add_control(
            "{$prefix}_query_builder_sort_order",
            [
                'label' => __('Sort order', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'ASC' => __('Ascending', 'plugin-domain'),
                    'DESC' => __('Descending', 'plugin-domain'),
                ],
            ]
        );

        $vm->add_control(
            "{$prefix}_query_builder_post_ids",
            [
                'label' => __('Post IDs', 'plugin-domain'),
                'description' => __('Enter post IDs separated by comma. Ex.: 45,46,47', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $vm->add_control(
            "{$prefix}_query_builder_taxonomy",
            [
                'label' => __('Select taxonomy', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $taxonomies,
            ]
        );

        $vm->add_control(
            "{$prefix}_query_builder_categories",
            [
                'label' => __('Categories IDs', 'plugin-domain'),
                'description' => __('Enter category IDs separated by comma. Ex.: 45,46,47', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );


        $vm->end_controls_section();
    }

    static public function get_query_builder($settings, $prefix)
    {
        /**
         * "{$prefix}_query_builder_post_type"
         * "{$prefix}_query_builder_posts_per_page"
         * "{$prefix}_query_builder_order_by"
         * "{$prefix}_query_builder_sort_order"
         * "{$prefix}_query_builder_post_ids"
         * "{$prefix}_query_builder_taxonomy"
         * "{$prefix}_query_builder_categories"
         */

        $post_type = $settings["{$prefix}_query_builder_post_type"];
        $posts_per_page = $settings["{$prefix}_query_builder_posts_per_page"];
        $order_by = $settings["{$prefix}_query_builder_order_by"];
        $sort_order = $settings["{$prefix}_query_builder_sort_order"];
        $post_ids = $settings["{$prefix}_query_builder_post_ids"];
        $taxonomy = $settings["{$prefix}_query_builder_taxonomy"];
        $categories = $settings["{$prefix}_query_builder_categories"];


        $args = array();

        if (!empty($post_type)) $args['post_type'] = $post_type;
        if (!empty($posts_per_page)) $args['posts_per_page'] = $posts_per_page;
        if (!empty($order_by)) $args['order_by'] = $order_by;
        if (!empty($sort_order)) $args['order'] = $sort_order;
        if (!empty($post_ids)) $args['post__in'] = explode(',', trim($post_ids));
        if (!empty($taxonomy) and !empty($categories)) {
            $args['tax_query'] = array(
                'relation' => 'AND',

            );

            foreach ($taxonomy as $tax) {
                $args['tax_query'][] = array(
                    'taxonomy' => $tax,
                    'field' => 'id',
                    'terms' => explode(',', trim($categories))
                );
            }

        }

        $q = new WP_Query($args);

        return $q;

    }

    static function add_font_settings($vm, $prefix, $defaults = array(), $selector = '')
    {

        $tag_default = (!empty($defaults['tag'])) ? $defaults['tag'] : 'h2';

        $vm->add_control(
            "{$prefix}_tag",
            [
                'label' => __('Element tag', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => $tag_default,
                'options' => array(
                    'h1' => 'h1',
                    'h2' => 'h2',
                    'h3' => 'h3',
                    'h4' => 'h4',
                    'h5' => 'h5',
                    'h6' => 'h6',
                    'p' => 'p',
                    'div' => 'div',
                ),
            ]
        );

        $vm->add_control(
            "{$prefix}_text_align",
            [
                'label' => __('Text align', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'left',
                'options' => array(
                    'left' => __('Left', 'plugin-domain'),
                    'right' => __('Right', 'plugin-domain'),
                    'center' => __('Center', 'plugin-domain'),
                    'justify' => __('Justify', 'plugin-domain'),
                ),
            ]
        );

        if(!empty($selector)){
            $vm->add_control(
                "{$prefix}_font_size",
                [
                    'label' => __('Font size (px)', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'selectors' => [
                        "{{WRAPPER}} {$selector}" => 'font-size: {{VALUE}}px;',
                    ],
                ]
            );

            $vm->add_control(
                "{$prefix}_line_height",
                [
                    'label' => __('Line height (px)', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'selectors' => [
                        "{{WRAPPER}} {$selector}" => 'line-height: {{VALUE}}px;',
                    ],
                ]
            );

            $vm->add_control(
                "{$prefix}_color",
                [
                    'label' => __('Color', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        "{{WRAPPER}} {$selector}" => 'color: {{VALUE}};',
                    ],
                ]
            );
        }
        else {
            $vm->add_control(
                "{$prefix}_font_size",
                [
                    'label' => __('Font size (px)', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                ]
            );

            $vm->add_control(
                "{$prefix}_line_height",
                [
                    'label' => __('Line height (px)', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::TEXT,
                ]
            );
            $vm->add_control(
                "{$prefix}_color",
                [
                    'label' => __('Color', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                ]
            );
        }

    }

    static function get_font_settings($settings, $prefix)
    {

        $options = array(
            'tag',
            'text_align',
            'font_size',
            'line_height',
            'color',
        );

        $r = array();

        foreach ($options as $option) {
            $option_name = "{$prefix}_{$option}";
            $r[$option] = (!empty($settings[$option_name])) ? $settings[$option_name] : '';
        }

        return $r;

    }

    static function build_font_styles($styles)
    {
        $r = array();
        if (!empty($styles['font_size'])) $r[] = "font-size : {$styles['font_size']}px;";
        if (!empty($styles['line_height'])) $r[] = "line-height : {$styles['line_height']}px;";
        if (!empty($styles['text_align'])) $r[] = "text-align : {$styles['text_align']};";
        if (!empty($styles['color'])) $r[] = "color : {$styles['color']};";

        return $r;
    }

    public static function build_link($settings, $param_name = 'link')
    {
        $url = array(
            'url' => $settings[$param_name]['url']
        );

        $url['target'] = ($settings[$param_name]['is_external'] === 'on') ? '_blank' : '';
        $url['title'] = '';
        $url['rel'] = ($settings[$param_name]['nofollow'] === 'on') ? 'nofollow' : '';

        if (!empty($settings["{$param_name}_label"])) $url['title'] = $settings["{$param_name}_label"];

        return $url;
    }

    static function parse_settings($settings, $prefix)
    {
        $r = array();

        foreach ($settings as $key => $setting) {

            $key_prefix = substr($key, 0, strlen($prefix));

            if ($key_prefix !== $prefix) continue;

            $r[substr($key, strlen($prefix))] = $setting;

        }

        return $r;
    }

    function add_default_controls()
    {
        add_action('elementor/element/progress/section_progress/before_section_end', function ($element, $args) {
            // add a control
            $element->add_control('customcolor', // update the control
                [
                    'label' => __('Fill Background color', 'elementor-stm-widgets'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .elementor-progress-bar' => 'background-color: {{VALUE}}',
                    ],
                ]
            );

            $element->add_control('customtxtcolor', // update the control
                [
                    'label' => __('Fill Background color', 'elementor-stm-widgets'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .elementor-progress-text' => 'color: {{VALUE}}',
                    ],
                ]
            );

        }, 10, 2);

        add_action('elementor/element/image/section_image/before_section_end', function ($element, $args) {

            $element->add_control(
                'source',
                [
                    'label' => __('Show Post thumbnail', 'plugin-domain'),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'return_value' => 'featured_image',
                    'default' => '',
                ]
            );


        }, 10, 2);

        add_action('elementor/element/button/section_style/before_section_end', function ($element, $args) {


            // add a control


            $element->add_control(
                'more_options',
                [
                    'label' => __('Button extra colors', 'plugin-name'),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );

            $element->start_controls_tabs('tabs_button_border_style');

            $element->start_controls_tab(
                'tab_button_border_normal',
                [
                    'label' => __('Normal', 'elementor'),
                ]
            );

            $element->add_control('vc_border_color', // update the control
                [
                    'label' => __('Border color', 'elementor-stm-widgets'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} a.elementor-button' => 'border-color: {{VALUE}}',
                    ],
                ]
            );

            $element->add_control('vc_icon_color', // update the control
                [
                    'label' => __('Icon color', 'elementor-stm-widgets'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} a.elementor-button .elementor-button-icon i' => 'color: {{VALUE}} !important',
                    ],
                ]
            );


            $element->end_controls_tab();

            $element->start_controls_tab(
                'tab_button_border_hover',
                [
                    'label' => __('Hover', 'elementor'),
                ]
            );

            $element->add_control('vc_border_color_hover', // update the control
                [
                    'label' => __('Border color', 'elementor-stm-widgets'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} a.elementor-button:hover' => 'border-color: {{VALUE}}',
                    ],
                ]
            );

            $element->add_control('vc_icon_color_hover', // update the control
                [
                    'label' => __('Icon color', 'elementor-stm-widgets'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} a.elementor-button:hover .elementor-button-icon i' => 'color: {{VALUE}} !important',
                    ],
                ]
            );

            $element->end_controls_tab();

            $element->end_controls_tabs();

        }, 10, 2);

        add_action('elementor/element/button/section_button/before_section_end', function ($element, $args) {
            // add a control
            $element->add_control(
                'color_link',
                [
                    'label' => __('Color Link', 'plugin-name'),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'separator' => 'before',
                    'return_value' => 'yes',
                ]
            );

            $element->add_control(
                'button_block',
                [
                    'label' => __( 'Set full width button?', 'plugin-name' ),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'separator' => 'before',
                    'return_value' => 'yes',
                ]
            );

        }, 10, 2);

        add_filter('widget_text', function ($content) {
            return wpautop($content);
        });

        if (get_option('consulting_layout') == 'layout_20') {
            add_action('elementor/element/video/section_image_overlay/before_section_end', function ($element) {
                $element->add_control(
                    'play_icon_text',
                    [
                        'label' => __( 'Play Icon Title', 'elementor' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'condition' => [
                            'show_play_icon' => 'yes',
                        ],
                        'separator' => 'before',
                    ]
                );
            }, 10, 2);
        }

        add_filter('consulting_secondary_font_classes', function ($classes) {
            $classes[] = '.elementor-progress-text, .elementor-tab-title a, .consulting_heading_font';
            $classes[] = '.elementor-widget-wp-widget-nav_menu ul li, .elementor-button-text, .elementor-tab-title';

            return $classes;
        });

        add_action('elementor/widget/render_content', function ($content, $widget) {

            $settings = $widget->get_settings();

            if ('wp-widget-search' === $widget->get_name()) {
                $content = "<aside class='widget widget_search'>{$content}</aside>";
            }

            if ('wp-widget-categories' === $widget->get_name()) {
                $content = "<aside class='widget widget_categories'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-archives' === $widget->get_name()) {
                $content = "<aside class='widget widget_archive'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-tag_cloud' === $widget->get_name()) {
                $content = "<aside class='widget widget_tag_cloud'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-pages' === $widget->get_name()) {
                $content = "<aside class='widget widget_pages'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-nav_menu' === $widget->get_name()) {
                $content = "<aside class='widget widget_nav_menu'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-text' === $widget->get_name()) {
                $content = "<aside class='widget widget_text'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-recent-posts' === $widget->get_name()) {
                $content = "<aside class='widget widget_recent_entries'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-meta' === $widget->get_name()) {
                $content = "<aside class='widget widget_meta'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-recent-comments' === $widget->get_name()) {
                $content = "<aside class='widget widget_recent_comments'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('wp-widget-calendar' === $widget->get_name()) {
                $content = "<aside class='widget widget_calendar'>{$content}</aside>";
                $content = str_replace('<h5>', '<h5 class="widget_title">', $content);
            }

            if ('button' === $widget->get_name()) {
                $settings = $widget->get_settings();
                $icon_align = (!empty($settings['icon_align'])) ? $settings['icon_align'] : '';
                if (empty($settings['selected_icon']['value'])) $icon_align = '';
                $color_link = $settings['color_link'];
                $color_link_class = $color_link === 'yes' ? 'color_link' : '';
                $button_block_class = $settings['button_block'] === 'yes' ? 'button_block' : '';

                $content = str_replace("elementor-button-wrapper", "elementor-button-wrapper icon_align_{$icon_align} {$color_link_class} {$button_block_class}", $content);
            }

            if ('image' === $widget->get_name()) {
                $settings = $widget->get_settings();
                $post_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');


                if(!empty($settings['image']) and !empty($post_image_url)) {
                    $content = str_replace($settings['image']['url'], $post_image_url[0], $content);
                }

            }

            if ('video' === $widget->get_name()) {
                $settings = $widget->get_settings();
                if (!empty($settings['play_icon_text']) && $settings['show_play_icon'] === 'yes') {
                    $find = array("elementor-custom-embed-play", "<span class=\"elementor-screen-only\">Play Video</span>");
                    $replaceWith = array("elementor-custom-embed-play has-play-icon-text", "<span>{$settings['play_icon_text']}</span>");
                    $content = str_replace($find, $replaceWith, $content);
                }
            }
            return $content;

        }, 10, 2);
    }

}

Consulting_Elementor_Widgets::instance();