<?php

if(!defined('ABSPATH')) exit;

function cBuilder_admin_enqueue() {

    if(isset($_GET['page']) && ($_GET['page'] === 'cost_calculator_builder' || $_GET['page'] === 'cost_calculator_custom')) {

        if($_GET['page'] === 'cost_calculator_custom')
            wp_enqueue_style('ccb-ion-css', CALC_URL . '/frontend/dist/css/ionicons.min.css', [], CALC_VERSION);

        wp_enqueue_style('ccb-bootstrap-css', CALC_URL . '/frontend/dist/css/bootstrap.min.css', [], CALC_VERSION);
        wp_enqueue_style('ccb-awesome-css', CALC_URL . '/frontend/dist/css/all.min.css', [], CALC_VERSION);
        wp_enqueue_style('ccb-front-app-css', CALC_URL . '/frontend/dist/bundle.css', [], CALC_VERSION);

        wp_enqueue_script('cbb-bundle-js', CALC_URL . '/frontend/dist/bundle.js', [], CALC_VERSION);
        wp_localize_script( 'cbb-bundle-js', 'ajax_window',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    }
}

add_action('admin_enqueue_scripts', 'cBuilder_admin_enqueue', 1);