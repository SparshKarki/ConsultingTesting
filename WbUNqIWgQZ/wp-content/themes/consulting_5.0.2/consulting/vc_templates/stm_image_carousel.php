<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

if(!empty($custom_links)) {
    $custom_links = vc_value_from_safe( $custom_links );
    $custom_links = explode( ',', $custom_links );
} else {
    $custom_links = array();
}

$atts['custom_links'] = $custom_links;

consulting_show_template('image_carousel', $atts);