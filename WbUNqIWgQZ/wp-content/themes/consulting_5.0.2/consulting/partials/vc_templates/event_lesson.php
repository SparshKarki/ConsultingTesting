<?php

/**
 * @var $stm_date_format
 * @var $stm_time_format
 * @var $stm_event_lesson
 * @var $tab_title
 */

if (!empty($stm_event_lesson)):

    $data = array();

    foreach($stm_event_lesson as $index => $lesson) {
        /*Combine in heading*/

        $data[$index] = array(
            'stm_event_lesson_title' => $lesson['tab_title'],
            'date_format' => $stm_date_format,
            'time_format' => $stm_time_format,
            'datepicker' => $lesson['datepicker'],
            'heading' => array()
        );

        $lesson_data = array();

        $i = 0;
        while ($i <= 20) {
            $i++;

            $combined_data = array();
            if(!empty($lesson["timepicker_start_{$i}"])) $combined_data['timepicker_start'] = $lesson["timepicker_start_{$i}"];
            if(!empty($lesson["timepicker_end_{$i}"])) $combined_data['timepicker_end'] = $lesson["timepicker_end_{$i}"];
            if(!empty($lesson["location_{$i}"])) $combined_data['location'] = $lesson["location_{$i}"];
            if(!empty($lesson["title_{$i}"])) $combined_data['title'] = $lesson["title_{$i}"];
            if(!empty($lesson["description_{$i}"])) $combined_data['description'] = $lesson["description_{$i}"];
            if(!empty($lesson["lesson_speakers_{$i}"])) $combined_data['lesson_speakers'] = implode(',', $lesson["lesson_speakers_{$i}"]);

            if(!empty($combined_data)) $data[$index]['heading'][] = $combined_data;

        }

    }

    ?>


    <div class="events_lessons_box">
        <?php
        foreach($data as $index => $event) {
            consulting_show_template('event_lessons', $event);
        }
        ?>
    </div>

<?php endif; ?>