<?php
/**
 * @var $css_class
 */

if (is_singular('stm_event')): ?>

    <div class="<?php echo esc_attr($css_class); ?>">
        <?php get_template_part('partials/content', 'event-form'); ?>
    </div>

<?php endif;