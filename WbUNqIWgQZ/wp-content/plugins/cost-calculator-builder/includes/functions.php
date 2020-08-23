<?php
/**
 * Update calculator
 * @param $data array
 * @return boolean
 */
function ccb_update_calc_values($data)
{
    if (isset($data['id'])) {
        $title = !empty($data['title']) ? $data['title'] : __('empty name', 'cost-calculator-builder');

        wp_update_post(['ID' => $data['id'], 'post_title' => $title]);
        update_option('stm_ccb_form_settings_' . $data['id'], $data['settings']);

        update_post_meta($data['id'], 'stm-name', $title);
        update_post_meta($data['id'], 'stm-formula', !empty($data['formula']) ? $data['formula'] : []);
        update_post_meta($data['id'], 'stm-fields', !empty($data['builder']) ? $data['builder'] : []);
        update_post_meta($data['id'], 'stm-conditions', !empty($data['conditions']) ? $data['conditions'] : []);

        $styles = isset($data['styles'])
            ? $data['styles'] : !empty(get_post_meta($data['id'], 'ccb-custom-styles', true))
            ? get_post_meta($data['id'], 'ccb-custom-styles', true) : \cBuidler\Classes\CCBCustomFields::custom_default_styles();

        $fields = isset($data['fields'])
            ? $data['styles'] : !empty(get_post_meta($data['id'], 'ccb-custom-fields', true))
                ? get_post_meta($data['id'], 'ccb-custom-fields', true) : \cBuidler\Classes\CCBCustomFields::custom_fields();

        update_post_meta($data['id'], 'ccb-custom-styles', $styles);
        update_post_meta($data['id'], 'ccb-custom-fields',  $fields);

        return true;
    }

    return false;
}

/**
 *  Get All Calculators
 * @param $post_type string
 * @return mixed|array
 */
function ccb_calc_get_all_posts($post_type)
{
    $args = array(
        'posts_per_page' => -1,
        'post_type' => $post_type,
        'post_status' => array('publish')
    );

    $resources = new WP_Query($args);

    $resources_json = array();

    if ($resources->have_posts()) {
        while ($resources->have_posts()) {
            $resources->the_post();
            $id = get_the_ID();
            $resources_json[$id] = get_the_title();
        }
    }

    return $resources_json;
}


/**
 * Parse settings by $calc_id
 * @param $settings
 * @return array
 */

function ccb_parse_settings($settings)
{
    $currency  = isset($settings['currency']['currency']) ? $settings['currency']['currency'] : '$';

    return  [
        'currency'            => $currency,
        'num_after_integer'   => isset($settings['currency']['num_after_integer'])   ? $settings['currency']['num_after_integer'] : 2,
        'decimal_separator'   => isset($settings['currency']['decimal_separator'])   ? $settings['currency']['decimal_separator'] : '.',
        'thousands_separator' => isset($settings['currency']['thousands_separator']) ? $settings['currency']['thousands_separator'] : ',',
        'currency_position'   => isset($settings['currency']['currencyPosition'])    ? $settings['currency']['currencyPosition'] : 'left_with_space',
    ];
}

/**
 * WooCommerce Products
 * @return array
 */
function ccb_woo_products()
{
    return get_posts([
        'post_type' => 'product',
        'posts_per_page' => -1
    ]);
}

/**
 * Contact Form 7 Forms
 * @return array
 */
function ccb_contact_forms()
{
    $contactForms = get_posts([
        'post_type' => 'wpcf7_contact_form',
        'posts_per_page' => -1
    ]);

    $forms = [];
    if (count($contactForms)) {
        foreach ($contactForms as $contactForm) {
            $forms[] = [
                'id' => $contactForm->ID,
                'title' => $contactForm->post_title
            ];
        }
    }

    return $forms;
}

/**
 * Check active Add-on
 * @return bool
 */
function ccb_pro_active()
{
    return (defined("CCB_PRO_VERSION")) ? true : false;
}

function ccb_all_calculators()
{
    $lists = array(esc_html__('select', 'cost-calculator-builder') => 'Select');
    $args = array(
        'post_type' => 'cost-calc',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );
    $data = new \WP_Query( $args );
    $data = $data->posts;

    if(count($data) > 0)
        foreach ($data as $value)
            $lists[$value->ID] = $value->post_title;

    return $lists;
}