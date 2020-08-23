<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

if( empty( $loop ) ) {
    return;
}

$query = false;

list( $loop_args, $query ) = vc_build_loop_query( $loop, get_the_ID() );

if( !$query ) {
    return;
}

$atts['query'] = $query;

consulting_show_template('news', $atts);