<?php

class CEW_Patch_Widget_Converter
{

    static function converter($data)
    {

        if (!empty($data['widgetType'])) {
            $widget = $data['widgetType'];

            $widget = str_replace('-', '_', $widget);

            if (method_exists('CEW_Patch_Widget_Converter', $widget)) {
                CEW_Patch_Widget_Converter::$widget($data);
            }
        }

        return $data;
    }

    static function vc_column_text(&$data)
    {
        $data['widgetType'] = 'text-editor';
        if (empty($data['settings'])) $data['settings'] = array();
        if (!empty($data['settings']['content'])) $data['settings']['editor'] = $data['settings']['content'];

    }

    static function vc_gmaps(&$data)
    {
        $data['widgetType'] = 'google_maps';
        if (empty($data['settings'])) $data['settings'] = array();
        $data['settings']['address'] = 'London Eye, London, United Kingdom';
    }
    static function vc_separator(&$data)
    {
        $data['widgetType'] = 'divider';
        if (empty($data['settings'])) $data['settings'] = array();
        if(!empty($data['settings']['accent_color'])){
            $data['settings']['color'] = $data['settings']['accent_color'];
        }
        else {
            $data['settings']['color'] = '#dddddd';
        }

    }

    static function rev_slider_vc(&$data)
    {

        $data['widgetType'] = 'slider_revolution';

        if (!empty($data['settings']) and !empty($data['settings']['alias'])) {

            global $wpdb;
            $table = $wpdb->prefix . 'revslider_sliders';


            $request = "SELECT title FROM {$table}
			WHERE alias = '{$data['settings']['alias']}'";

            $r = $wpdb->get_results($request);

            if (!empty($r) and !empty($r[0])) {
                $title = $r[0]->title;

                $data['settings']['revslidertitle'] = $title;
                $data['settings']['shortcode'] = "[rev_slider alias=\"{$data['settings']['alias']}\"]";

            }
        }

        if (empty($data['settings'])) $data['settings'] = array();

    }

    static function rev_slider(&$data)
    {

        $data['widgetType'] = 'wp-widget-rev-slider-widget';

        if (!empty($data['settings']) and !empty($data['settings']['alias'])) {

            global $wpdb;
            $table = $wpdb->prefix . 'revslider_sliders';


            $request = "SELECT id FROM {$table}
			WHERE alias = '{$data['settings']['alias']}'";

            $r = $wpdb->get_results($request);

            if (!empty($r) and !empty($r[0])) {
                $alias = $r[0]->id;

                $data['settings']['wp'] = array(
                    'rev_slider' => $alias
                );
            }
        }

        if (empty($data['settings'])) $data['settings'] = array();
    }

    static function stm_pricing_plan(&$data)
    {
        if (!empty($data['settings'])){
            $data['settings']['link_title'] = __( 'Get now', 'plugin-domain' );
        }
    }

    static function stm_image_carousel(&$data)
    {
        if (!empty($data['settings']) && !empty($data['settings']['images'])) $data['settings']['gallery'] = $data['settings']['images'];
    }

    static function stm_news(&$data)
    {
        if (!empty($data['settings']) && !empty($data['settings']['loop'])){
            $params = explode('|', $data['settings']['loop']);
            foreach($params as $param){
                if(strpos($param, 'size:') !== false){
                    $size = str_replace('size:', '', $param);
                    if(!empty($size)){
                        $data['settings']['qb_query_builder_posts_per_page'] = $size;
                    }
                }
                if(strpos($param, 'post_type:') !== false){
                    $post_type = str_replace('post_type:', '', $param);
                    if(!empty($post_type)){
                        $data['settings']['qb_query_builder_post_type'] = $post_type;
                    }
                }
            }
        }
    }

