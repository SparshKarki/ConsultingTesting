<?php

//Json stocks index symbols
function consulting_get_stocks_indexes_symbols() {

    $transient_name = 'consulting_get_stocks_indexes_symbols';
    $json = get_transient($transient_name);
    if (false === $json) {
        $path = get_template_directory() . '/inc/stock-indexes/stock-indexes.json';
        $json = json_decode(consulting_get_local_file_contents($path), true);
        set_transient($transient_name, $json);
    }

    return $json;
}

//Yahoo API symbols settings
function consulting_currencies_stocks_api($indexes) {
    return apply_filters('consulting_currencies_stocks_api', array(), $indexes);
}

//Send to ajax
function stm_get_prices() {
    check_ajax_referer('stm_get_prices', 'security');
    $r = array();
    $indexes = (!empty($_GET['indexes'])) ? sanitize_text_field($_GET['indexes']) : '';
    if(!empty($indexes)) {
        $indexes = explode(', ', $indexes);
        $r = consulting_currencies_stocks_api($indexes);
    }
    wp_send_json($r);
}

add_action( 'wp_ajax_stm_get_prices', 'stm_get_prices' );
add_action( 'wp_ajax_nopriv_stm_get_prices', 'stm_get_prices' );

//Yahoo API symbols and dates settings
function consulting_currencies($indexes, $range='1d', $interval='1h', $fill_color, $point_color){

    $result = array();
    $result = consulting_generate_result(apply_filters('consulting_currencies', $result, $indexes, $range, $interval, $fill_color, $point_color));

    return ($result);
}

function consulting_generate_result($result) {

    $response = array();


    foreach($result as $item => $value) {

        $close_prices = $result[$item]['indicators']['quote'][0]['close'];
        $timestamps = $result[$item]['timestamp'];
        $fill_color = $result[$item]['fill_color'];
        $point_color = $result[$item]['point_color'];
        $labels = array();
        foreach ($timestamps as $timestamp) {
            $labels[] = date_i18n('D h:i', $timestamp);
        }
        $key = $value['meta']['symbol'];
        $response['indexes'][] = [
            'label' => $key,
            'data' => $close_prices,
            'backgroundColor' => $fill_color,
            'borderColor' => $point_color,
            'pointRadius' => 0,
            'borderWidth' => 1,
        ];

        $response['labels'] = $labels;
    }

    return $response;
}

//Send history to ajax
function stm_get_history() {
    check_ajax_referer('stm_get_history', 'security');
    $r = array();
    $indexes = (!empty($_GET['indexes'])) ? sanitize_text_field($_GET['indexes']) : '';
    $range = (!empty($_GET['range'])) ? sanitize_text_field($_GET['range']) : '1d';
    $interval = (!empty($_GET['interval'])) ? sanitize_text_field($_GET['interval']) : '1h';
    $fill_color = (!empty($_GET['fill_color'])) ? sanitize_text_field($_GET['fill_color']) : '';
    $point_color = (!empty($_GET['point_color'])) ? sanitize_text_field($_GET['point_color']) : '';
    if(!empty($indexes)) {
        $indexes = explode(', ', $indexes);
        $fill_color = explode(', ', $fill_color);
        $point_color = explode(', ', $point_color);
        $r = consulting_currencies($indexes, $range, $interval, $fill_color, $point_color);
    }

    wp_send_json($r);
}

add_action( 'wp_ajax_stm_get_history', 'stm_get_history' );
add_action( 'wp_ajax_nopriv_stm_get_history', 'stm_get_history' );