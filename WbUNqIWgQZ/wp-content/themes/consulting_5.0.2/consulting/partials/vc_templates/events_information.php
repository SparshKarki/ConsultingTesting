<?php
/**
 * @var $css_class
 */
if (is_singular('stm_event')): ?>

    <div class="consulting_event_information <?php echo esc_attr( $css_class ); ?>">
        <?php get_template_part( 'partials/content', 'event-info' ); ?>
    </div>

<?php endif;