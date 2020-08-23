<?php

$link = '';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

$link = vc_build_link( $link );
if( $link['url'] ) {
    if( empty( $link['target'] ) ) {
        $link['target'] = '_self';
    }
}

$atts['link'] = $link;

consulting_show_template('portfolio_information', $atts);