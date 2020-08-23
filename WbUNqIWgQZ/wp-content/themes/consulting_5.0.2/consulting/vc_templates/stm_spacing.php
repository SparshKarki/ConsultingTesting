<?php
/* === VARIABLES === */
$spacing_type = '';
$lg_spacing = '';
$md_spacing = '';
$sm_spacing = '';
$xs_spacing = '';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

consulting_show_template('spacing', $atts);