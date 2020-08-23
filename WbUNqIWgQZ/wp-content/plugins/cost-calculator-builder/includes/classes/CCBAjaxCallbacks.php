<?php

namespace cBuidler\Classes;

class CCBAjaxCallbacks
{

    /**
     * Get Default Data
     */
    public static function edit_calc()
    {

        $result = [
            'id' => '',
            'title' => '',
            'forms' => [],
            'fields' => [],
            'builder' => [],
            'formula' => [],
            'settings' => [],
            'products' => [],
            'conditions' => [],
            'success' => false,
            'custom_styles' => [],
            'custom_fields' => [],
            'message' => __('There is no calculator with this id', 'cost-calculator-builder')
        ];

        if (isset($_GET['calc_id'])) {
            $calc_id = $_GET['calc_id'];

            $result['id'] = $calc_id;
            $result['title'] = get_post_meta($calc_id, 'stm-name', true);
            $result['fields'] = CCBSettingsData::fields_data();
            $result['formula'] = get_post_meta($calc_id, 'stm-formula', true);
            $result['conditions'] = get_post_meta($calc_id, 'stm-conditions', true);
            $result['existing'] = self::get_calculator_list();

            $result['builder'] = !empty(get_post_meta($calc_id, 'stm-fields', true))
                ? get_post_meta($calc_id, 'stm-fields', true)
                : [];

            $result['custom_styles'] = empty(get_post_meta($calc_id, 'ccb-custom-styles', true))
                ? CCBCustomFields::custom_default_styles() : get_post_meta($calc_id, 'ccb-custom-styles', true);

            $result['custom_fields'] = empty(get_post_meta($calc_id, 'ccb-custom-fields', true))
                ? CCBCustomFields::custom_fields() : get_post_meta($calc_id, 'ccb-custom-fields', true);

            /* pro-features */
            $result['forms'] = ccb_contact_forms();
            $result['products'] = ccb_woo_products();

            $settings = get_option('stm_ccb_form_settings_' . $calc_id);
            if(!empty($settings) && isset($settings[0]) && isset($settings[0]['general']))
                $settings = $settings[0];

            if (!empty($settings))
                $result['settings'] = $settings;

           if(!is_array($result['settings']) || empty($result['settings']['general']))
               $result['settings'] = CCBSettingsData::settings_data();

            if(!empty($result['settings']['formFields']['body']))
                $result['settings']['formFields']['body'] = str_replace('<br>', PHP_EOL, $result['settings']['formFields']['body']);

            $result['success'] = true;
            $result['message'] = '';
        }

        // send data
        wp_send_json($result);
    }

    /**
     * Get Default
     */

    public static function duplicate_calc()
    {
        $result = [
            'existing' => [],
            'success' => false,
            'message' => __("Couldn't duplicate calculator, please try again!', 'cost-calculator-builder"),
        ];

        if (!empty($_GET['calc_id'])) {
            $calc_id = $_GET['calc_id'];

            $my_post = [
                'post_type' => 'cost-calc',
                'post_status' => 'publish',
            ];

            // get id
            $id = wp_insert_post($my_post);

            $data = [
                'id' => $id,
                'title' => get_post_meta($calc_id, 'stm-name', true),
                'formula' => get_post_meta($calc_id, 'stm-formula', true),
                'settings' => get_option('stm_ccb_form_settings_' . $calc_id, true),
                'builder' => get_post_meta($calc_id, 'stm-fields', true),
                'condition' => get_post_meta($calc_id, 'stm-conditions', true),
                'styles' => get_post_meta($calc_id, 'ccb-custom-styles', true),
                'fields' => get_post_meta($calc_id, 'ccb-custom-fields', true),
            ];

            if (ccb_update_calc_values($data)) {
                $result['success'] = true;
                $result['existing'] = self::get_calculator_list();
                $result['message'] = __('Calculator duplicated successfully', 'cost-calculator-builder');
            }

        }

        wp_send_json($result);
    }

    /**
     *  Generate calc id(create cost-calc post) and send
     */
    public static function create_calc_id()
    {
        // create cost-calc post and get id
        $id = wp_insert_post([
            'post_type' => 'cost-calc',
            'post_status' => 'publish',
        ]);
        // send data
        wp_send_json([
            'id' => $id,
            'success' => true,
            'forms' => ccb_contact_forms(),
            'products' => ccb_woo_products(),
            'fields' => CCBSettingsData::fields_data(),
        ]);
    }

