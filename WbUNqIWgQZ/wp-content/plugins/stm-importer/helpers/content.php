<?php
function stm_theme_import_content($layout, $builder)
{
    set_time_limit(0);

    if (!defined('WP_LOAD_IMPORTERS')) {
        define('WP_LOAD_IMPORTERS', true);
    }

    require_once(STM_CONFIGURATIONS_PATH . '/wordpress-importer/wordpress-importer.php');

    $wp_import = new WP_Import();
    $wp_import->fetch_attachments = true;

    if($builder === 'elementor') {
        consulting_upload_placeholder();
        $ready = prepare_demo($builder . '-' . $layout);
    } else {
        $ready = prepare_demo($layout);
    }



    if ($ready) {
        ob_start();
        $wp_import->import($ready);
        ob_end_clean();
    }

}

function prepare_demo($layout)
{
    $tempDir = get_temp_dir();
    $fzip = $tempDir . $layout . '.zip';
    $fxml = $tempDir . $layout . '.xml';

    if (file_exists($fxml)) {
        return $fxml;
    }

    global $wp_filesystem;
    if (empty($wp_filesystem)) {
        require_once ABSPATH . '/wp-admin/includes/file.php';
        WP_Filesystem();
    }

    $response = wp_remote_get(get_package($layout, 'zip'), array('timeout' => 30));
    if (is_wp_error($response)) {
        return false;
    }
    $body = wp_remote_retrieve_body($response);

    // file_get_contents if body is empty.
    if (empty($body)) {
        if (function_exists('ini_get') && ini_get('allow_url_fopen')) {
            $body = @file_get_contents(get_package($layout, 'zip'));
        }
    }

    if (!$wp_filesystem->put_contents($fzip, $body)) {
        @unlink($fzip);
        $fp = @fopen($fzip, 'w');

        @fwrite($fp, $body);
        @fclose($fp);
    }

    if (class_exists('ZipArchive')) {
        $zip = new ZipArchive();
        if (true === $zip->open($fzip)) {
            $zip->extractTo($tempDir);
            $zip->close();
            return $fxml;
        }
    }

    $unzip = unzip_file($fzip, $tempDir);
    if ($unzip) {
        return $fxml;
    }

    return false;
}

function consulting_upload_placeholder() {

    $placeholder = consulting_importer_get_placeholder();
    if(empty($placeholder)) {

        global $wp_filesystem;

        if (empty($wp_filesystem)) {
            require_once ABSPATH . '/wp-admin/includes/file.php';
            WP_Filesystem();
        }

        $image_url = 'http://consulting.stylemixthemes.com/demo/wp-content/uploads/2016/06/placeholder.gif';

        $upload_dir = wp_upload_dir();

        $placeholder_path = STM_CONFIGURATIONS_PATH . '/assets/images/placeholder.gif';
        $image_data = $wp_filesystem->get_contents($placeholder_path);

        $filename = basename($image_url);

        if (wp_mkdir_p($upload_dir['path'])) {
            $file = $upload_dir['path'] . '/' . $filename;
        } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
        }
        $wp_filesystem->put_contents($file, $image_data, FS_CHMOD_FILE);
//        file_put_contents($file, $image_data);

        $wp_filetype = wp_check_filetype($filename, null);

        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => sanitize_file_name($filename),
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $attach_id = wp_insert_attachment($attachment, $file);
        update_post_meta($attach_id, '_wp_attachment_image_alt', 'consulting_placeholder');
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attach_data = wp_generate_attachment_metadata($attach_id, $file);
        wp_update_attachment_metadata($attach_id, $attach_data);
    }
}

function consulting_importer_get_placeholder()
{
    $placeholder_id = 0;
    $placeholder_array = get_posts(
        array(
            'post_type' => 'attachment',
            'posts_per_page' => 1,
            'meta_key' => '_wp_attachment_image_alt',
            'meta_value' => 'consulting_placeholder'
        )
    );
    if ($placeholder_array) {
        foreach ($placeholder_array as $val) {
            $placeholder_id = $val->ID;
        }
    }
    return $placeholder_id;
}

function consulting_import_rebuilder_elementor_data(&$data) {

    $placeholder_id = consulting_importer_get_placeholder();
    $placeholder_url = wp_get_attachment_image_src($placeholder_id, 'full');
    $placeholder_url = $placeholder_url[0];
    $placeholder = array(
        'id' => $placeholder_id,
        'url' => $placeholder_url,
    );

    if(!empty($data)) {
        $data = json_decode(wp_unslash($data), true);


        consulting_import_rebuilder_elementor_data_walk($data, $placeholder_id, $placeholder_url, $placeholder);

    }

}

function consulting_import_rebuilder_elementor_data_walk(&$data_arg, $placeholder_id, $placeholder_url, $placeholder) {

    if(is_array($data_arg)) {

        foreach($data_arg as &$args) {

            if(!empty($args['url']) and !empty($args['id'])) {
                $args = $placeholder;
            }

            if(!empty($args['url']) and empty($args['id'])) {
                $localhost = 'http://consulting.loc';
                $host = get_bloginfo('url');
                $args['url'] = str_replace($localhost, $host, $args['url']);
            }

            consulting_import_rebuilder_elementor_data_walk($args, $placeholder_id, $placeholder_url, $placeholder);
        }
    }
}