<?php
function stm_set_content_options( $layout, $builder ) {
    /*Set menus*/
    $locations = get_theme_mod( 'nav_menu_locations' );
    $menus     = wp_get_nav_menus();

    if ( ! empty( $menus ) ) {
        foreach ( $menus as $menu ) {
            if ( is_object( $menu ) ) {
                $menu_names = array(
                    'Main',
                    'Menu 1',
                    'Header menu',
                    'Main menu',
                    'Main Menu',
                    'Top menu',
                );
                $menu_name  = $menu->name;
                if ( in_array( $menu_name, $menu_names ) ) {
                    $locations[ 'consulting-primary_menu' ] = $menu->term_id;
                    //stm_change_builder_menu( $menu->term_id, $menu_name, $layout );
                    stm_import_megamenu_fields( $layout, $menu_name );
                }
            }
        }
    }

    set_theme_mod( 'nav_menu_locations', $locations );

    //Set pages
    update_option( 'show_on_front', 'page' );

    $possible_home_pages = array(
        'Front page',
        'Home'
    );

    foreach($possible_home_pages as $home_page) {
        $front_page = get_page_by_title($home_page);
        if (isset($front_page->ID)) {
            update_option('page_on_front', $front_page->ID);
        }
    }

    $possible_blog_pages = array(
        'Events',
        'Success Stories',
        'Blog',
        'News',
    );

    foreach ( $possible_blog_pages as $blog_page ) {
        $blog_page = get_page_by_title( $blog_page );
        if ( isset( $blog_page->ID ) ) {
            update_option( 'page_for_posts', $blog_page->ID );
        }
    }

    stm_demo_booked_dates();

    $shop_page = get_page_by_title( 'shop' );
    if ( isset( $shop_page->ID ) ) {
        update_option( 'woocommerce_shop_page_id', $shop_page->ID );
        update_option( 'shop_catalog_image_size[width]', 175 );
        update_option( 'shop_catalog_image_size[height]', 258 );
        update_option( 'shop_single_image_size[width]', 175 );
        update_option( 'shop_single_image_size[height]', 258 );
        update_option( 'shop_thumbnail_image_size[width]', 54 );
        update_option( 'shop_thumbnail_image_size[height]', 79 );
    }
    $checkout_page = get_page_by_title( 'checkout' );
    if ( isset( $checkout_page->ID ) ) {
        update_option( 'woocommerce_checkout_page_id', $checkout_page->ID );
    }
    $cart_page = get_page_by_title( 'cart' );
    if ( isset( $cart_page->ID ) ) {
        update_option( 'woocommerce_cart_page_id', $cart_page->ID );
    }
    $account_page = get_page_by_title( 'my account' );
    if ( isset( $account_page->ID ) ) {
        update_option( 'woocommerce_myaccount_page_id', $account_page->ID );
    }

    //stm_set_icon_sets( $layout );
    $fxml = get_temp_dir() . $layout . '.xml';
    $fzip = get_temp_dir() . $layout . '.zip';
    if( file_exists($fxml) ) @unlink($fxml);
    if( file_exists($fzip) ) @unlink($fzip);


    if($builder === 'elementor') {
        Elementor\Plugin::$instance->files_manager->clear_cache();
    }

}

function stm_change_builder_menu( $menu_id, $menu_name, $layout ) {

    $menu_config = false;
    $layout_config = consulting_config();
    $layout_config = $layout_config[ $layout ];
    $theme_options = get_option( 'stm_theme_options' );

    if (isset($layout_config[ 'menu' ])){
        $menu_config   = $layout_config[ 'menu' ][ $menu_name ];
        $to_row        = $menu_config[ 'row' ];
        $to_col        = $menu_config[ 'col' ];
        $menu_pos      = $theme_options[ 'header_builder' ][ $to_row ][ $to_col ];
    }


    if (!empty($menu_config)) {
        foreach ( $menu_pos as $element_key => $element ) {
            if ( ! empty( $element[ 'type' ] ) and $element[ 'type' ] == 'menu' ) {
                $theme_options[ 'header_builder' ][ $to_row ][ $to_col ][ $element_key ][ 'data' ][ 'id' ] = $menu_id;
            }
        }
    } else {
        foreach($theme_options['header_builder'] as $row_key => $row) {

            foreach($row as $column_key => $column) {
                foreach($column as $element_key => $element) {
                    if(!empty($element['type']) and $element['type'] == 'menu' && $row == $menu_config['row'] && $column == $menu_config['col']) {
                        $theme_options['header_builder'][$row_key][$column_key][$element_key]['data']['id'] = $menu_id;
                    }
                }
            }
        }
    }

    update_option( 'stm_theme_options', $theme_options );
}

function stm_demo_booked_dates() {
    $dates = array(
        'Mon'         => array( '0900-1000' => 5 ),
        'Mon-details' => array( '0900-1000' => array( 'title' => 'Develop the next-generation technology', ) ),
        'Tue'         => array( '0900-1000' => 5 ),
        'Tue-details' => array( '0900-1000' => array( 'title' => 'Develop the next-generation technology', ) ),
        'Wed'         => array( '0900-1000' => 5 ),
        'Wed-details' => array( '0900-1000' => array( 'title' => 'Develop the next-generation technology', ) ),
        'Thu'         => array( '0900-1000' => 5 ),
        'Thu-details' => array( '0900-1000' => array( 'title' => 'Develop the next-generation technology', ) ),
        'Fri'         => array( '0900-1000' => 5 ),
        'Fri-details' => array( '0900-1000' => array( 'title' => 'Develop the next-generation technology', ) ),
        'Sat'         => array( '0900-1000' => 5 ),
        'Sat-details' => array( '0900-1000' => array( 'title' => 'Develop the next-generation technology', ) ),
    );

    update_option( 'booked_defaults', $dates );


    /*Colors*/
    $colors = array(
        'booked_light_color'  => '#002e5b',
        'booked_button_color' => '#6c98e1',
        'booked_dark_color'   => '#6c98e1',
    );

    foreach ( $colors as $color_name => $color ) {
        update_option( $color_name, $color );
    }
}

function stm_set_icon_sets( $layout ) {
    $fonts = get_option( 'stm_fonts_layout' );
    if ( ! empty( $fonts ) ) {
        if ( ! empty( $fonts[ 'stmicons_' . $layout ] ) ) {
            $fonts[ 'stmicons_' . $layout ][ 'enabled' ] = true;
        }
    }

    update_option( 'stm_fonts_layout', $fonts );
}

function stm_import_megamenu_fields( $layout, $menu_name ) {
    $menu   = wp_get_nav_menu_items( $menu_name );
    $config = stm_get_megamenu_config( $layout );

    if ( ! empty( $config ) ) {
        foreach ( $menu as $menu_item ) {
            if ( ! empty( $config[ $menu_item->title ] ) ) {
                $id       = $menu_item->ID;
                $configer = $config[ $menu_item->title ];
                foreach ( $configer as $meta_key => $meta_value ) {
                    update_post_meta( $id, '_menu_item_' . $meta_key, $meta_value );
                }
            }
        }
    }
}
