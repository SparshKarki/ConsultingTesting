<?php

/**
 *
 * @var $stm_event_lesson_title
 * @var $date_format
 * @var $time_format
 * @var $datepicker
 * @var $heading
 */

$stm_event_lesson_date = strtotime($datepicker);
$id = rand(0,999999);

if( !empty( $stm_event_lesson_title ) ) : ?>
    <div class="event_lesson_tabs">
        <a href="#<?php echo esc_html($id); ?>" >
            <?php echo sanitize_text_field($stm_event_lesson_title); ?>
            <span><?php echo date_i18n( $date_format, $stm_event_lesson_date ); ?></span>
        </a>
    </div>
<?php endif; ?>

<?php if( !empty( $heading ) ) : ?>
    <ul id="<?php echo esc_html($id) ?>" class="event_lesson_info">
        <?php foreach( $heading as $heading_item ) : ?>
            <?php if( !empty( $heading_item['timepicker_start'] ) && !empty( $heading_item['timepicker_end'] ) ) : ?>
                <?php $stm_event_lesson_time_start = strtotime($heading_item['timepicker_start']); ?>
                <?php $stm_event_lesson_time_end = strtotime($heading_item['timepicker_end']); ?>
            <?php endif; ?>
            <?php if( !empty( $heading_item['timepicker_start'] ) || !empty( $heading_item['timepicker_end'] ) || !empty( $heading_item['location'] ) || !empty( $heading_item['title'] ) || !empty( $heading_item['description'] ) ) : ?>
                <li>
                    <div class="event_lesson_info_time_loc">
                        <div class="event_lesson_info_times">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <?php if( $heading_item['timepicker_start'] == $heading_item['timepicker_end'] ) : ?>
                                <?php echo date_i18n( $time_format, $stm_event_lesson_time_start ); ?>
                            <?php else: ?>
                                <?php if( !empty( $heading_item['timepicker_start'] ) ) : ?><?php echo date_i18n( $time_format, $stm_event_lesson_time_start ); ?><?php endif; ?>
                                <?php if( !empty( $heading_item['timepicker_start'] ) && !empty( $heading_item['timepicker_end'] ) ) : ?>&#8212;<?php endif; ?>
                                <?php if( !empty( $heading_item['timepicker_end'] ) ) : ?><?php echo date_i18n( $time_format, $stm_event_lesson_time_end ); ?><?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php if( !empty( $heading_item['location'] ) ) : ?>
                            <div class="event_lesson_info_location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <?php echo esc_html( $heading_item['location'] ); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="event_lesson_info_content_wrap">
                        <div class="event_lesson_info_content">
                            <?php if( !empty( $heading_item['title'] ) ) : ?>
                                <div class="event_lesson_info_title"><?php echo esc_html( $heading_item['title'] ); ?></div>
                            <?php endif; ?>
                            <?php if( !empty( $heading_item['description'] ) ) : ?>
                                <div class="event_lesson_info_description"><?php echo esc_html( $heading_item['description'] ); ?></div>
                            <?php endif; ?>
                            <?php if( !empty( $heading_item['lesson_speakers'] ) ) : ?>
                                <?php $stm_event_speakers = explode(',', $heading_item['lesson_speakers']); ?>
                                <ul class="event_lesson_speakers">
                                    <?php foreach ($stm_event_speakers as $stm_event_speaker) : ?>
                                        <li>
                                            <?php
                                            if ( empty( $img_size ) ) {
                                                $img_size = 'consulting-image-320x320-croped';
                                            }
                                            $post_thumbnail = get_the_post_thumbnail($stm_event_speaker, $img_size);
                                            ?>
                                            <div class="event_speaker_thumbnail"><?php echo consulting_filtered_output($post_thumbnail); ?></div>
                                            <div class="event_speaker_content">
                                                <div class="event_speaker_name">
                                                    <a href="<?php the_permalink($stm_event_speaker); ?>"><?php echo get_the_title($stm_event_speaker); ?></a>
                                                </div>
                                                <?php if( $stm_event_venues = get_post_meta( $stm_event_speaker, 'department', true ) ) : ?>
                                                    <div class="event_speaker_description"><?php echo esc_html($stm_event_venues); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>