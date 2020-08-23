<?php

if (!$img_size) {
    $img_size = 'consulting-image-350x250-croped';
}


if (stm_check_layout('layout_13')) {
    $img_size = 'consulting-image-320x320-croped';
}

$style_class = '';

if (empty($style)) {
    $style = 'style_1';
}

if (!empty($style) and $style == 2) {
    $style_class = 'style_2';
}
if(!empty($disable_preview_image)) {
    $style_class .= ' disable-preview';
}

$settings = array(
    'img_size' => $img_size,
    'posts_per_row' => $posts_per_row,
    'css_class' => $css_class
);

if ($view_style === 'style_4') {
    wp_enqueue_script('isotope');
    wp_enqueue_script('packery');
    wp_enqueue_script('imagesloaded');
}
$i = 0;
?>

<?php if ($query->have_posts()): ?>

    <div class="stm_news <?php echo esc_attr($style_class);
    echo esc_attr($css_class); ?>">
        <ul class="news_list posts_per_row_<?php echo esc_attr($posts_per_row); ?>">

            <?php while ($query->have_posts()): $query->the_post(); ?>
                <?php if ($view_style == 'style_2'): ?>
                    <?php
                    set_query_var('settings', $settings);
                    get_template_part('vc_templates/stm_news/style_2');
                    ?>
                <?php elseif ($view_style == 'style_3'): ?>
                    <?php
                    get_template_part('vc_templates/stm_news/style_3');
                    ?>
                <?php elseif ($view_style == 'style_4'): ?>
                    <?php
                    set_query_var('i', $i);
                    get_template_part('vc_templates/stm_news/style_4');
                    $i++;
                    ?>
                <?php elseif ($view_style == 'style_5'): ?>
                    <?php
                    set_query_var('img_size', $img_size);
                    get_template_part('vc_templates/stm_news/style_5');
                    $i++;
                    ?>
                <?php elseif ($view_style == 'style_6'): ?>
                    <?php
                    set_query_var('img_size', $img_size);
                    get_template_part('vc_templates/stm_news/style_6');
                    ?>
                <?php else: ?>
                    <li>
                        <div class="post_inner">
                            <?php if ($style == 2): ?>
                                <?php
                                $has_image = '';
                                ?>
                                <?php if (has_post_thumbnail() && !$disable_preview_image): $has_image = 'has-image';
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id(), $img_size);
                                    if (!empty($image[0])) {
                                        $image = $image[0];
                                    }

                                    if (!empty($image)) { ?>
                                        <div class="stm_news_bg"
                                             style="background-image: url('<?php echo esc_url($image); ?>')"></div>
                                    <?php }
                                endif; ?>
                                <div class="inner <?php echo esc_attr($has_image); ?>">
                                    <div class="date"><?php echo get_the_date(); ?></div>
                                    <h5 class="no_stripe"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h5>
                                    <div class="stm_the_excerpt"><?php the_excerpt(); ?></div>
                                    <div class="text-right">
                                        <a class="stm_link_bordered" href="<?php esc_url(get_the_permalink()); ?>">
                                            <?php esc_html_e('Read more', 'consulting'); ?>
                                        </a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <?php if (has_post_thumbnail() && !$disable_preview_image): ?>
                                    <?php if (stm_check_layout('layout_ankara')): ?>
                                        <?php
                                        $attachment_id = get_post_thumbnail_id(get_the_ID());
                                        $thumbnail = consulting_get_image($attachment_id, $img_size);
                                        ?>
                                        <div class="image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php echo consulting_filtered_output($thumbnail); ?>
                                            </a>
                                            <span class="the_date">
                                            <span class="day"><?php echo get_the_date('d'); ?></span>
                                            <span class="month"><?php echo get_the_date('M'); ?></span>
                                        </span>
                                        </div>
                                    <?php else: ?>
                                        <div class="image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                $attachment_id = get_post_thumbnail_id(get_the_ID());
                                                $thumbnail = consulting_get_image($attachment_id, $img_size);
                                                echo consulting_filtered_output($thumbnail);
                                                ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if (stm_check_layout('layout_amsterdam')) : ?>
                                    <?php get_template_part('vc_templates/stm_news/amsterdam'); ?>
                                <?php else: ?>
                                    <div class="stm_news_unit-block">
                                        <h5 class="no_stripe"><a
                                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h5>

                                        <?php if (get_the_excerpt()) : ?>
                                            <div class="stm_the_excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (stm_check_layout('layout_2') || stm_check_layout('layout_9')) : ?>
                                            <div class="category"><?php echo get_the_category_list(__(', ', 'consulting')); ?></div>
                                        <?php else : ?>
                                            <div class="date">
                                                <?php if (!stm_check_layout('layout_ankara')): ?>
                                                    <span class="the_date"><?php echo get_the_date(); ?></span>
                                                <?php endif; ?>
                                                <?php if (stm_check_layout('layout_15')):
                                                    $cats = get_the_category(get_the_id());
                                                    if (!is_wp_error($cats) and !empty($cats[0])): ?>
                                                        <span>
                                                        <?php esc_html_e('in', 'consulting') ?>
                                                            <a href="<?php echo esc_url(get_term_link($cats[0])); ?>"><?php echo esc_attr($cats[0]->name); ?></a>
                                                    </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <a href="<?php the_permalink(); ?>"
                                                   class="button size-lg hidden"><?php esc_html_e('Read more', 'consulting'); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php
                endif;
            endwhile; ?>
        </ul>
    </div>
<?php
endif;
wp_reset_postdata(); ?>

<?php if ($view_style === 'style_4'): ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var $container = $(".stm_news .news_list");
            var originLeft = true;
            if ($("body").hasClass("rtl")) {
                originLeft = false;
            }
            $container.isotope({
                layoutMode: "packery",
                itemSelector: ".news_item.view_style_4",
                transitionDuration: "0.7s",
                gutter: 10,
                isOriginLeft: originLeft,
            });
            $container.imagesLoaded().progress(function () {
                $container.isotope("layout");
            });
            $container.isotope("layout");

        });
    </script>
<?php endif; ?>
