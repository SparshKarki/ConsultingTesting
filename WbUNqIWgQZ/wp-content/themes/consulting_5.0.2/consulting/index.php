<?php consulting_get_header(); ?>
<?php
$sidebar_type = get_theme_mod('blog_sidebar_type', 'wp');
if ($sidebar_type == 'wp') {
    $sidebar_id = get_theme_mod('blog_wp_sidebar', 'consulting-right-sidebar');
} else {
    $sidebar_id = get_theme_mod('blog_vc_sidebar');
}
if (!empty($_GET['sidebar_id'])) {
    $sidebar_id = $_GET['sidebar_id'];
}
$structure = consulting_get_structure($sidebar_id, $sidebar_type, get_theme_mod('blog_sidebar_position', 'right'), get_theme_mod('blog_layout')); ?>

<?php echo consulting_filtered_output($structure['content_before']); ?>
    <div class="<?php echo esc_attr($structure['class']); ?>">
        <?php
        $posts_class = '';
        $paginate_links_data = paginate_links(array('type' => 'array'));

        if (empty($paginate_links_data)) {
            $posts_class .= ' no-paginate';
        }
        ?>
        <?php if (is_tax('stm_event_category')) : ?>
            <?php if (consulting_blog_layout() == 'grid') : ?>
                <div class="stm_events_grid cols_2">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/content-event', 'grid'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <?php get_template_part('partials/content', 'none'); ?>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="stm_events_classic cols_4">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('partials/content-event', 'classic'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <?php get_template_part('partials/content', 'none'); ?>
                    <?php endif; ?>
                    <div class="stm_events_list_form">
                        <?php get_template_part('partials/content', 'event-list-form'); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <ul class="post_list_ul<?php echo esc_attr($posts_class); ?>">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();

                        if (consulting_blog_layout() == 'grid') {
                            get_template_part('partials/content', 'loop_grid');
                        } else {
                            get_template_part('partials/content', 'loop_list');
                        }

                    endwhile;
                else:
                    get_template_part('partials/content', 'none');
                endif;
                ?>
            </ul>
        <?php endif; ?>
    </div>

<?php
echo paginate_links(array(
    'type' => 'list',
    'prev_text' => '<i class="fa fa-chevron-left"></i>',
    'next_text' => '<i class="fa fa-chevron-right"></i>',
));
?>
<?php echo consulting_filtered_output($structure['content_after']); ?>

<?php echo consulting_filtered_output($structure['sidebar_before']); ?>
<?php
if ($sidebar_id) {
    if ($sidebar_type == 'wp') {
        $sidebar = true;
    } else {
        $sidebar = get_post($sidebar_id);
    }
}

if (isset($sidebar)) {
    if ($sidebar_type == 'vc') {
        $is_elementor_sidebar = consulting_is_elementor_page($sidebar_id);
        ?>

        <?php if ($is_elementor_sidebar && class_exists('Elementor\Plugin')): ?>
            <?php echo \Elementor\Plugin::$instance->frontend->get_builder_content($sidebar_id); ?>
        <?php else: ?>
            <div class="sidebar-area stm_sidebar">
                <style type="text/css" scoped>
                    <?php echo get_post_meta( $sidebar_id, '_wpb_shortcodes_custom_css', true ); ?>
                </style>
                <?php echo apply_filters('the_content', $sidebar->post_content); ?>
            </div>
        <?php endif; ?>
    <?php } else { ?>
        <div class="sidebar-area default_widgets">
            <?php dynamic_sidebar($sidebar_id); ?>
        </div>
    <?php }
}
?>
<?php echo consulting_filtered_output($structure['sidebar_after']); ?>

<?php get_footer();