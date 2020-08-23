<?php

require_once STM_CEW_PATH . '/patch/settings_conversion.php';
require_once STM_CEW_PATH . '/patch/settings_parser.php';
require_once STM_CEW_PATH . '/patch/convert_module.php';
require_once STM_CEW_PATH . '/patch/elementor_patch.php';
require_once STM_CEW_PATH . '/patch/rebuild_elementor_data.php';
require_once STM_CEW_PATH . '/patch/ui.php';

class CEW_Patch
{

    public $vc = '';
    public $id = 1403;
    public $meta_name = '_elementor_data';
    public $elementor_data = [];
    public $depth = 0;
    public $vc_elements = [];
    public $elementor_elements = [];
    public $result = '';


    public function __construct($pageFrom, $pageTo)
    {

        $this->vc = $pageFrom;
        $this->id = $pageTo;

        $disallowed_pages = array_unique(array(
            get_option('page_for_posts'),
            get_option('woocommerce_shop_page_id'),
            get_option('woocommerce_cart_page_id'),
            get_option('woocommerce_checkout_page_id'),
            get_option('woocommerce_pay_page_id'),
            get_option('woocommerce_thanks_page_id'),
            get_option('woocommerce_myaccount_page_id'),
            get_option('woocommerce_edit_address_page_id'),
            get_option('woocommerce_view_order_page_id'),
            get_option('woocommerce_terms_page_id'),
        ));

        if (!in_array($pageFrom, $disallowed_pages) and !in_array($pageTo, $disallowed_pages)) $this->start_patch();

    }

    function start_patch()
    {

        $vc_content = $this->get_vc_content();

        $this->register_vc_shortcodes();

        $this->parse_vc_shortcodes($vc_content, $this->elementor_data);

        $this->remove_vc_sections();

        $rebuild = new Cew_Rebuild_Elementor_Data();

        $rebuild->rebuild_elementor_data($this->elementor_data);

        $this->set_elementor_edit_mode($this->id);

        $this->set_elementor_content();

        ob_start();
        ?>

        <div style="display: flex">
            <div style="padding-right: 30px; border-right: 3px solid #000; width: 50%;">
                <?php cew($this->elementor_data); ?>
            </div>

            <div style="padding-left: 30px;  width: 50%;">
                <?php cew(($this->get_elementor_content())); ?>
                <?php cew(json_decode($this->get_elementor_content(), true)); ?>
            </div>
        </div>

        <?php

        $result = ob_get_contents();

        ob_end_clean();

        $this->result = $result;

        do_action('cew_patch_ended');

    }

    function remove_vc_sections()
    {
        $rebuild = array();
        $elementor_data = $this->elementor_data;

        if ($elementor_data) {
            foreach ($elementor_data as $top_index => $data) {
                if ($data['elType'] !== 'vc_section') {
                    $rebuild[] = $data;
                } else {
                    if (empty($data['elements'])) continue;

                    foreach ($data['elements'] as $data_inner) {
                        $rebuild[] = $data_inner;
                    }

                }
            }
        }

        $this->elementor_data = $rebuild;
    }

    function parse_vc_shortcodes($content, &$elementor_data)
    {

        if (!empty($content)) {
            $data = $this->get_content_tags($content);

            if (!empty($data)) {
                foreach ($data as $index => $matches) {

                    $origin = $matches[2];

                    $element_type = $this->change_element_type($origin);

                    $element_data = array(
                        'origin' => $origin,
                        'id' => self::generate_id(),
                        'elType' => $element_type,
                        'settings' => $this->change_element_settings(shortcode_parse_atts($matches[3]), $element_type, $origin),
                    );

                    if ($element_type === 'widget') {
                        $element_data['widgetType'] = $origin;
                    }

                    if (empty($element_data['settings'])) $element_data['settings'] = array();

                    if (empty($this->get_content_tags($matches[5]))) {
                        $element_data['settings']['content'] = $matches[5];
                    }

                    $element_data = CEW_Patch_Widget_Converter::converter($element_data);

                    $elementor_data[$index] = $element_data;

                    if (!empty($matches[5])) $this->parse_vc_shortcodes($matches[5], $elementor_data[$index]['elements']);

                }
            }

        }
    }

    function get_content_tags($content)
    {
        global $shortcode_tags;

        preg_match_all('@\[([^<>&/\[\]\x00-\x20=]++)@', $content, $matches);

        $tagnames = array_intersect(array_keys($shortcode_tags), $matches[1]);

        $pattern = get_shortcode_regex($tagnames);

        preg_match_all("/$pattern/", $content, $matches, PREG_SET_ORDER);

        return $matches;
    }

    static function set_elementor_edit_mode($id)
    {
        update_post_meta($id, '_elementor_edit_mode', 'builder');
    }

    static function get_elementor_edit_mode($id)
    {
        return get_post_meta($id, '_elementor_edit_mode', true);
    }

    function get_elementor_content($id = '')
    {
        $id = (empty($id)) ? $this->id : $id;
        return get_post_meta($id, $this->meta_name, true);
    }

    function set_elementor_content($id = '')
    {
        $id = (empty($id)) ? $this->id : $id;
        $json_value = wp_slash( wp_json_encode( $this->elementor_data ) );
        return update_metadata( 'post', $id, $this->meta_name, $json_value);
    }

    function get_vc_content()
    {
        $post = get_post($this->vc);
        $content = $post->post_content;
        return apply_filters('cew_before_converting_content', $content);
    }

    function register_vc_shortcodes()
    {

        $this->vc_elements = WPBMap::getShortCodes();

        $tags = wp_list_pluck($this->vc_elements, 'base');

        foreach ($tags as $tag) {
            add_shortcode($tag, function () {
            });
        }
    }

    function change_element_type($type)
    {

        switch ($type) {
            case 'vc_section':
                $type = 'vc_section';
                break;
            case 'vc_row':
                $type = 'section';
                break;
            case 'vc_row_inner':
                $type = 'section';
                break;
            case 'vc_column':
                $type = 'column';
                break;
            case 'vc_column_inner':
                $type = 'column';
                break;
            default;
                $type = 'widget';
        }

        return $type;
    }

    function change_element_settings($settings, $element_type, $widget_type)
    {

        $type = ($element_type === 'widget') ? $widget_type : $element_type;

        $element_map = (!empty($this->vc_elements[$type]) ? $this->vc_elements[$type] : array());

        if ($element_type === 'column') {
            $element_map = $this->vc_elements['vc_column'];
        }

        if (empty($settings)) $settings = array();

        if ($widget_type === 'vc_column' || $widget_type === 'vc_column_inner') {
            $element_map = $this->vc_elements['vc_column'];
        }

        if ($widget_type === 'vc_row' || $widget_type === 'vc_row_inner') {
            $element_map = $this->vc_elements['vc_row'];
        }

        if ($widget_type === 'vc_section') {
            $element_map = $this->vc_elements['vc_section'];
        }

        if (method_exists('CEW_Patch_Widget_Settings', $element_type)) $settings = CEW_Patch_Widget_Settings::$element_type($settings, $element_map);

        return $settings;
    }

    static function generate_id()
    {
        return substr(uniqid(), 6, 7);
    }

}

function cew($r)
{
    echo '<pre style="white-space: pre-wrap;">';
    print_r($r);
    echo '</pre>';
}