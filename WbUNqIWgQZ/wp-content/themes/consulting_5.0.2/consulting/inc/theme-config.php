<?php
if (!function_exists('consulting_config')) {
    function consulting_config()
    {

        $config = array();
        $consulting_layout = get_option('consulting_layout');

        $config['layout'] = ((!empty($consulting_layout)) ? $consulting_layout : 'layout_1');
        $config['fonts'] = '';

        switch ($config['layout']) {
            case 'layout_geneva':
                $config['primary_font_family'] = 'Montserrat';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.heading_font,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#333333';
                $config['secondary_color'] = '#ff3833';
                $config['third_color'] = '#ff3833';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_melbourne':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p,
					.testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .stm_testimonial_excerpt p';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Poppins:300,400,500,600,700'
                );

                $config['base_color'] = '#002e5b';
                $config['secondary_color'] = '#6c98e1';
                $config['third_color'] = '#fde428';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_lyon':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'DM Sans';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p,
					.testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .stm_testimonial_excerpt p';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'DM Sans:400,600,700'
                );

                $config['base_color'] = '#283043';
                $config['secondary_color'] = '#f47957';
                $config['third_color'] = '#0b86a8';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_stockholm':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p,
					.testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .stm_testimonial_excerpt p';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#222';
                $config['secondary_color'] = '#4a57fe';
                $config['third_color'] = '#3a57fe';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_ankara':
                $config['primary_font_family'] = 'Montserrat';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p,
					.testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .stm_testimonial_excerpt p';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#333333';
                $config['secondary_color'] = '#73c73b';
                $config['third_color'] = '#607d8b';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_budapest':
                $config['primary_font_family'] = 'Montserrat';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p,
					.testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .stm_testimonial_excerpt p';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#304156';
                $config['secondary_color'] = '#304157';
                $config['third_color'] = '#ffcf2f';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_osaka':
                $config['primary_font_family'] = 'Poppins';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p,
					.testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .stm_testimonial_excerpt p';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#333333';
                $config['secondary_color'] = '#5a4af5';
                $config['third_color'] = '#49aafe';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_barcelona':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p,
					.testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .stm_testimonial_excerpt p';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#222831';
                $config['secondary_color'] = '#4a57fe';
                $config['third_color'] = '#3a57fe';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_lisbon':
                $config['primary_font_family'] = 'Roboto';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong, normal-font';

                $config['secondary_font_family'] = 'Encode Sans Semi Expanded';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b, #header, .icon_box.style_5 .text_more, .heading-font, .stm_works_wr.grid_with_filter.style_1 .works_filter a, .vc_testimonials.style_3.navigation-arrows .vc_testimonials_carousel_wr .item>p';

                $config['fonts'] = array(
//                    'open_sans'  => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
//                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#222831';
                $config['secondary_color'] = '#7bc74d';
                $config['third_color'] = '#6bc74d';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_berlin':
                $config['primary_font_family'] = 'Poppins';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#002e5b';
                $config['secondary_color'] = '#6c98e1';
                $config['third_color'] = '#fde428';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_marseille':
                $config['primary_font_family'] = 'raleway';
                $config['primary_font_size'] = 13;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'raleway';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#000000';
                $config['secondary_color'] = '#3595d6';
                $config['third_color'] = '#3595d5';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_vienna':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 13;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#001a57';
                $config['secondary_color'] = '#297ee8';
                $config['third_color'] = '#fd9b28';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_milan':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 13;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Fira Sans';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#002e5b';
                $config['secondary_color'] = '#6c98e1';
                $config['third_color'] = '#fde428';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_new_delhi':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 15;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Oswald';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#00263b';
                $config['secondary_color'] = '#e5452b';
                $config['third_color'] = '#009aee';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_istanbul':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 13;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#2b212c';
                $config['secondary_color'] = '#fde428';
                $config['third_color'] = '#cba671';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_beijing':
                $config['primary_font_family'] = 'Poppins';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Lato';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#0b2a41';
                $config['secondary_color'] = '#a0ce4e';
                $config['third_color'] = '#a0ce3e';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_san_francisco':
                $config['primary_font_family'] = 'Muli';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Muli';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#1c1c1c';
                $config['secondary_color'] = '#fde428';
                $config['third_color'] = '#fde427';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_toronto':
                $config['primary_font_family'] = 'Muli';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Muli';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#1c1c1c';
                $config['secondary_color'] = '#ff7043';
                $config['third_color'] = '#ff7042';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_los_angeles':
                $config['primary_font_family'] = 'Poppins';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#002e5b';
                $config['secondary_color'] = '#6c98e1';
                $config['third_color'] = '#fde428';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_brussels':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#1e1c1b';
                $config['secondary_color'] = '#fd4f02';
                $config['third_color'] = '#fd4f01';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_denver':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Rajdhani';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#000000';
                $config['secondary_color'] = '#2c33d2';
                $config['third_color'] = '#e61e3a';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_davos':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Rajdhani';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#1c6876';
                $config['secondary_color'] = '#d79953';
                $config['third_color'] = '#d79952';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_amsterdam':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Cairo';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm-header__hb .stm-navigation__default ul li,
					.stm_contacts_widget,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#243238';
                $config['secondary_color'] = '#8fc8f8';
                $config['third_color'] = '#d7562d';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_mumbai':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Cairo';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#000000';
                $config['secondary_color'] = '#e3002a';
                $config['third_color'] = '#e3001a';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_zurich':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Roboto Slab';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#002e5b';
                $config['secondary_color'] = '#ff636a';
                $config['third_color'] = '#ff635a';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_20':
                $config['primary_font_family'] = 'Maven Pro';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'Catamaran,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Catamaran';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Maven+Pro:400,500,700',
                    'montserrat' => 'Catamaran:300,400,500,600,700'
                );

                $config['base_color'] = '#785e4d';
                $config['secondary_color'] = '#ff8426';
                $config['third_color'] = '#baaf92';


                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_19':
                $config['primary_font_family'] = 'Rubik';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#001040';
                $config['secondary_color'] = '#5f96ee';
                $config['third_color'] = '#ffa200';


                $config['base_rgb_color'] = array(
                    'rgb' => '0, 16, 64',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            case 'layout_18':
                $config['fonts'] = array(
                    'mirza' => 'Mirza:400,700&subset=arabic',
                    'mada' => 'Lalezar:400&subset=arabic'
                );

                $config['primary_font_family'] = 'Mirza';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body.site_layout_17 #footer .footer_widgets .widget.widget_nav_menu ul li a,
					.stm_normal_font,
					body .vc_general.vc_btn3 small,
					body.site_layout_15 .stats_counter .counter_title,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .position,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .company,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Lalezar';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.heading_font,
					body.site_layout_16 .stats_counter.style_2 .inner h3,
					body.site_layout_15 .stm_works_wr.style_1 .works_filter li a,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#260000';
                $config['secondary_color'] = '#911f27';
                $config['third_color'] = '#f7d098';


                $config['base_rgb_color'] = array(
                    'rgb' => '38, 0, 0',
                    'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '145, 31, 39',
                    'alpha' => array('0.9')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '247, 208, 152',
                    'alpha' => array('0.5')
                );

                break;
            case 'layout_17':
                $config['fonts'] = array(
                    'mirza' => 'Mirza:400,700&subset=arabic',
                    'mada' => 'Mada:300,400,900'
                );

                $config['primary_font_family'] = 'Mirza';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body.site_layout_17 #footer .footer_widgets .widget.widget_nav_menu ul li a,
					.stm_normal_font,
					body .vc_general.vc_btn3 small,
					body.site_layout_15 .stats_counter .counter_title,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .position,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .company,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Mada';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.heading_font,
					body.site_layout_16 .stats_counter.style_2 .inner h3,
					body.site_layout_15 .stm_works_wr.style_1 .works_filter li a,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#00032d';
                $config['secondary_color'] = '#f7825d';
                $config['third_color'] = '#f5e495';


                $config['base_rgb_color'] = array(
                    'rgb' => '0, 3, 45',
                    'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '247, 130, 93',
                    'alpha' => array('0.9')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '245, 228, 149',
                    'alpha' => array('0.5')
                );

                break;
            case 'layout_16':
                $config['fonts'] = array(
                    'rubik' => 'Rubik:300,400,700&subset=hebrew',
                    'alef' => 'Alef:400,700&subset=hebrew'
                );

                $config['primary_font_family'] = 'Rubik';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					.stm_normal_font,
					body .vc_general.vc_btn3 small,
					body.site_layout_15 .stats_counter .counter_title,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .position,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .company,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Alef';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.heading_font,
					body.site_layout_16 .stats_counter.style_2 .inner h3,
					body.site_layout_15 .stm_works_wr.style_1 .works_filter li a,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#000';
                $config['secondary_color'] = '#00bbcc';
                $config['third_color'] = '#10bbcc';


                $config['base_rgb_color'] = array(
                    'rgb' => '0, 0, 0',
                    'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '0, 187, 204',
                    'alpha' => array('0.9')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '0, 187, 204',
                    'alpha' => array('0.5')
                );

                break;
            case 'layout_15':
                $config['fonts'] = array(
                    'pt_serif' => 'PT Serif:400,700,700italic,400italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'merriweather' => 'Merriweather:400,300,400italic,700&subset=latin,latin-ext'
                );

                $config['primary_font_family'] = 'PT Serif';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					body.site_layout_15 .stats_counter .counter_title,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .position,
					body.site_layout_15 .testimonials_carousel.style_1:not(.disable_carousel) .testimonial .info .company,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Merriweather';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.heading_font,
					body.site_layout_15 .stm_works_wr.style_1 .works_filter li a,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#444036';
                $config['secondary_color'] = '#50c19a';
                $config['third_color'] = '#e4f68f';


                $config['base_rgb_color'] = array(
                    'rgb' => '68, 64, 54',
                    'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '80, 193, 154',
                    'alpha' => array('0.9')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '228, 246, 143',
                    'alpha' => array('0.5')
                );

                break;
            case 'layout_14':
                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
				    .testimonials_carousel .testimonial .info .position,
				    .testimonials_carousel .testimonial .info .company,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					body.site_layout_14 .testimonials_carousel.disable_carousel .testimonial .info .position,
					body.site_layout_14 .testimonials_carousel.disable_carousel .testimonial .info .company,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					body.site_layout_14 .header_top .stm_l14_h5-right .stm_l14_h5-wh .text a,
					body.site_layout_14 .info_box .read_more span,
					body.site_layout_14 .staff_list.grid ul li .staff_info .read_more span,
					.heading_font,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#2d4059';
                $config['secondary_color'] = '#ea5455';
                $config['third_color'] = '#ea5454';


                $config['base_rgb_color'] = array(
                    'rgb' => '45, 64, 89',
                    'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '234, 84, 85',
                    'alpha' => array('0.9')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '234, 84, 85',
                    'alpha' => array('0.5')
                );

                break;
            case 'layout_13':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					.testimonials_carousel .testimonial .info .position,
                    .testimonials_carousel .testimonial .info .company,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.stm_slider_title_reply,
					.heading-font,
					.testimonials_carousel .testimonial .info .stm_testimonials_content_unit,
					body.site_layout_13.header_style_4 .header_top .icon_text a,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#347a2a';
                $config['secondary_color'] = '#202e24';
                $config['third_color'] = '#b3c87a';


                $config['base_rgb_color'] = array(
                    'rgb' => '52, 122, 42',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '32, 46, 36',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '179, 200, 122',
                    'alpha' => ''
                );

                break;
            case 'layout_12':
                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'rubik' => 'Rubik:400,300,500,700,900&subset=latin,latin-ext'
                );

                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Rubik';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#002e5b';
                $config['secondary_color'] = '#6c98e1';
                $config['third_color'] = '#fde428';


                $config['base_rgb_color'] = array(
                    'rgb' => '0, 46, 91',
                    'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '108, 152, 225',
                    'alpha' => array('0.9')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '253, 228, 40',
                    'alpha' => array('0.5')
                );

                break;
            case 'layout_11':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#222831';
                $config['secondary_color'] = '#7bc74d';
                $config['third_color'] = '#6bc74d';


                $config['base_rgb_color'] = array(
                    'rgb' => '34, 40, 49',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '123, 199, 77',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '123, 199, 77',
                    'alpha' => ''
                );

                break;
            case 'layout_10':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong,
					body.header_style_4 .header_top .icon_text .text b,
					body.header_style_6 .top_bar_contacts_text strong,
					body.header_style_6 .top_bar_contacts_text b';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#17181d';
                $config['secondary_color'] = '#e33062';
                $config['third_color'] = '#e33061';


                $config['base_rgb_color'] = array(
                    'rgb' => '23, 24, 29',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.35')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '227, 48, 98',
                    'alpha' => array('0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '227, 48, 98',
                    'alpha' => ''
                );

                break;
            case 'layout_9':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#1e1f21';
                $config['secondary_color'] = '#fd9b28';
                $config['third_color'] = '#fd9b27';


                $config['base_rgb_color'] = array(
                    'rgb' => '30, 31, 33',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '253, 155, 40',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '253, 155, 40',
                    'alpha' => array('0.9', '0.5')
                );

                break;
            case 'layout_8':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong,
					body.header_style_4 .header_top .icon_text .text b,
					body.header_style_6 .top_bar_contacts_text strong,
					body.header_style_6 .top_bar_contacts_text b';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#29363b';
                $config['secondary_color'] = '#b2ac90';
                $config['third_color'] = '#f15822';


                $config['base_rgb_color'] = array(
                    'rgb' => '41, 54, 59',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.35')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '178, 172, 144',
                    'alpha' => array('0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '241, 88, 34',
                    'alpha' => ''
                );

                break;
            case 'layout_7':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong,
					body.header_style_4 .header_top .icon_text .text b,
					body.header_style_6 .top_bar_contacts_text strong,
					body.header_style_6 .top_bar_contacts_text b';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#142440';
                $config['secondary_color'] = '#4ac8ed';
                $config['third_color'] = '#3ac8ed';


                $config['base_rgb_color'] = array(
                    'rgb' => '20, 36, 64',
                    'alpha' => array('0.25', '0.21', '0.75', '0.9', '0.6', '0.5')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '74, 200, 237',
                    'alpha' => array('0.6')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '74, 200, 237',
                    'alpha' => array('0.6')
                );

                break;
            case 'layout_6':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 13;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#090821';
                $config['secondary_color'] = '#c79d63';
                $config['third_color'] = '#c79d62';


                $config['base_rgb_color'] = array(
                    'rgb' => '9, 8, 33',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '199, 157, 99',
                    'alpha' => array('0.75', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '199, 157, 99',
                    'alpha' => ''
                );

                break;
            case 'layout_5':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#251021';
                $config['secondary_color'] = '#6991d1';
                $config['third_color'] = '#6cbaae';


                $config['base_rgb_color'] = array(
                    'rgb' => '37, 16, 33',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '105, 145, 209',
                    'alpha' => array('0.6')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '108, 186, 174',
                    'alpha' => array('0.8', '0.5')
                );

                break;
            case 'layout_4':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 13;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#30344d';
                $config['secondary_color'] = '#038875';
                $config['third_color'] = '#a5d4ce';


                $config['base_rgb_color'] = array(
                    'rgb' => '48, 52, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.3', '0.5')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '3, 136, 117',
                    'alpha' => ''
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '165, 212, 206',
                    'alpha' => array('0.5')
                );

                break;
            case 'layout_3':
                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'poppins' => 'Poppins:400,500,300,600,700&subset=latin,latin-ext,devanagari'
                );

                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#153e4d';
                $config['secondary_color'] = '#fde953';
                $config['third_color'] = '#fde952';


                $config['base_rgb_color'] = array(
                    'rgb' => '21, 62, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.78')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '253, 233, 83',
                    'alpha' => ''
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '253, 233, 83',
                    'alpha' => ''
                );

                break;
            case 'layout_2':
                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Montserrat';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.wpb_text_column ul li,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,700'
                );

                $config['base_color'] = '#1e1f21';
                $config['secondary_color'] = '#fd9b28';
                $config['third_color'] = '#fd9b27';


                $config['base_rgb_color'] = array(
                    'rgb' => '30, 31, 33',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '253, 155, 40',
                    'alpha' => array('0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '253, 155, 40',
                    'alpha' => array('0.5')
                );


                break;
            case 'layout_liverpool':
                $config['primary_font_family'] = 'Poppins';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item .testimonial_info,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li,
					body.header_style_4 .header_top .icon_text .text strong';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.staff_list.grid.short-view ul .staff_custom_link a,
					.stm_works_wr.grid_with_carousel .owl-stage-outer .info .title,
					.stocks_table .single-item div.exchange_box .stock-exchange,
					.stm-header__hb .stm-navigation__default ul li,
					.vc_testimonials.style_4.navigation-bullets .vc_testimonials_carousel_wr .item > p,
					.vc_testimonials.style_4.navigation-arrows .vc_testimonials_carousel_wr .item > p,
					.icon_box.style_1.icon_left p,
					.stm_pricing_plan .top .title,
					.stm_pricing_plan .top .price,
					.stm_pricing_plan .top .subtitle,
					.stm_pricing_plan .top .stm_label,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.comment-body .comment-text ul li,
					body.header_style_4 .header_top .icon_text.big .text strong,
					.info_box .read_more,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_cost,
					.vc_custom_heading .subtitle,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.info_box h4,
					.testimonials_carousel.style_2 .item .testimonial-info .testimonial-text .name,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body .vc_progress_bar .vc_label,
					body .quote_box .quote,
					body .quote_box .author_info .author_name,
					.wpb_wrapper .vc_pie_chart,
					.stm_portfolio_info .stm_portfolio_info_row .item .portfolio_info_title,
					.heading_font,
					.stm_events_modern .stm_events_modern_list .item .item_wr .content .stm_events_modern_row .event_speaker_content .event_speaker_name a,
					body.header_style_5 .header_top .info-text b';

                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'montserrat' => 'Montserrat:400,500,600,600semi-bold,700,700bold'
                );

                $config['base_color'] = '#333333';
                $config['secondary_color'] = '#ff3833';
                $config['third_color'] = '#ff3833';

                $config['base_rgb_color'] = array(
                    'rgb' => '120, 94, 77',
                    'alpha' => array('0.25', '0.21', '0.9', '0.75', '0.5', '0.8', '0.85', '0.7')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '95, 150, 238',
                    'alpha' => array('0.9', '0.5')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '255, 162, 0',
                    'alpha' => ''
                );

                break;
            default:
                $config['fonts'] = array(
                    'open_sans' => 'Open Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic',
                    'poppins' => 'Poppins:400,500,300,600,700&subset=latin,latin-ext,devanagari'
                );

                $config['primary_font_family'] = 'Open Sans';
                $config['primary_font_size'] = 14;
                $config['primary_font_classes'] = 'body,
					body .vc_general.vc_btn3 small,
					.default_widgets .widget.widget_nav_menu ul li .children li,
					.default_widgets .widget.widget_categories ul li .children li,
					.default_widgets .widget.widget_product_categories ul li .children li,
					.stm_sidebar .widget.widget_nav_menu ul li .children li,
					.stm_sidebar .widget.widget_categories ul li .children li,
					.stm_sidebar .widget.widget_product_categories ul li .children li,
					.shop_widgets .widget.widget_nav_menu ul li .children li,
					.shop_widgets .widget.widget_categories ul li .children li,
					.shop_widgets .widget.widget_product_categories ul li .children li';

                $config['secondary_font_family'] = 'Poppins';
                $config['secondary_font_classes'] = 'h1, .h1,
					h2, .h2,
					h3, .h3,
					h4, .h4,
					h5, .h5,
					h6, .h6,
					.top_nav .top_nav_wrapper > ul,
					.top_nav .icon_text strong,
					.stm_testimonials .item .testimonial-info .testimonial-text .name,
					.stats_counter .counter_title,
					.stm_contact .stm_contact_info .stm_contact_job,
					.vacancy_table_wr .vacancy_table thead th,
					.testimonials_carousel .testimonial .info .position,
					.testimonials_carousel .testimonial .info .company,
					.stm_gmap_wrapper .gmap_addresses .addresses .item .title,
					.company_history > ul > li .year,
					.stm_contacts_widget,
					.stm_works_wr.grid .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter .stm_works .item .info .title,
					body .vc_general.vc_btn3,
					.consulting-rev-title,
					.consulting-rev-title-2,
					.consulting-rev-title-3,
					.consulting-rev-text,
					body .vc_tta-container .vc_tta.vc_general.vc_tta-tabs.theme_style .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab a,
					strong, b,
					.button,
					.woocommerce a.button,
					.woocommerce button.button,
					.woocommerce input.button,
					.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
					.woocommerce input.button.alt,
					.request_callback p,
					ul.comment-list .comment .comment-author,
					.page-numbers .page-numbers,
					#footer .footer_widgets .widget.widget_recent_entries ul li a,
					.default_widgets .widget.widget_nav_menu ul li,
					.default_widgets .widget.widget_categories ul li,
					.default_widgets .widget.widget_product_categories ul li,
					.stm_sidebar .widget.widget_nav_menu ul li, .stm_sidebar .widget.widget_categories ul li,
					.stm_sidebar .widget.widget_product_categories ul li,
					.shop_widgets .widget.widget_nav_menu ul li,
					.shop_widgets .widget.widget_categories ul li,
					.shop_widgets .widget.widget_product_categories ul li,
					.default_widgets .widget.widget_recent_entries ul li a,
					.stm_sidebar .widget.widget_recent_entries ul li a,
					.shop_widgets .widget.widget_recent_entries ul li a,
					.staff_bottom_wr .staff_bottom .infos .info,
					.woocommerce .widget_price_filter .price_slider_amount .button,
					.woocommerce ul.product_list_widget li .product-title,
					.woocommerce ul.products li.product .price,
					.woocommerce a.added_to_cart,
					.woocommerce div.product .woocommerce-tabs ul.tabs li a,
					.woocommerce div.product form.cart .variations label,
					.woocommerce table.shop_table th,
					.woocommerce-cart table.cart th.product-name a,
					.woocommerce-cart table.cart td.product-name a,
					.woocommerce-cart table.cart th .amount,
					.woocommerce-cart table.cart td .amount,
					.stm_services .item .item_wr .content .read_more,
					.staff_list ul li .staff_info .staff_department,
					.stm_partner.style_2 .stm_partner_content .position,
					.staff_carousel_item .staff_department,
					body.header_style_5 .header_top .info-text strong,
					.stm_services_tabs .services_categories ul li a,
					.stm_services_tabs .service_tab_item .service_name,
					.stm_services_tabs .service_tab_item .service_cost,
					.stm_works_wr.grid_2.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_2.style_2 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_1 .stm_works .item .item_wr .title,
					.stm_works_wr.grid_with_filter.style_2 .stm_works .item .item_wr .title,
					body.header_style_7 .side_nav .main_menu_nav > li > a,
					body.header_style_7 .side_nav .main_menu_nav > li ul li a,
					body.header_style_5 .header_top .info-text b';

                $config['base_color'] = '#002e5b';
                $config['secondary_color'] = '#6c98e1';
                $config['third_color'] = '#fde428';


                $config['base_rgb_color'] = array(
                    'rgb' => '0, 46, 91',
                    'alpha' => array('0.9', '0.75', '0.5', '0.25', '0.21')
                );
                $config['secondary_rgb_color'] = array(
                    'rgb' => '108, 152, 225',
                    'alpha' => array('0.9')
                );
                $config['third_rgb_color'] = array(
                    'rgb' => '253, 228, 40',
                    'alpha' => array('0.5')
                );
        }

        $config['secondary_font_classes'] = implode(',', apply_filters('consulting_secondary_font_classes', array())) . " " . $config['secondary_font_classes'];

        return $config;
    }
}

