<?php

wp_enqueue_script('countUp');

$id = uniqid('counter_');

if (empty($stats_style)) {
    $stats_style = '';
}

if (empty($color)) {
    $color = '';
} else {
    $color = 'style="color:' . $color . '"';
}

?>
<?php if ($stat_counter_style === 'style_5'): ?>
    <div class="stats_counter <?php echo esc_attr($stat_counter_style); ?> <?php echo esc_attr($alignment); ?> <?php echo consulting_filtered_output($stats_style);
    echo esc_attr($css_class); ?>" <?php echo sanitize_text_field($color); ?>>
        <div class="inner">
            <?php if (!empty($icon)): ?>
                <div class="icon-wrap">
                    <i class="<?php echo esc_attr($icon); ?> base_font_color"
                    style="<?php if(!empty($icon_color)) echo 'color:' . esc_attr($icon_color); ?> !important;"></i>
                </div>
            <?php endif; ?>
            <div class="counter-wrap">
                <h3 class="no_stripe base_font_color"
                    id="<?php echo esc_attr($id); ?>" <?php echo sanitize_text_field($color); ?>
                    style="<?php if(!empty($title_color)) echo 'color:' . esc_attr($title_color); ?> !important;">0</h3>
                <?php if ($title) { ?>
                    <div class="counter_title base_font_color" style="<?php if(!empty($title_color)) echo 'color:' . esc_attr($title_color); ?> !important;"><?php echo esc_html($title); ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="stats_counter <?php echo esc_attr($stat_counter_style); ?> <?php echo esc_attr($alignment); ?> <?php echo esc_attr($stats_style);
    echo esc_attr($css_class); ?>" <?php echo sanitize_text_field($color); ?>>
        <div class="inner <?php if ($stat_counter_style == 'style_4') echo 'third_bg_after_color third_bg_before_color'; ?>">
            <h3 class="no_stripe" id="<?php echo esc_attr($id); ?>" <?php echo sanitize_text_field($color); ?>>0</h3>
            <?php if ($title) { ?>
                <div class="counter_title" <?php echo sanitize_text_field($color); ?>><?php echo esc_html($title); ?></div>
            <?php } ?>
            <?php if ($description) { ?>
                <div class="counter_description">
                    <p><?php echo wp_kses($description, array('br' => array())); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var <?php echo esc_attr($id); ?> =
        new countUp("<?php echo esc_attr($id); ?>", 0, <?php echo esc_attr($counter_value); ?>, 0, <?php echo esc_attr($duration); ?>, {
            useEasing: true,
            useGrouping: false,
            prefix: '<?php echo esc_js($counter_value_pre); ?>',
            suffix: '<?php echo esc_js($counter_value_suf); ?>'
        });
        $(window).scroll(function () {
            if ($("#<?php echo esc_attr($id); ?>").is_on_screen()) {
                <?php echo esc_attr($id); ?>.
                start();
            }
        });
    });
</script>