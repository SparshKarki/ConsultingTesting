<?php
if (empty($img_size)) {
    $img_size = '360x190';
}
$attachment_id = get_post_thumbnail_id(get_the_ID());
if (!empty($attachment_id)) {
    $thumbnail = consulting_get_image($attachment_id, $img_size);
}
$post_url = get_the_permalink();
?>
<li class="view_style_5 news_item">
    <div class="post_item">
        <?php if (has_post_thumbnail()): ?>
            <a href="<?php echo esc_url($post_url); ?>" class="image">
                <?php echo wp_kses_post($thumbnail); ?>
            </a>
        <?php endif; ?>
        <a href="<?php echo esc_url( $post_url ); ?>" class="title base_font_color">
            <h5 class="secondary_font_color_hv"><?php the_title(); ?></h5>
        </a>
        <a href="<?php echo esc_url( $post_url ); ?>" class="read_more_arrow base_font_color">
            <i class="stm-lnr-arrow-right"></i>
            <?php esc_html_e('Read more', 'consulting'); ?>
        </a>
    </div>
</li>
