<?php
/**
 * @var $css_class
 */

if (is_singular('stm_careers')): ?>

    <div class="vacancy_about_wr <?php echo esc_attr($css_class); ?>">
        <?php get_template_part('partials/content', 'about_vacancy'); ?>
    </div>

<?php endif;