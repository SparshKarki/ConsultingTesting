<?php
if( empty( $img_size ) ) {
    $img_size = '720x500';
}
?>
<li class="view_style_6">
    <div class="post-item">
        <?php if( has_post_thumbnail() ): ?>
            <div class="img-wrap">
                <a href="<?php the_permalink(); ?>">
                    <?php echo consulting_get_image( get_post_thumbnail_id(), $img_size ); ?>
                </a>
                <div class="date-wrap third_bg_color">
                    <?php echo get_the_date(); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="post-info">
            <div class="post-title">
                <h4>
                    <a href="<?php the_permalink(); ?>" class="third_font_color_hv">
                        <?php the_title(); ?>
                    </a>
                </h4>
            </div>
            <?php if( has_excerpt() ): ?>
                <div class="post-excerpt">
                    <?php echo get_the_excerpt(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</li>