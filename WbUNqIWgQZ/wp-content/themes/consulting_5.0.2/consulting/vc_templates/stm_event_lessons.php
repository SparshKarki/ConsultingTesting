<?php
$stm_event_lesson_title = '';
$heading = '';
$date_format = (!empty($atts['stm_date_format'])) ? $atts['stm_date_format'] : 'Y-m-d';
$time_format = (!empty($atts['stm_time_format'])) ? $atts['stm_time_format'] : 'H:i';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$heading = vc_param_group_parse_atts( $atts['heading'] );

if ( empty( $img_size ) ) {
    $img_size = 'consulting-image-80x80-croped';
}

consulting_show_template('event_lessons', compact('stm_event_lesson_title', 'date_format', 'time_format', 'heading', 'datepicker'));