function consulting_get_layout()
{
    $consulting_layout = get_option('consulting_layout', 'layout_1');

    return $consulting_layout;
}

function consulting_layout_plugins($layout = 'layout_1', $get_layouts = false)
{

    $required = array(
        'stm-importer',
        'stm-post-type',
        'custom-icons-by-stylemixthemes',
        'revslider',
        'booked',
        'breadcrumb-navxt',
        'contact-form-7',
        'woocommerce',
        'instagram-feed',
        'recent-tweets-widget',
        'cost-calculator-builder'
    );

    $plugins = array(
		'layout_20' => array(
			'mailchimp-for-wp'
		),
        'layout_amsterdam' => array(
            'pearl-header-builder'
        ),
        'layout_davos' => array(
            'pearl-header-builder'
        ),
        'layout_denver' => array(
            'pearl-header-builder'
        ),
        'layout_brussels' => array(
            'pearl-header-builder'
        ),
        'layout_toronto' => array(
            'pearl-header-builder'
        ),
        'layout_beijing' => array(
            'pearl-header-builder'
        ),
        'layout_istanbul' => array(
            'pearl-header-builder'
        ),
        'layout_new_delhi' => array(
            'pearl-header-builder'
        ),
        'layout_milan' => array(
            'pearl-header-builder'
        ),
        'layout_vienna' => array(
            'pearl-header-builder'
        ),
        'layout_marseille' => array(
            'pearl-header-builder'
        ),
        'layout_berlin' => array(
            'pearl-header-builder'
        ),
        'layout_lisbon' => array(
            'pearl-header-builder'
        ),
        'layout_stockholm' => array(
            'pearl-header-builder'
        ),
        'layout_lyon' => array(
            'pearl-header-builder'
        ),
        'layout_melbourne' => array(
            'pearl-header-builder'
        ),
        'layout_barcelona' => array(
            'pearl-header-builder'
        ),
        'layout_osaka' => array(
            'pearl-header-builder',
            'mailchimp-for-wp',
        ),
        'layout_ankara' => array(
            'pearl-header-builder',
        ),
        'layout_budapest' => array(
			'pearl-header-builder',
			'mailchimp-for-wp'
        ),
        'layout_liverpool' => array(
            'pearl-header-builder',
        ),
        'layout_geneva' => array(
            'pearl-header-builder',
            'eroom-zoom-meetings-webinar',
        )
    );

    if ($get_layouts) return $plugins;

    return (!empty($plugins[$layout])) ? array_merge($required, $plugins[$layout]) : $required;

}