    static function vc_custom_heading(&$data)
    {
        if (!empty($data['settings']) && !empty($data['settings']['icon'])) {
            $data['settings']['icon'] = array(
                'value' => $data['settings']['icon']
            );
        }

        if (!empty($data['settings']) && empty($data['settings']['stm_title_font_weight'])) {
            $data['settings']['stm_title_font_weight'] = '700';
        }

    }

    static function contact_form_7(&$data)
    {
        $data['widgetType'] = 'stm_contact_form_7';
        if (!empty($data['settings']) && !empty($data['settings']['id'])) {
            $data['settings']['form_id'] = $data['settings']['id'];
            unset($data['settings']['id']);
        }
    }

    static function vc_single_image(&$data)
    {

        $data['widgetType'] = 'image';

        if(!empty($data['alignment'])) $data['align'] = $data['alignment'];

        if( !empty($data['settings']['onclick']) && $data['settings']['onclick'] === 'link_image') {
            $data['settings']['link_to'] = 'file';
            $data['settings']['open_lightbox'] = 'yes';
        }
    }

    static function vc_tta_accordion(&$data) {
        $data['widgetType'] = 'accordion';
        if (!empty($data['settings']['c_position']) && $data['settings']['c_position'] === 'right') {
            $data['settings']['icon_align'] = 'right';
        }
    }

    static function vc_video(&$data) {
        $data['widgetType'] = 'video';
    }

    static function vc_progress_bar(&$data) {
        $data['widgetType'] = 'progress';
        if(!empty($data['settings']) and !empty($data['settings']['values'])) {
            $data['settings']['data_values'] = CEW_Patch_Widget_Settings_Parser::vc_param_group_parse_atts($data['settings']['values']);
        }
    }

    static function vc_wp_custommenu(&$data) {
        $data['widgetType'] = 'wp-widget-nav_menu';

        if(!empty($data['settings'])) {
            if (!empty($data['settings']['nav_menu'])) {
                $data['settings']['wp'] = array(
                    'nav_menu' => $data['settings']['nav_menu'],
                    'title' => ''
                );
            }

            if(!empty($data['settings']['el_class'])) $data['settings']['_css_classes'] = $data['settings']['el_class'];
        }

    }

    static function vc_wp_text(&$data) {
        $data['widgetType'] = 'wp-widget-text';

        if(!empty($data['settings'])) {
            if (!empty($data['settings']['content'])) {
                $data['settings']['wp'] = array(
                    'text' => $data['settings']['content'],
                    'title' => '',
                    'filter' => 'on',
                    'visual' => 'on',
                );
            }

            if(!empty($data['settings']['el_class'])) $data['settings']['_css_classes'] = $data['settings']['el_class'];
        }

    }

    static function vc_wp_search(&$data) {
        $data['widgetType'] = 'wp-widget-search';
    }

    static function vc_wp_categories(&$data) {
        $data['widgetType'] = 'wp-widget-categories';
    }

    static function vc_wp_archives(&$data) {
        $data['widgetType'] = 'wp-widget-archives';
    }

    static function vc_wp_tagcloud(&$data) {
        $data['widgetType'] = 'wp-widget-tag_cloud';
    }

    static function vc_wp_pages(&$data) {
        $data['widgetType'] = 'wp-widget-pages';
    }

    static function vc_wp_posts(&$data) {
        $data['widgetType'] = 'wp-widget-recent-posts';
    }

    static function vc_wp_meta(&$data) {
        $data['widgetType'] = 'wp-widget-meta';
    }

    static function vc_wp_recentcomments(&$data) {
        $data['widgetType'] = 'wp-widget-recent-comments';
    }

    static function vc_wp_calendar(&$data) {
        $data['widgetType'] = 'wp-widget-calendar';
    }