    /**
     * Delete calc by id
     */
    public static function delete_calc()
    {
        $result = [
            'success' => false,
            'existing' => [],
            'message' => __("Couldn't delete calculator, please try again!', 'cost-calculator-builder"),
        ];

        if (isset($_GET['calc_id'])) {

            $calc_id = $_GET['calc_id'];
            wp_delete_post($calc_id);
            delete_post_meta($calc_id, 'cost-calc');

            $result['success'] = true;
            $result['existing'] = self::get_calculator_list();
            $result['message'] = __('Calculator deleted successfully', 'cost-calculator-builder');
        }

        wp_send_json($result);
    }

    /**
     * Save Custom Styles
     */
    public static function save_custom()
    {
        $result = [
            'success' => false,
            'message' => 'Something went wrong',
        ];

        if (isset($_POST['action']) && $_POST['action'] === 'save_custom' && isset($_POST['data'])) {
            if (is_string($_POST['data'])) {
                $data = json_decode(str_replace('\\', '', $_POST['data']), true);

                $fields = isset($data['fields']) ? $data['fields'] : CCBCustomFields::custom_fields();
                $styles = isset($data['styles']) ? $data['styles'] : CCBCustomFields::custom_default_styles();

                update_post_meta($data['id'], 'ccb-custom-fields', $fields);
                update_post_meta($data['id'], 'ccb-custom-styles',  $styles);

                $result['success'] = true;
                $result['message'] = 'Custom Changes Saved successfully';
            }
        }

        wp_send_json($result);
    }

    /**
     * Get All existing calculator
     */
    public static function get_existing()
    {
        $result = [
            'forms' => [],
            'existing' => [],
        ];

        if (is_array(self::get_calculator_list())) {
            $result['success'] = true;
            $result['existing'] = self::get_calculator_list();

            /* pro-features */
            $result['forms'] = ccb_contact_forms();
            $result['products'] = ccb_woo_products();
        }

        wp_send_json($result);
    }

    /**
     * Save all calculator settings via calc id
     */
    public static function save_settings()
    {
        $result = [
            'existing' => [],
            'success' => false,
            'message' => 'Something went wrong',
        ];

        if (isset($_POST['action']) && $_POST['action'] === 'save_settings') {

            $data = $_POST;

            foreach ($data as $key => $value) {
                if (!in_array($key, ['id', 'title', 'action'])) {
                    $data[$key] = str_replace('\n',  '<br>', $value);
                    $data[$key] = json_decode(str_replace('\\', '', $data[$key]), true);
                }
            }

            if (!empty($data) && ccb_update_calc_values($data)) {
                $result['success'] = true;
                $result['message'] = 'Calculator updated successfully';
                $result['existing'] = self::get_calculator_list();
            }
        }

        wp_send_json($result);
    }

    /**
     * Return ready array for response
     * @return array
     */
    public static function get_calculator_list()
    {
        $result = [];
        $existing = ccb_calc_get_all_posts('cost-calc');

        if (is_array($existing)) {
            foreach (ccb_calc_get_all_posts('cost-calc') as $key => $value) {

                $temp = [];
                $temp['id'] = $key;
                $temp['project_name'] = !empty($value) ? $value : 'name is empty';

                $result[] = $temp;
            }
        }
        return $result;
    }


    public static function demo_import_apply()
    {
        $file_name = "cost_calculator_data.txt";
        $file = CALC_PATH . "/demo-sample/" . $file_name;
        $info_data = [];

        if (file_exists($file)) {
            $contents = file_get_contents($file);
            $contents = json_decode($contents, true);
            $info_data['calculators'] = count($contents);
        }
        wp_send_json($info_data);
    }

