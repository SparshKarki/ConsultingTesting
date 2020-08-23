<?php
$attachment_id = get_post_thumbnail_id( get_the_ID() );
if(!empty($attachment_id)){
    $thumbnail = consulting_get_image($attachment_id, '260x170');
}
$post_url = get_the_permalink();
?>
<li class="view_style_3">
    <div class="post_item">
        <?php if(has_post_thumbnail()): ?>
            <a href="<?php echo esc_url($post_url); ?>" class="image">
                <?php
                echo wp_kses_post($thumbnail);
                ?>
            </a>
        <?php endif; ?>
        <div class="content">
            <a href="<?php echo esc_url($post_url); ?>" class="title base_font_color">
                <h5 class="secondary_font_color_hv"><?php the_title(); ?></h5>
            </a>
            <div class="description">
                <?php
                if(has_excerpt()){
                    the_excerpt();
                }
                ?>
            </div>
            <a href="<?php echo esc_url($post_url); ?>" class="read_more">
                <i class="stm-lnr-arrow-right third_bg_color base_bg_color_hv"></i>
                <span>
                <?php esc_html_e('Read more', 'consulting'); ?>
                </span>
            </a>
        </div>
    </div>
</li>