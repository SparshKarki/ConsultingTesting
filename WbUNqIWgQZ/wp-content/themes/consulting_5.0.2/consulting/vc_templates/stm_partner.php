<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
$atts['link']      = vc_build_link( $link );

if ( ! $img_size ) {
    $img_size = 'consulting-image-350x204-croped';
}

$partner_thumbnail = wpb_getImageBySize( array(
    'attach_id'  => $logo,
    'thumb_size' => $img_size,
) );

$atts['partner_thumbnail'] = $partner_thumbnail['thumbnail'];

if( $style ){
    $atts['css_class'] .= ' ' . $style;
}

consulting_show_template('partner', $atts);