    public static function demo_import_run()
    {
        $result = [
            "success" => true,
            "step" => null,
            "key" => 0,
        ];

        $request_data = [];
        if (is_string($_POST['data']))
            $request_data = json_decode(str_replace('\\', '', $_POST['data']), true);


        $file_name = "cost_calculator_data.txt";
        $file = CALC_PATH . "/demo-sample/" . $file_name;

        if (isset($request_data['step']) && isset($request_data['key'])) {
            $result['step'] = $request_data['step'];
            $result['key'] = $request_data['key'];

            $contents = null;
            $result['success'] = false;

            if (file_exists($file) && empty($request_data['is_custom_import'])) {

                $contents = file_get_contents($file);
                $contents = json_decode($contents, true);

            } elseif (!empty($request_data['is_custom_import']) && !empty(get_option('ccb_demo_import_content'))) {
                $contents = get_option('ccb_demo_import_content');
                $contents = is_string($contents) ? json_decode($contents) : $contents;
            }

            $contents = json_decode(json_encode($contents), true);
            $item = $contents[$result['key']];

            if (!empty($item['stm-fields']) && count($item['stm-fields']) > 0) {

                $title = !empty($item['stm-name']) ? sanitize_text_field($item['stm-name']) : 'empty';
                $my_post = array(
                    'post_type' => 'cost-calc',
                    'post_title' => $title,
                    'post_status' => 'publish',
                );

                $id = wp_insert_post($my_post);
                update_post_meta($id, 'stm-fields', isset($item['stm-fields']) ? (array)$item['stm-fields'] : []);
                update_post_meta($id, 'stm-formula', isset($item['stm-formula']) ? (array)$item['stm-formula'] : []);
                update_post_meta($id, 'stm-conditions', isset($item['stm-conditions']) ? (array)$item['stm-conditions'] : []);
                update_post_meta($id, 'ccb-custom-fields', isset($item['ccb-custom-fields']) ? (array)$item['ccb-custom-fields'] : []);
                update_post_meta($id, 'ccb-custom-styles', isset($item['ccb-custom-styles']) ? (array)$item['ccb-custom-styles'] : []);
                update_post_meta($id, 'stm-name', isset($item['stm-name']) ? sanitize_text_field($item['stm-name']) : 'empty');


                $item['stm_ccb_form_settings'] = (array)$item['stm_ccb_form_settings'];
                update_option('stm_ccb_form_settings_' . $id, $item['stm_ccb_form_settings']);

                $result['key']++;
                $result['data'] = "Create Calculator: " . $title;
                $result['success'] = true;
                $result['existing'] = self::get_calculator_list();
            }
        }

        wp_send_json($result);
    }

    public static function custom_demo_import()
    {
        $result = [
            'message' => [],
            'success' => false,
        ];

        $files = $_FILES;

        if (!empty($files['file']) && file_exists($files['file']['tmp_name'])) {
            $content = file_get_contents($files['file']['tmp_name']);
            $content = is_string($content) ? json_decode($content) : $content;

            if (is_array($content)) {
                $result['success'] = true;
                $result['message']['calculators'] = count($content);
                $content = json_encode($content);
                update_option('ccb_demo_import_content', sanitize_text_field($content));
            }
        }

        wp_send_json($result);
    }

    public static function ccb_export_calc_callback()
    {
        if (wp_verify_nonce($_REQUEST['ccb_nonce'], 'ccb-export-nonce')) {

            $posts = new \WP_Query([
                'post_type' => 'cost-calc',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            ]);

            if (count($posts->posts) > 0) {
                $data = [];
                $i = 0;

                foreach ($posts->posts as $post) {

                    if (isset($post->ID)) {
                        $post_store = get_post_meta($post->ID);
                        $data[$i] = [];
                        $data[$i]['stm-name'] = $post_store['stm-name'][0];
                        $data[$i]['stm-fields'] = unserialize($post_store['stm-fields'][0]);
                        $data[$i]['stm-formula'] = unserialize($post_store['stm-formula'][0]);
                        $data[$i]['stm-conditions'] = unserialize($post_store['stm-conditions'][0]);
                        $data[$i]['ccb-custom-styles'] = unserialize($post_store['ccb-custom-styles'][0]);
                        $data[$i]['ccb-custom-fields'] = unserialize($post_store['ccb-custom-fields'][0]);
                        $data[$i]['stm_ccb_form_settings'] = isset(get_option('stm_ccb_form_settings_' . $post->ID)[0]) ? get_option('stm_ccb_form_settings_' . $post->ID)[0] : get_option('stm_ccb_form_settings_' . $post->ID);
                        $i++;
                    }
                }
                $data = json_encode($data);
                header('Content-Description: File Transfer');
                header('Content-Disposition: attachment; filename=' . 'cost_calculator_data.txt');
                header('Content-Type: text/xml; charset=' . get_option('blog_charset'), true);
                echo sanitize_text_field($data);
                die();
            }
        }
    }
}  