function consulting_premium_bundled_plugins()
{
    return array(
        'js_composer',
        'elementor',
        'consulting-elementor-widgets',
        'stm-gdpr-compliance',
        'cost-calculator-builder',
    );
}

add_filter('cew_before_converting_content', 'consulting_cew_before_converting_content');

function consulting_cew_before_converting_content($content)
{

    $layout = consulting_config();
    $heading_font = $layout['secondary_font_family'];

    $content = str_replace(array('Montserrat', 'Poppins'), $heading_font, $content);

    return $content;
}

add_action('cew_patch_ended', 'consulting_cew_patch_ended');

function consulting_cew_patch_ended()
{
    $color_opt_name = 'elementor_scheme_color';
    $consulting_config = consulting_config();

    $base_color = get_theme_mod('site_skin_base_color', $consulting_config['base_color']);
    $secondary_color = get_theme_mod('site_skin_secondary_color', $consulting_config['secondary_color']);
    $third_color = get_theme_mod('site_skin_third_color', $consulting_config['third_color']);

    $colors = array(
        '1' => $base_color,
        '2' => $secondary_color,
        '3' => "#222222",
        '4' => $third_color
    );

    update_option($color_opt_name, $colors);

    $font_opt_name = 'elementor_scheme_typography';
    $fonts = array(
        '1' => array(
            'font_family' => '',
            'font_weight' => '',
        ),
        '2' => array(
            'font_family' => '',
            'font_weight' => '',
        ),
        '3' => array(
            'font_family' => '',
            'font_weight' => '',
        ),
        '4' => array(
            'font_family' => '',
            'font_weight' => '',
        ),
    );

    update_option($font_opt_name, $fonts);

}

function consulting_get_actual_colors() {
    $consulting_config = consulting_config();
    $colors = array(
        'base_color' => get_theme_mod('site_skin_base_color', $consulting_config['base_color']),
        'secondary_color' => get_theme_mod('site_skin_secondary_color', $consulting_config['secondary_color']),
        'third_color' => get_theme_mod('site_skin_third_color', $consulting_config['third_color'])
    );

    $skin = get_theme_mod('site_skin', 'skin_default');

    if($skin === 'skin_default') {
        $colors = array(
            'base_color' => $consulting_config['base_color'],
            'secondary_color' => $consulting_config['secondary_color'],
            'third_color' => $consulting_config['third_color']
        );
    }

    return $colors;

}