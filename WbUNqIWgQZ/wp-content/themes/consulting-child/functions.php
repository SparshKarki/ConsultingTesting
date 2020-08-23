<?php

add_action( 'wp_enqueue_scripts', 'consulting_child_enqueue_parent_styles');

function consulting_child_enqueue_parent_styles() {

	wp_enqueue_style( 'consulting-style', get_template_directory_uri() . '/style.css', array( 'bootstrap' ), CONSULTING_THEME_VERSION, 'all' );

    $skin = get_theme_mod('site_skin', 'skin_default');
    if ($skin == 'skin_default') {
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'consulting-layout' ), CONSULTING_THEME_VERSION, 'all' );
    } else {
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'consulting-layout', 'stm-skin-custom-generated' ), CONSULTING_THEME_VERSION, 'all' );
    }

}