    static function vc_btn(&$data) {
        /*TODO Consulting only*/

        $data['widgetType'] = 'button';

        if(!empty($data['settings'])) {
            if(!empty($data['settings']['title'])) $data['settings']['text'] = $data['settings']['title'];
            if(!empty($data['settings']['i_align'])) $data['settings']['icon_align'] = $data['settings']['i_align'];

            /*ICON*/
            if(!empty($data['settings']['add_icon']) && $data['settings']['add_icon'] === 'true') {

                $icon_type = (!empty($data['settings']['i_type'])) ? $data['settings']['i_type'] : 'fontawesome';
                if(!empty($data['settings']["i_icon_{$icon_type}"])) $data['settings']['selected_icon'] = $data['settings']["i_icon_{$icon_type}"];
            }

            if(empty($data['settings']['align'])) $data['settings']['_element_width'] = 'auto';

            if( !empty($data['settings']['color']) && $data['settings']['color'] === 'link') {
                $data['settings']['color_link'] = 'yes';
            }
            
            if( !empty($data['settings']['button_block']) && $data['settings']['button_block'] === 'true') {
                $data['settings']['button_block'] = 'yes';
            }
        }

        if(function_exists('consulting_get_actual_colors')) {
            $colors = consulting_get_actual_colors();

            $base_color = $colors['base_color'];
            $secondary_color = $colors['secondary_color'];
            $third_color = $colors['third_color'];

            /**
             * button_text_color
             * hover_color
             * background_color
             * button_background_hover_color
             * vc_border_color
             * vc_border_color_hover
             * vc_icon_color
             * vc_icon_color_hover
             */

            if (!empty($data['settings']['style']) and !empty($data['settings']['color'])) {
                $style = $data['settings']['style'];
                $color = $data['settings']['color'];

                if ($style === 'flat' && $color === 'theme_style_1') {
                    $data['settings']['button_text_color'] = '#ffffff';
                    $data['settings']['background_color'] = $data['settings']['vc_icon_color_hover'] = $data['settings']['hover_color'] = $base_color;
                    $data['settings']['vc_icon_color'] = $data['settings']['button_background_hover_color'] = $third_color;
                }

                if ($style === 'flat' && $color === 'theme_style_3') {
                    $data['settings']['button_text_color'] = $data['settings']['button_background_hover_color'] = $base_color;
                    $data['settings']['hover_color'] = '#ffffff';
                    $data['settings']['background_color'] = $data['settings']['vc_icon_color_hover'] = $third_color;
                }

                if ($style === 'flat' && $color === 'white') {
                    $data['settings']['button_text_color'] = $data['settings']['button_background_hover_color'] = $base_color;
                    $data['settings']['background_color'] = $data['settings']['hover_color'] = '#ffffff';
                    $data['settings']['vc_icon_color_hover'] = $third_color;
                }

                if ($style === 'outline' && $color === 'theme_style_2') {
                    $data['settings']['background_color'] = $data['settings']['button_background_hover_color'] = 'rgba(255,255,255,0)';
                    $data['settings']['vc_border_color'] = $data['settings']['button_text_color'] = $base_color;
                    $data['settings']['vc_border_color_hover'] = $data['settings']['hover_color'] = $secondary_color;
                }

                if ($style === 'outline' && $color === 'theme_style_4') {
                    $data['settings']['button_text_color'] = '#ffffff';
                    $data['settings']['background_color'] = 'rgba(255,255,255,0)';
                    $data['settings']['vc_border_color'] = $data['settings']['button_background_hover_color'] = $third_color;
                    $data['settings']['hover_color'] = $base_color;
                }

            }
        }

    }

    static function vc_gallery(&$data) {

        $data['widgetType'] = 'image-gallery';

        if(!empty($data['settings'])) {
            if (!empty($data['settings']['images'])) {
                $data['settings']['wp_gallery'] = $data['settings']['images'];
                unset($data['settings']['images']);
            }
            if(!empty($data['settings']['type']) && $data['settings']['type'] === 'image_full') {
                $data['settings']['thumbnail_size'] = 'full';
                $data['settings']['gallery_columns'] = 1;
            }
        }

    }

}