<?php
$atts = vc_map_get_attributes($this->getShortcode(), $atts);
extract($atts);

$atts['css_class'] = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '));

if (!$image_size) {
    $image_size = '174x174';
}

$atts['image'] = wpb_getImageBySize(array('attach_id' => $image, 'thumb_size' => $image_size));

consulting_show_template('contact', $atts);