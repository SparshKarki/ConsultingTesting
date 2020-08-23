<?php
$args = array(
    'post_type' => 'stm_careers',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$vacancies = new WP_Query($args);
if (empty($style)) {
    $style = 'style_1';
}
$css_class .= ' ' . $style;
if ($style === 'style_2'):
    ?>
    <?php if ($vacancies->have_posts()): ?>
    <div class="stm_vacancies<?php echo esc_attr($css_class); ?>">
        <div class="row">
            <?php while ($vacancies->have_posts()) {
                $vacancies->the_post(); ?>
                <div class="col-sm-6 col-md-4">
                    <div class="stm_vacancies__inner">
                        <a href="<?php the_permalink(); ?>" class="title">
                            <h5><?php the_title(); ?></h5>
                        </a>
                        <div class="location info"><?php echo esc_html(get_post_meta(get_the_ID(), 'location', true)); ?></div>
                        <div class="department info"><?php echo esc_html(get_post_meta(get_the_ID(), 'department', true)); ?></div>
                        <div class="read-more">
                            <a href="<?php the_permalink(); ?>" class="base_font_color">
                                <i class="stm-lnr-arrow-right third_bg_color"></i>
                                <?php esc_html_e('Read more', 'consulting'); ?>
                            </a>
                            <span class="date">
                                <?php echo get_the_date(); ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php }
            wp_reset_postdata(); ?>
        </div>
    </div>
<?php
endif;
else:
    wp_enqueue_script('jquery.tablesorter');

    $id = rand();
    ?>

    <div class="vacancy_table_wr<?php echo esc_attr($css_class); ?>">

        <?php if ($vacancies->have_posts()) { ?>

            <table class="vacancy_table" id="vacancy_table_<?php echo esc_attr($id) ?>">
                <thead>
                <tr>
                    <th><?php esc_html_e('Job Posting Title', 'consulting'); ?></th>
                    <th class="location"><?php esc_html_e('Location', 'consulting'); ?></th>
                    <th><?php esc_html_e('Department', 'consulting'); ?></th>
                    <th><?php esc_html_e('Date', 'consulting'); ?></th>
                </tr>
                </thead>
                <tbody>

                <?php while ($vacancies->have_posts()) {
                    $vacancies->the_post(); ?>
                    <tr>
                        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                        <td class="location"><?php echo esc_html(get_post_meta(get_the_ID(), 'location', true)); ?></td>
                        <td><?php echo esc_html(get_post_meta(get_the_ID(), 'department', true)); ?></td>
                        <td><?php echo get_the_date(); ?></td>
                    </tr>
                <?php }
                wp_reset_postdata(); ?>

                </tbody>
            </table>

        <?php } ?>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $("#vacancy_table_<?php echo esc_js($id)?>").tablesorter();
            });
        </script>
    </div>
<?php endif; ?>