<?php
$attachment_id = get_post_thumbnail_id( get_the_ID() );
$thumbnail = consulting_get_image($attachment_id, $settings['img_size']);
$post_url = get_the_permalink();
?>
<li class="view_style_2">
    <div class="post_item">
        <?php if(has_post_thumbnail()): ?>
            <a href="<?php echo esc_url($post_url); ?>" class="image">
                <?php
                    echo wp_kses_post($thumbnail);
                ?>
            </a>
        <?php endif; ?>
        <div class="content">
            <a href="<?php echo esc_url($post_url); ?>" class="title">
                <h5><?php the_title(); ?></h5>
            </a>
            <a href="<?php echo esc_url($post_url); ?>" class="read_more">
                <i class="stm-lnr-arrow-right third_bg_color base_bg_color_hv"></i>
                <span>
                <?php esc_html_e('Read more', 'consulting'); ?>
                </span>
            </a>
        </div>
    </div>
</li>